<?php
function get_annonces($offset,$nbarticles)
{
    $article=$_GET["article"];

    $lieu=$_GET["lieu"];
    $prix=$_GET["prix"];
    $link = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', 'root');
    $offset = (int) $offset;
    $nbarticles = (int) $nbarticles;
    $result =$link->query("SELECT annonce.Titre,annonce.Prix, annonce.Quantite, annonce.Photo, annonce.Commentaire, annonce.DateAnnonce, produits.Categorie, produits.Variete, produits.Nom, villesfrance.ville_departement, villesfrance.ville_nom_simple, utilisateursinscrits.Pseudo
FROM     annonce,produits, utilisateursinscrits,villesfrance 
WHERE    annonce.idProduits = produits.idProduits  
AND      annonce.idUtilisateurs=utilisateursinscrits.IDUtilisateur 
AND      utilisateursinscrits.Ville=villesfrance.ville_nom
AND      produits.Nom='$article'

AND      villesfrance.ville_nom_simple='$lieu'
AND      annonce.Prix<='$prix'
ORDER BY annonce.DateAnnonce DESC
LIMIT $offset,$nbarticles");
    
    return $result;
}
?>
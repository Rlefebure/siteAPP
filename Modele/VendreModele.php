<?php

if (isset($_POST['titreannonce']) && isset($_POST['categorie1'])  && isset($_POST['variete1']) && isset($_POST['produit1']) && isset($_POST['quantite1']) && isset($_POST['prix1'])  && isset($_POST['message'])){
    
$titreannonce = $_POST['titreannonce'];
$categorie1 = $_POST['categorie1'];
$variete1 = $_POST['variete1'];
$produit1 = $_POST['produit1'];
$quantite1 = $_POST['quantite1'];
$prix1 = $_POST['prix1'];
$com = $_POST['message'];
$pseudo = $_SESSION['pseudo'];
$bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', 'root');
    
$query = $bdd->query("SELECT idProduits FROM mydb.produits WHERE Nom = '$produit1' ");
$data = $query->fetch();
$idproduit = $data['idProduits'];
    
$request = $bdd->query("SELECT IDUtilisateur FROM mydb.utilisateursinscrits WHERE Pseudo = '$pseudo' ");
$donnees = $request->fetch(); 
$idutilisateur = $donnees['IDUtilisateur']; 
$date = date("Y-m-j");


$upload = basename($_FILES['image']['name']);

    


if ($_POST['titreannonce']!= "" && $_POST['categorie1']!= "" && $_POST['produit1']!= "" && $_POST['quantite1']!= "" && $_POST['prix1']!= "" ){
$req = $bdd->prepare("INSERT INTO mydb.annonce (Quantite, Prix, idProduits, idUtilisateurs, Commentaire, Titre, DateAnnonce, Photo) VALUES ('$quantite1', '$prix1', '$idproduit', '$idutilisateur', '$com', '$titreannonce', '$date', '$upload')");


$req->execute(array(

    'Quantite' => $quantite1,
    

    'Prix' => $prix1,
    
    
    'idProduits' => $idproduit,
    
    
    'idUtilisateurs' => $idutilisateur,
    
    
    'Commentaire' => $com,
    
    
    'Titre' => $titreannonce,

    'DateAnnonce' => $date,

    'Photo' => $upload));



    echo'<script>alert("Vente OK")</script>';
    echo '<meta http-equiv="refresh" content=0;URL="index.php">';   
}
else {

}
}
?>

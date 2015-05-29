<?php

if (isset($_POST['titreannonce']) && isset($_POST['categorie1'])  && isset($_POST['variete1']) && isset($_POST['produit1']) && isset($_POST['quantite1']) &&  isset($_POST['message']) 
    && isset($_POST['categorie5'])  && isset($_POST['variete5']) && isset($_POST['produit5']) && isset($_POST['quantite5'])){
    
$titreannonce = $_POST['titreannonce'];
$categorie1 = $_POST['categorie1'];
$variete1 = $_POST['variete1'];
$produit1 = $_POST['produit1'];
$quantite1 = $_POST['quantite1'];
$com = $_POST['message'];
$pseudo = $_SESSION['pseudo'];
$categorie5 = $_POST['categorie5'];
$variete5 = $_POST['variete5'];
$produit5 = $_POST['produit5'];
$quantite5 = $_POST['quantite5'];
$date = date("Y-m-j");
$bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', 'root');
    
$query = $bdd->query("SELECT idProduits FROM mydb.produits WHERE Nom = '$produit1' ");
$data = $query->fetch();
$idproduit = $data['idProduits'];
    
$sql = $bdd->query("SELECT idProduits FROM mydb.produits WHERE Nom = '$produit5' ");
$result = $sql->fetch();
$idproduit2 = $result['idProduits'];
    
$request = $bdd->query("SELECT IDUtilisateur FROM mydb.utilisateursinscrits WHERE Pseudo = '$pseudo' ");
$donnees = $request->fetch(); 
$idutilisateur = $donnees['IDUtilisateur'];
    
    


if ($_POST['titreannonce']!= "" && $_POST['categorie1']!= "" && $_POST['produit1']!= "" && $_POST['quantite1']!= ""  && $_POST['categorie5']!= "" && $_POST['produit5']!= "" && $_POST['quantite5']!= "" ){
$req = $bdd->prepare("INSERT INTO mydb.annonce (Quantite, idProduits, idUtilisateurs, Commentaire, idProduitsRecherche, QuantiteRecherche, Titre, DateAnnonce ) VALUES ('$quantite1', '$idproduit', '$idutilisateur', '$com', '$idproduit2', '$quantite5', '$titreannonce', '$date')");


$req->execute(array(

    'Quantite' => $quantite1,
    

    'Prix' => $prix1,
    
    
    'idProduits' => $idproduit,
    
    
    'idUtilisateurs' => $idutilisateur,

    
    'Commentaire' => $com,
    
    
    'idProduitsRecherche' => $idproduit2,
    

    'QuantiteRecherche' => $quantite5,


    'Titre' => $titreannonce,
    
     'DateAnnonce' => $date));


    echo'<script>alert("Echange ok OK")</script>';
    echo '<meta http-equiv="refresh" content=0;URL="index.php">';   
}
else {
echo'<script>alert("ya une couille dans la matrice")</script>';
}
}
?>

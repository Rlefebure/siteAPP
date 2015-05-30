<?php

if(isset($_POST['nom']) && isset($_POST['categorie'])  && isset($_POST['variete'])){
    
    /*$deposer=$_POST['deposer'];*/
    $categorie=$_POST['categorie'];
    $variete=$_POST['variete'];
    $nom=$_POST['nom'];
    $pseudo=$_SESSION['pseudo'];
    $bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', 'root');
    
    
        if($_POST['nom']!="" && $_POST['categorie']!="" && $_POST['variete']!=""){
            $req = $bdd->prepare("INSERT INTO mybd.annonce (Categorie, Variete, Nom) VALUES ('$categorie', '$variete', '$nom')");
            
            $req->execute(array(
                'Categorie' => $categorie,
                'Variete' => $variete,
                'Nom' => $nom,));
            
            
            echo'<script>alert("Deposer fruit : OK")</script>';
            echo '<meta http-equiv="refresh" content=0;URL="index.php">';   
        }
    else{
    }
}
?>
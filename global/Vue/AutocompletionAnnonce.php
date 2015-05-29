<?php

$bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', '');

$term = $_GET['term'];

$requete = $bdd->prepare('SELECT Nom FROM produits WHERE Nom LIKE :term'); 
$requete->execute(array('term' => '%'.$term.'%'));

$array = array(); 

while($donnee = $requete->fetch()) 
{
    array_push($array, $donnee['Nom']); 
}

echo json_encode($array);

?>
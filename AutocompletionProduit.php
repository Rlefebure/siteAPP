<?php

   $bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', '');

$term = $_GET['term'];

$requete = $bdd->prepare('SELECT Nom FROM produits WHERE Nom LIKE :term'); // j'effectue ma requête SQL grâce au mot-clé LIKE
$requete->execute(array('term' => '%'.$term.'%'));

$array = array(); // on créé le tableau

while($donnee = $requete->fetch()) // on effectue une boucle pour obtenir les données
{
    array_push($array, $donnee['Nom']); // et on ajoute celles-ci à notre tableau
}

echo json_encode($array); // il n'y a plus qu'à convertir en JSON

?>
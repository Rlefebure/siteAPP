<?php

   $bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', '');

$term = $_GET['term'];

$requete = $bdd->prepare('SELECT ville_nom FROM villesfrance WHERE ville_nom LIKE :term'); // j'effectue ma requête SQL grâce au mot-clé LIKE
$requete->execute(array('term' => '%'.$term.'%'));

$array = array(); // on créé le tableau

while($donnee = $requete->fetch()) // on effectue une boucle pour obtenir les données
{
    array_push($array, $donnee['ville_nom']); // et on ajoute celles-ci à notre tableau
}

echo json_encode($array); // il n'y a plus qu'à convertir en JSON

?>
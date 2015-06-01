<?php
$bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', 'root');

$query = $bdd->prepare("SELECT Photo FROM mydb.annonce ORDER BY DateAnnonce DESC LIMIT 4");
$data = $query->execute();


?>
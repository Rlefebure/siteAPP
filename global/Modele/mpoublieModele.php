<?php 
if (isset($_POST['email'])){
    
$headers = "From: pomme d happy <equipehappy@echangefruitsetlegumes.fr>";
$headers .= 'Content-type: text/html; charset=utf-8';
$email= $_POST['email'];
$bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', 'root');


    
##### Ici on crée la variable qui contiendra le nombre aléatoire #####
$nbr_chiffres = 6;
$i = 0;
while($i < $nbr_chiffres) {
        $chiffre = mt_rand(0, 9); // On génère le nombre aléatoire
        $chiffres[$i] = $chiffre;
        $i++;
}
$nombre = null;
// On explore le tableau $chiffres afin d'y afficher toutes les entrées qui s'y trouvent
foreach ($chiffres as $caractere) {
        $nombre .= $caractere;
}
##### On a fini de créer le nombre aléatoire, on le rentre maintenant dans une variable de session #####
$_SESSION['nouveaump'] = $nombre;
// On détruit les variables inutiles :
unset($chiffre);
unset($i);
unset($caractere);
unset($chiffres);
    
$pass_hache = sha1($nombre);
    
    
    
    
 
$req = $bdd->prepare("UPDATE utilisateursinscrits SET  Pass = '$pass_hache' WHERE Mail = '$email'");

$req->execute(array('Pass' => $pass_hache));

    

mail($email,
          'lol',
          $nombre, 
           $headers);   
    
    
    
    
    
    
    
    
}
?>
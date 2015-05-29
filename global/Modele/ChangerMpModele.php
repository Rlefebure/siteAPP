<?php
if (isset($_POST['nouveaump']) && isset($_POST['confirmermp'])) {
    
$nouveaump = $_POST['nouveaump'];
$confirmermp = $_POST['confirmermp'];
$pass_hache = sha1($_POST['nouveaump']);
$pseudo = $_SESSION['pseudo'];
$bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', 'root');
$longueur = strlen($nouveaump);

if ($nouveaump != "" && $confirmermp != "" && $longueur>=4 && $longueur<=20 && $nouveaump == $confirmermp) {

$req = $bdd->prepare("UPDATE utilisateursinscrits SET  Pass = '$pass_hache' WHERE Pseudo = '$pseudo'");

$req->execute(array(


       'Pass' => $pass_hache));


   echo '<script>alert("Mot de passe enregistre")</script>';
    session_destroy();
    
     echo '<meta http-equiv="refresh" content=0;URL="connexion.php">';
    
    }
    
    else {
        
    echo '<script>alert("Fail")</script>';
    echo '<meta http-equiv="refresh" content=0;URL="changermp.php">';
    }
}
?>
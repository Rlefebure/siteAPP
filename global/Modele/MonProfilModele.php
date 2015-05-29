<?php 

if (isset($_POST['ville']) && isset($_POST['mail']) && isset($_POST['nom']) && isset($_POST['prenom'])  && isset($_POST['adresse']) && isset($_POST['codepostale']) && isset($_POST['pseudoip'])){
    
    
$ville = $_POST['ville'];
$pseudoip = $_POST['pseudoip'];
$email = $_POST['mail'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$codepostale = $_POST['codepostale'];
    
$pseudo = $_SESSION['pseudo'];
    
$bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', 'root');




 
$req = $bdd->prepare("UPDATE utilisateursinscrits SET  Nom = '$nom', Mail = '$email', Prénom = '$prenom', CodePostal = '$codepostale', Ville = '$ville', Adresse = '$adresse', Pseudo = '$pseudoip' 
WHERE Pseudo = '$pseudo'");

$req->execute(array(

  
    'Pseudo' => $pseudoip,
    
    'Mail' => $email,
    
    
    'Prénom' => $prenom,
    
    
    'CodePostal' => $codepostale,
    
    
    'Ville' => $ville,
    

    'Adresse' => $adresse ,
    
    'Nom' => $nom));


    
    
   
    
   echo '<script>alert("OK")</script>';
    session_destroy();
    
     echo '<meta http-equiv="refresh" content=0;URL="connexion.php">';
    

}




?>
        
        
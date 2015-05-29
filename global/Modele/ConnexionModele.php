<?php 

if (isset($_POST['pseudo']) && isset($_POST['mp'])){
$pseudo = $_POST['pseudo'];
$pass_hache = sha1($_POST['mp']);
$bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', 'root');

 
$query = $bdd->query("SELECT StatutParticulier FROM mydb.utilisateursinscrits WHERE Pseudo = '$pseudo' ");
$data = $query->fetch(); 
$_SESSION['statut'] = $data['StatutParticulier'];
    
    
    
$youle = $bdd->query("SELECT Nom, Prénom, Adresse, CodePostal, Ville, Mail FROM mydb.utilisateursinscrits WHERE Pseudo = '$pseudo' ");
$fuck = $youle->fetch();
   $_SESSION['prenom']=$fuck['Prénom'];
   $_SESSION['nom']=$fuck['Nom'];
   $_SESSION['mail']=$fuck['Mail'];
   $_SESSION['ville']=$fuck['Ville'];
   $_SESSION['codepostale']=$fuck['CodePostal'];
   $_SESSION['adresse']=$fuck['Adresse'];
    
    

$req = $bdd->prepare("SELECT IDUtilisateur FROM mydb.utilisateursinscrits WHERE Pseudo = '$pseudo' AND Pass = '$pass_hache' ");
$req->execute(array(  


    
    'Pseudo' => $pseudo,

    'Pass' => $pass_hache));
    
  $resultat = $req->fetch(); 


}



?>
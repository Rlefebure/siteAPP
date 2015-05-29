<?php

if (isset($_POST['ville']) && isset($_POST['pseudo'])  && isset($_POST['mp']) && isset($_POST['mp2']) && isset($_POST['mail']) && isset($_POST['nom']) && isset($_POST['prenom'])  && isset($_POST['adresse']) && isset($_POST['codepostale'])){
    
$ville = $_POST['ville'];
$pseudo = $_POST['pseudo'];
$pass_hache = sha1($_POST['mp']);
$mp = $_POST['mp'];
$mp2 = $_POST['mp2'];
$email = $_POST['mail'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$codepostale = $_POST['codepostale']; 
$bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', 'root');
$longueur = strlen($pseudo);
$longueur2 = strlen($mp);
$date = date("Y-m-j");
    
$headers = "From: pomme d happy <equipehappy@echangefruitsetlegumes.fr>";
$headers .= 'Content-type: text/html; charset=utf-8';
  
    
    
    
    
    


$query = $bdd->prepare("SELECT Pseudo FROM mydb.utilisateursinscrits WHERE Pseudo = '$pseudo' ");
$query->execute(array($pseudo));
$data = $query->fetch();

$request = $bdd->prepare("SELECT Mail FROM mydb.utilisateursinscrits WHERE Mail = '$email' ");
$request->execute(array($email));
$donnees = $request->fetch();




if ( $_POST['verif_code'] == $_SESSION['verif_code'] && !$data && !$donnees && $_POST['prenom']!= "" && $_POST['nom']!= "" && $_POST['codepostale']!= "" && $_POST['ville']!= "" && $_POST['pseudo']!= "" && $_POST['mp']!= "" && $_POST['mp2']!= "" && $_POST['mail']!= "" && $_POST['mp']==$_POST['mp2']  && $longueur>=4 && $longueur<=20 && $longueur2>=4 && $longueur2<=20 && preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#is', $email)  ){

$req = $bdd->prepare("INSERT INTO mydb.utilisateursinscrits (Pseudo, Nom, Prénom, Adresse, Mail, Pass, CodePostal, Ville, DateInscription) VALUES ('$pseudo', '$nom', '$prenom', '$adresse', '$email', '$pass_hache', '$codepostale', '$ville', '$date' )");


$req->execute(array(

    'Pseudo' => $pseudo,
    

    'Pass' => $pass_hache,
    
    
    'Mail' => $email,
    
    
    'Nom' => $nom,
    
    
    'Prénom' => $prenom,
    
    
    'CodePostal' => $codepostale,
    
    
    'Ville' => $ville,
    

    'Adresse' => $adresse,
    
     'DateInscription' => $date));


    echo'<script>alert("Bienvenue sur Pomme d`Happy, le happy market des happy jardiniers !")</script>';
    echo '<meta http-equiv="refresh" content=0;URL="index.php">';
  
    mail($email,
          'lol',
          'lol', 
           $headers);
    session_destroy();
 
    

     
}

    
    else {  
    
if ($data) {
echo '<meta http-equiv="refresh" content=0;URL="inscription.php>';
    echo'<script>alert("Pseudo indisponible")</script>';
    
 
} else {
    
  echo '<meta http-equiv="refresh" content=0;URL="inscription.php>';
         $_SESSION['prenom']=$prenom;
         $_SESSION['nom']=$nom;
         $_SESSION['mail']=$email;
         $_SESSION['ville']=$ville;
         $_SESSION['codepostale']=$codepostale;
         $_SESSION['adresse']=$adresse;
        
         
                
        
}
}

  
}


?>
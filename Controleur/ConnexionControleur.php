<?php 

include ('./Vue/ConnexionVue.php');
include ('./Modele/ConnexionModele.php');

if (isset($_POST['pseudo']) && isset($_POST['mp'])){
if (!$resultat)

{

    echo '<script>alert("Mauvais identifiant ou mot de passe !")</script>';
      echo '<meta http-equiv="refresh" content=0;URL="connexion.php">';

}

else

{

    
$_SESSION['pseudo'] = $pseudo;

 echo '<meta http-equiv="refresh" content=0;URL="index.php">';

}
}

?>
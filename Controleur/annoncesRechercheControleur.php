<?php

if((isset($_GET["article"])) && (isset($_GET["quantite"])) && (isset($_GET["lieu"])) && (isset($_GET["prix"])))
   {
        if((empty($_GET["article"])) && (empty($_GET["quantite"])) && (empty($_GET["lieu"])) && (empty($_GET["prix"])))
           {
               require('../Modele/get_annonces.php');
           }
        if((empty($_GET["article"])) && (empty($_GET["quantite"])) && (empty($_GET["lieu"])) && (!empty($_GET["prix"])))
           {
                
               require('../Modele/get_annoncesRecherche0001.php');
           }
        if((empty($_GET["article"])) && (empty($_GET["quantite"])) && (!empty($_GET["lieu"])) && (empty($_GET["prix"])))
           {
               require('../Modele/get_annoncesRecherche0010.php');
           }
        if((empty($_GET["article"])) && (empty($_GET["quantite"])) && (!empty($_GET["lieu"])) && (!empty($_GET["prix"])))
           {
               require('../Modele/get_annoncesRecherche0011.php');
           }
        if((empty($_GET["article"])) && (!empty($_GET["quantite"])) && (empty($_GET["lieu"])) && (empty($_GET["prix"])))
           {
               require('../Modele/get_annoncesRecherche0100.php');
           }
        if((empty($_GET["article"])) && (!empty($_GET["quantite"])) && (empty($_GET["lieu"])) && (!empty($_GET["prix"])))
           {
               require('../Modele/get_annoncesRecherche0101.php');
           }
        if((empty($_GET["article"])) && (!empty($_GET["quantite"])) && (!empty($_GET["lieu"])) && (empty($_GET["prix"])))
           {
               require('../Modele/get_annoncesRecherche0110.php');
           }
        if((empty($_GET["article"])) && (!empty($_GET["quantite"])) && (!empty($_GET["lieu"])) && (!empty($_GET["prix"])))
           {
               require('../Modele/get_annoncesRecherche0111.php');
           }
        if((!empty($_GET["article"])) && (empty($_GET["quantite"])) && (empty($_GET["lieu"])) && (empty($_GET["prix"])))
           {
               require('../Modele/get_annoncesRecherche1000.php');
           }
        if((!empty($_GET["article"])) && (empty($_GET["quantite"])) && (empty($_GET["lieu"])) && (!empty($_GET["prix"])))
           {
               require('../Modele/get_annoncesRecherche1001.php');
           }
        if((!empty($_GET["article"])) && (empty($_GET["quantite"])) && (!empty($_GET["lieu"])) && (empty($_GET["prix"])))
           {
               require('../Modele/get_annoncesRecherche1010.php');
           }
        if((!empty($_GET["article"])) && (empty($_GET["quantite"])) && (!empty($_GET["lieu"])) && (!empty($_GET["prix"])))
           {
               require('../Modele/get_annoncesRecherche1011.php');
           }
        if((!empty($_GET["article"])) && (!empty($_GET["quantite"])) && (empty($_GET["lieu"])) && (empty($_GET["prix"])))
           {
               require('../Modele/get_annoncesRecherche1100.php');
           }
        if((!empty($_GET["article"])) && (!empty($_GET["quantite"])) && (empty($_GET["lieu"])) && (!empty($_GET["prix"])))
           {
               require('../Modele/get_annoncesRecherche1101.php');
           }
        if((!empty($_GET["article"])) && (!empty($_GET["quantite"])) && (!empty($_GET["lieu"])) && (empty($_GET["prix"])))
           {
               require('../Modele/get_annoncesRecherche1110.php');
           }
        if((!empty($_GET["article"])) && (!empty($_GET["quantite"])) && (!empty($_GET["lieu"])) && (!empty($_GET["prix"])))
           {
               require('../Modele/get_annoncesRecherche1111.php');
           }
        
    }
else
   {
    require('../Modele/get_annonces.php');
   }





$nbarticles=10; // règle le nombre d'articles par page
if (isset($_GET['page'])) //règlage des articles à afficher
   {
    $offset=($_GET['page']-1)*$nbarticles;
    $result=get_annonces($offset, $nbarticles);
   }
else
   {
    $result=get_annonces(0,10);
   }

$article=$_GET["article"];
$quantite=$_GET["quantite"];
$lieu=$_GET["lieu"];
$prix=$_GET["prix"];

if (isset($_GET['page'])) //règlage du changement de pages
   {
    if($_GET["page"]<=1)
        {
        $last='annoncesRechercheControleur.php'.'?page=1&article='.$article.'&quantite='.$quantite.'&lieu='.$lieu.'&prix='.$prix;
        $next='annoncesRechercheControleur.php'.'?page='.($_GET["page"]+1).'&article='.$article.'&quantite='.$quantite.'&lieu='.$lieu.'&prix='.$prix;
        }
    else
        {
        $last='annoncesRechercheControleur.php'.'?page='.($_GET["page"]-1).'&article='.$article.'&quantite='.$quantite.'&lieu='.$lieu.'&prix='.$prix;
        $next='annoncesRechercheControleur.php'.'?page='.($_GET["page"]+1).'&article='.$article.'&quantite='.$quantite.'&lieu='.$lieu.'&prix='.$prix;
        }
   }
else
   {
    $last='annoncesRechercheControleur.php?&article='.$article.'&quantite='.$quantite.'&lieu='.$lieu.'&prix='.$prix;
    $next='annoncesRechercheControleur.php'.'?page=2&article='.$article.'&quantite='.$quantite.'&lieu='.$lieu.'&prix='.$prix;
    
   }

require '../Vue/annoncesVue.php';

?>
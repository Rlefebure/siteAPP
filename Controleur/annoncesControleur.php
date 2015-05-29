<?php

if (isset($_GET['ville'])){include('./Modele/get_annoncesConnecte.php');} // verification: si l'utilisateur est connecté, on n'affiche que les offres de sa ville
else{include('./Modele/get_annonces.php');}

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

if (isset($_GET['page'])) //règlage du changement de pages
{
    
    if($_GET["page"]<=1){
        $last='annoncesControleur.php'.'?page=1';
        $next='annoncesControleur.php'.'?page='.($_GET["page"]+1);
    }
    else{
        $last='annoncesControleur.php'.'?page='.($_GET["page"]-1);
        $next='annoncesControleur.php'.'?page='.($_GET["page"]+1);
    }
}
else
{
    $last='annoncesControleur.php'.'';
    $next='annoncesControleur.php'.'?page=2';
    
}

include './Vue/annoncesVue.php';
?>
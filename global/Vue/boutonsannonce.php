<?php //boutons suivant et precedent
if (isset($_GET['page']))
{
    
    if($_GET["page"]<=1){
    $next=$_GET["page"]+1;
    echo '<a href="http://localhost/tests/annoncesControleur.php?page=1"> <input type="button" value="Precedent"> </a>';
    echo '<a href="http://localhost/tests/annoncesControleur.php?page='.$next.'"> <input type="button" value="Suivant"> </a>';
    }
    else{
    $last=$_GET["page"]-1;
    echo '<a href="http://localhost/tests/annoncesControleur.php?page='.$last.'"> <input type="button" value="Precedent"> </a>';
    $next=$_GET["page"]+1;
    echo '<a href="http://localhost/tests/annoncesControleur.php?page='.$next.'"> <input type="button" value="Suivant"> </a>';
    }
}
else
{
echo '<a href="http://localhost/tests/annoncesControleur.php"> <input type="button" value="Precedent"> </a>';
echo " - ";
echo '<a href="http://localhost/tests/annoncesControleur.php?page=2"> <input type="button" value="Suivant"> </a>';
}
?> 
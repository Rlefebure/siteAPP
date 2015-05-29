
<!DOCTYPE html>

<html>

    <head>
        <title>Page annonces</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
        <link href="Vue/style.css" rel="stylesheet" />
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        
        
    </head>
 <body>
    <header>
       <?php include("header.php"); ?>
    </header>
<br>
    <section>
        <div id="Annonce">
        <br>
         <div class="center">
             <fieldset class="fieldfruit">
                 <br>
                 <legend> <h1 class="center">Rechercher une Happy-Annonce</h1> </legend>
             <form id="recherchefruit"  method="get" action="./Controleur/annoncesRechercheControleur.php" >
        <div class="column-deux">    
            <p><label class="fruitlabel" for="article">Produit :</label>
                <input class="fruitinput" id="article" name="article"/></p>  
            <p> <label class="fruitlabel" for="quantite">Quantité min:</label>
                <input class="fruitinput" type="text" name="quantite" id="quantite"/></p>
            <br><p><label class="fruitlabel" for="lieu">Lieu :</label>
                <input class="fruitinput" type="text" name="lieu" id="lieu"/></p>
            <p><label class="fruitlabel" for="prix">Prix max (€) :</label>
                <input class="fruitinput" type="text" name="prix" id="prix"/>
            <br><i>(Pour échanger: <b>0,00</b>)</i></p>
        </div>
        <p class=rechercher><input class="fruitinput" type="submit" </p>
              
             </form>
            </fieldset>
        </div>

         
         <br> <br>
         <h1 class="center">Les happy annonces du moment:</h1><br>
        <hr class="hrfruit">
        
         
    <div id="affichageAnnonces">  
        <?php
        $result->setFetchMode(PDO::FETCH_OBJ);
        while($row =$result->fetch())
        {       
            echo '<article class="center fruit"><p><strong>'.htmlspecialchars(($row->Titre)).'</strong></p>';
            echo '<p class="column-deux"><img src="Vue/images/'.$row->Photo.'" alt="image du produit" height="250"><br><br><br><br>'
            
            .' <strong>'.htmlspecialchars($row->Quantite)
            .' x '.htmlspecialchars(($row->Nom)).'</strong>'
            .'<br>'.htmlspecialchars(($row->Categorie))
            .' - '.htmlspecialchars(($row->Variete))
            .'<br><br>Prix: '.htmlspecialchars($row->Prix).'€'
            .'<br>Commentaire: '.htmlspecialchars(($row->Commentaire))
            .'<br> Lieu: '.htmlspecialchars(($row->ville_nom_simple))
            .' ('.htmlspecialchars($row->ville_departement).')<br>'
            .'<i>'.htmlspecialchars($row->DateAnnonce).'</i><br><br>';
            echo '<a class="nounderline" href="http://localhost/tests/global/contact/?Pseudo='.($row->Pseudo).'"> <input  class="contactinput" type="button" value="Contacter '.($row->Pseudo).'"></a><br><br></p></article><hr class="hrfruit">';
        
        }
        $result->closeCursor();?>

    </div>
    <br>
    <div class="center">
    <?php
    echo '<a href="http://localhost/global/tests/Controleur/'.$last.'"> <input class="fruitinput" type="button" value="Précédent"></a>';
    echo ' - ';
    echo '<a href="http://localhost/global/tests/Controleur/'.$next.'"><input class="fruitinput" type="button" value="Suivant"></a><br>';
    ?>
    <br>
        </div>
        </div>
    </section>
       <footer>
            <?php include ('footer.php'); ?>
        </footer>
    <script>
        $(function() {
             $("#article").autocomplete({
                  source : 'Vue/AutocompletionAnnonce.php', minLength : 3
             });
         });
    </script>
  
    </body>
</html>
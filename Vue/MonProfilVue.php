
<!DOCTYPE html>
<html>
    <head>
        <title>Pomme d'Happy</title>
		  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
        <link href="Vue/style.css" rel="stylesheet" />
      
    </head>
    <body>
        
        
         
        <?php include("header.php"); ?>
            

        
<section id="monprofil">
            
            
 <form id="formuinscription" method="post" action="MonProfil.php"  >
     <fieldset>
        <legend>Modifier mon profil</legend>
            <p><label for="nom">Nom*  : </label>
            <input type="text" name="nom" id="nom" value="<?php echo $_SESSION['nom']; ?> "  /></p>

            <p><label for="prenom">Prénom*  : </label>
            <input type="text" name="prenom" id="prenom" value="<?php echo $_SESSION['prenom']; ?> "   /></p>
     
            <p><label for="adresse">Adresse :</label>
            <input type="text" name="adresse" id="adresse" value="<?php echo $_SESSION['adresse']; ?> "  /></p>
     
            
            <p><label for="codepostale">Code postal : </label>
           <input type="text" name="codepostale" id="codepostale" value="<?php echo $_SESSION['codepostale']; ?> "  /></p>
      
         
         
            <p><label for="ville">Ville : </label>
           <input type="text" name="ville" id="ville" value="<?php echo $_SESSION['ville']; ?> "  /></p>
      
     
         
            <p><label for="pseudoip">Pseudo*  : </label>
            <input type="text" id="pseudoip" name="pseudoip" value="<?php echo $_SESSION['pseudo']; ?> "   /></p>
        
            
        
            <p><label for="mail">Adresse email*  : </label>
            <input type="text" id="mail" name="mail" value=" <?php echo $_SESSION['mail'];?>"</p>

            <p><input id="inscrire" type="submit" value="Sauvegarder"  /></p>
            <p class="mpoublie"><a href="changermp.php">Changer de mot de passe</a></p>
 
    </fieldset>

</form>
</section>
        
        <footer>
            <?php include ('footer.php'); ?>
        </footer>
        
            
<script type="text/javascript" src="jsmonprofil.js"></script>           
            
</body>
</html>

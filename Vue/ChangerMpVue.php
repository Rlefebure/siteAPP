<!DOCTYPE html>

<html>

    <head>
        <title>Page connexion</title>
        
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
        <link href="Vue/style.css" rel="stylesheet" />
     
        
  
        
    </head>

    <body>
  <?php include ('header.php'); ?> 
        
        
        
        
       <section>
            
            <form id="formuinscription" method="post" action="changermp.php">
                 <fieldset>
                      <legend>Changer de mot de passe</legend>
                            <p><label for="nouveaump">Nouveau mot de passe : </label>
                            <input type="password" name="nouveaump" id="nouveaump" /></p>
        
                            <p><label for="confirmermp">Confirmer le mot de passe :</label>
                            <input type="password" name="confirmermp" id="confirmermp" /></p>
           
                </fieldset>
                
                            <p><input  id="valider" type="submit" value="envoyer" /></p> 
                           
            </form>
           
        </section>
            <footer>
                <?php include ('footer.php'); ?> 
        </footer>

    </body>
    
</html>
 
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
        
        
        
        
       <section id="connexion">
            
            <form id="formuinscription" method="post" action="connexion.php">
                 <fieldset>
                      <legend>Connexion</legend>
                            <p><label for="pseudo">Pseudo : </label>
                            <input type="text" name="pseudo" id="pseudo" /></p>
        
                            <p><label for="mp">Mot de passe :</label>
                            <input type="password" name="mp" id="mp" /></p>
           
                </fieldset>
                
                            <p><input  id="valider" type="submit" value="envoyer" /></p> 
                            <p class="mpoublie"><a href="mpoublie.php">Mot de passe oublié</a></p>
            </form>
           
        </section>
            <footer>
                <?php include ('footer.php'); ?> 
        </footer>

    </body>
    
</html>
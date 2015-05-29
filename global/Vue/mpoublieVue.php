<!DOCTYPE html>
<html>
    <head>
        <title>Pomme d'Happy</title>
		  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
        <link href="Vue/style.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        
    </head>
    <body>
    <header>
       <?php include("header.php"); ?>
    </header>
        <section>
             <form id="formuinscription" method="post" action="mpoublie.php"  >
     <fieldset>
        <legend>Récupérez votre mot de passe</legend>
            <p><label for="email">Adresse email  : </label>
            <input type="text" name="email" id="email"/></p>
 
    </fieldset>
                  <p><input  id="valider" type="submit" value="envoyer le mail de récupération" /></p> 

</form>
        </section>
        <br></br>
      <br></br>
  <br></br>
  <br></br>
  <br></br>
  <br></br>
         <footer>
            <?php include ('footer.php'); ?>
        </footer>
    </body>
</html>
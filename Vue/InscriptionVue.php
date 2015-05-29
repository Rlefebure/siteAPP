

<!DOCTYPE html>

<html>

    <head>
        <title>Page connexion</title>

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
        <link href="Vue/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        


        <script>
            $(function() {

                $( "#ville" ).autocomplete({
                    source : 'AutocompletionVille.php', minLength : 2
                });
            });
        </script>


      
    </head>

    <body>

        <?php include ('header.php'); ?>    

        <section>


                        
            <form id="formuinscription" method="post" action="inscription.php"  >
                <fieldset>
                    <legend>Informations personnelles</legend>
                        <p><label for="nom">Nom*  : </label>
                        <input type="text" name="nom" id="nom" value="<?php if (isset($_SESSION['nom'])){ echo $_SESSION['nom'];} ?> "  /></p>
                        <p><label for="prenom">Prénom*  : </label>
                        <input type="text" name="prenom" id="prenom" value="<?php if (isset($_SESSION['prenom'])){ echo $_SESSION['prenom'];} ?> "   /></p>
                        <p><label for="adresse">Adresse :</label>
                        <input type="text" name="adresse" id="adresse" /></p>
                        <p><label for="codepostale">Code postal* : </label>
                        <input type="text" id="codepostale" name="codepostale" value="<?php if (isset($_SESSION['codepostale'])){ echo $_SESSION['codepostale'];} ?> "></p>
                        <p><label for="ville">Ville* : </label>
                        <input type="text" id="ville" name="ville" value="<?php if (isset($_SESSION['ville'])){ echo $_SESSION['ville'];} ?> "></p>
                </fieldset>


                <fieldset>
                    <legend>Compte</legend>
                        <p><label for="pseudo">Pseudo*  : </label>
                        <input type="text" id="pseudo" name="pseudo"   /></p>
                        <p><label for="mp">Mot de passe*  : </label>
                        <input type="password" id="mp" name="mp"   /></p>
                        <p><label for="mp2">Confirmer le mot de passe*  : </label>
                        <input type="password" id="mp2" name="mp2"   /></p>
                        <p><label for="mail">Adresse email*  : </label>
                        <input type="text" id="mail" name="mail" value="<?php if (isset($_SESSION['mail'])){ echo $_SESSION['mail'];} ?> "  /></p>
                </fieldset>


                <p><img src="verif_code_gen.php" alt="Code de vérification" /></p>
                <p><label for="verif_code" >Recopiez le code ci-dessus* :</label>  <input type="text" id="verif_code"  name="verif_code" /></p>
                <p><input id="inscrire" type="submit" value="s'inscrire"  /></p>

            </form>
                    

        </section>

        
        
<footer>
<?php include ('footer.php'); ?> 
</footer>
            
</body>

<script type="text/javascript" src="Vue/jsinscription.js"></script>
        
</html>




















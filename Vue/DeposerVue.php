<!DOCTYPE html>
<html>
    <head>
        <title>Pomme d'Happy</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
        <link href="Vue/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        

        
   
    </head>
    
<body>
    
    <?php include('header.php') ?>
    
    <section>
    
        <form id="formuinscription" method="post" action="Deposer.php" enctype="multipart/form-data">
            <fieldset>
                <legend>Déspoer un nouveau fruit ou légume</legend>
                    
                <label>Nouveau fruit ou légume</label>            
                <input type="text" name="Nom" id="Nom">
                
                <label>Sa catégorie</label>            
                <input type="text" name="Categorie" id="Categorie">
                
                <label>Sa variété</label>            
                <input type="text" name="Variete" id="Variete">
                
                <p><input id="inscrire" type="submit" value="Déposer mon fruit ou légume" /></p>
                                                        
            </fieldset>                                    
        </form>
    
    
    </section>
    
    <footer>
        <?php include('footer.php') ?>
        
    </footer>
    
</body>
    
    
    
    
    
    
    
    
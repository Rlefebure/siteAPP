     
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
        
        
        <script>
              $(function() {

                $( "#variete1, #variete2, #variete3, #variete4, #variete5, #variete6, #variete7, #variete8" ).autocomplete({
                    source : 'AutocompletionVariete.php', minLength : 0
                });
            });
            
           

             $(function() {

                $( "#produit1, #produit2,#produit3,#produit4,#produit5,#produit6,#produit7,#produit8" ).autocomplete({
                    source : 'AutocompletionProduit.php', minLength : 0
                });
            });

            
            
            
            

  function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

        
        </script>
        
   
    </head>

    <body>
        

        <?php include("header.php"); ?>
        
        <section>
        <form id="formuinscription" method="post" action="echanger.php">
            <fieldset>
                 <legend>Mon Happy échange</legend>
                    <p><label for="titreannonce">Titre de l'annonce* :</label>
                    <input type="text" name="titreannonce" id="titreannonce" /></p>
            </fieldset>
       
       
    
    
            <fieldset>
                 <legend>Détail de vos produits</legend>
                
                    <p><label for="categorie1">Catégorie* : </label>
                    <select name="categorie1">
                    <option  selected>Catégorie</option>   
                              <option>Fruit</option>   
                              <option>Légume</option>   
                        </select></p>
                    <p><label for="variete1">Variété : </label>
                    <input type="text" name="variete1" id="variete1" /></p>
                    <p><label for="produit1">Produit*  : </label>
                    <input type="text" name="produit1" id="produit1" /></p>
                    <p><label for="quantite1">Quantité (pièces, poids)*  : </label>
                    <input type="text" name="quantite1" id="quantite1" /></p>
                
                     
            </fieldset>
            
   
        <fieldset>
            <legend>Détail de ce que vous recherchez</legend>
                 
               
         <p><label for="categorie5">Catégorie* : </label>
                    <select name="categorie5">
                    <option  selected>Catégorie</option>   
                              <option>Fruit</option>   
                              <option>Légume</option>   
                        </select></p>
                    <p><label for="variete5">Variété : </label>
                    <input type="text" name="variete5" id="variete5" /></p>
                    <p><label for="produit5">Produit*  : </label>
                    <input type="text" name="produit5" id="produit5" /></p>
                    <p><label for="quantite5">Quantité (pièces, poids)*  : </label>
                    <input type="text" name="quantite5" id="quantite5" /></p>
                    </fieldset>
                              <fieldset>
<legend>Donnez de la visibilité à votre annonce</legend>
            
                <p><label for="description">Commentaire :</label>
                    <textarea name="message" rows="8" cols="45" >  
                        
                    </textarea>
                </p>  </br>
         
                <p><label for="description">Image de vos fruits et légumes :</label>
                <input type="file" name="image" id="uploadImage" onchange="PreviewImage();" /></p>
       

            <img id="uploadPreview" style="width: 30%; height: 10%;" /></br>
            <p><input id="inscrire" type="submit" value="Déposer mon offre d'échange" /></p>
        
           </fieldset>
    </form>
            
        </section>
         <footer>
            <?php include ('footer.php'); ?>
        </footer>
    </body>
</html>
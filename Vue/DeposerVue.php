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

                $( "#variete1, #variete2, #variete3, #variete4" ).autocomplete({
                    source : 'AutocompletionVariete.php', minLength : 0
                });
            });
            
           

             $(function() {

                $( "#produit1, #produit2,#produit3,#produit4" ).autocomplete({
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
    
    <section>
    
        <form id="formuinscription" method="post">
            <fieldset>
                <legend>Déspoer un nouveau fruit ou légume</legend>
                    
                <label>Nouveau fruit ou légume</label>
            
                    <input type="text" name="nom" id="nom">
            
            
            </fieldset>                            
        
        </form>
    
    
    </section>
    
    
</body>
    
    
    
    
    
    
    
    
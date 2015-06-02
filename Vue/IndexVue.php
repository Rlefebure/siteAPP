<!DOCTYPE html>
<html>
    <head>
        <title>Pomme d'Happy</title>
		  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
        <link href="Vue/style.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        
        <script type="text/javascript">
   $(function(){
      setInterval(function(){
         $(".slideshow ul").animate({marginLeft:-350},800,function(){
            $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
         })
      }, 3500);
   });
</script>
        
        
      
    </head>

    <body>
        
    
        
    <?php include ('header.php'); ?>  

        
       
        <section>
            
<div class="slideshow">
	<ul>
        <?php $bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', 'root');

$query = $bdd->prepare("SELECT Photo FROM mydb.annonce ORDER BY DateAnnonce DESC LIMIT (1,1)");
$data = $query->execute();
        
        ?>
            
		<li><img src="images/<?php echo $data['Photo'];?>" width="1000" height="350" alt="fuck" /></li>

		
	</ul>
</div>



            
            
            
            
            <nav>
                <ul id="navi-bout">
                    <li><a href="annonces.php">Acheter</a></li>
                            <?php
                                    if (isset ($_SESSION['pseudo']) && (!empty($_SESSION['pseudo']))){ 

                                                            echo'<li><a href="vendre.php">Vendre</a></li>';
                                    }
                                    else {
                                                            echo'<li><a href="inscription.php">Vendre</a></li>';
                                    }
                                    ?>
                                                      <?php
                                    if (isset ($_SESSION['pseudo']) && (!empty($_SESSION['pseudo']))){ 

                                                            echo'<li><a href="echanger.php">Echanger</a></li>';
                                    }
                                    else {
                                                            echo'<li><a href="inscription.php">Echanger</a></li>';
                                    }
                            ?>
                    </ul>
            </nav>
            <a href="https://twitter.com/P_dHappy"><img src="Vue/images/cuicui.png" width="50"></a>
            <a href="https://www.facebook.com/pages/Pomme-dHappy/489376677895861"><img src="Vue/images/fb.png" width="40"></a>
        </section>    
       
    <footer>
        
         <?php include ('footer.php'); ?>
    </footer>
            
    </body>
</html>
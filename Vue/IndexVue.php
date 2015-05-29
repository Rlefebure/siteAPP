<?php session_start(); ?>
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
		<li><img src="Vue/images/LogoPh.png" alt="" width="1000" height="350" /></li>
		<li><img src="Vue/images/header2.jpeg" alt=""  width="1000" height="350" /></li>
		<li><img src="Vue/images/header3.jpeg" alt=""  width="1000" height="350" /></li>
		<li><img src="Vue/images/reload.png" alt=""  width="1000" height="350" /></li>
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
            
        </section>    
       
    <footer>
        
         <?php include ('footer.php'); ?>
    </footer>
            
    </body>
</html>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Pomme d'Happy</title>
		  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
        <link href="Vue/style.css" rel="stylesheet" />
</head>

<body>
    
    <?php include('header.php'); ?>
    
<section id="Qsn">
    <nav>
        <ul>
            <li> <a href="equipe.php">L'équipe</a></li>
            <li> <a href="Qsn.php">A propos</a></li>
        </ul>
    </nav>
    <div id="text">
        <h1>A propos de nous :</h1>
            <br>
            <br>
            <p>Créé en 2015, dans le cadre d'un projet d'étude à l'ISEP, l'APP, le site Pomme d'Happy est un site qui vous permet d'échanger vos fruits et légumes en toute confiance et en toute sérénité.</p>
            <br>
            <br>
            <p>Vous n'avez plus de papayes ? Vous voulez manger des topinambourgs ? Alors Pomme d'Happy est fait pour vous, car vous allez pouvoir échanger vos kiwis contre les fruits ou légumes de vos rêves !</p>
            <br>
            <p>Vous voulez vous faire des smoothies ou des quiches avec des ingrédients que vous n'avez pas ? Inscrivez vous à Pomme d'Happy en cliquant <a href="Inscription.php">ICI</a></p>
            <p> Déjà membre ? Cliquer <a href="Connexion.php">ICI</a> afin de vous connecter</p>   
    </div>
</section>
    <footer>
        <?php include('footer.php'); ?>
    </footer>
</body>            
</html>
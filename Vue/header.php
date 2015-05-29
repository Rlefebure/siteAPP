<header>


            <div id="logo">
                <a href="index.php"><img src="Vue/images/LogoPh.png" alt="accueil" id="logo"></a>        	

                <span class="titre">Pomme d'Happy</span>
            </div>





            <nav>
                <ul id="navi">    
                    <li class="Accueil"><a href="index.php">Accueil</a></li>
                    <li class="Annonces"><a href="annonces.php">Recherche</a></li>
                    <li class="Mon panier"><a href="monpanier.html">Mes annonces</a></li>
                    <li class="Forum"><a href="forum.html">Forum</a></li>

                    <?php
                    if (isset ($_SESSION['pseudo']) && (!empty($_SESSION['pseudo']))){ 

                        echo'<li class="deconnexion"><a href="deconnexion.php">Deconnexion</a></li>';
                    }
                    else {
                        echo'<li class="connexion2"><a href="connexion.php">Connexion</a></li>';
                    }
                    ?>

                    <?php
                    if (isset ($_SESSION['pseudo']) && (!empty($_SESSION['pseudo']))){

                            echo'<li class="inscription"><a href="monprofil.php">Mon profil</a></li>';
                    }
                    else {
                            echo'<li class="inscription"><a href="inscription.php">Inscription</a></li>';
                    }
                    ?>
                </ul>
            </nav>
        </header>    

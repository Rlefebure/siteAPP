<?php 
  
if(isset($_POST['Nom']) && isset($_POST['Categorie'])  && isset($_POST['Variete'])){
    
    $Categorie=$_POST['Categorie'];
    $Variete=$_POST['Variete'];
    $Nom=$_POST['Nom'];
    $bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', 'root');
    
    
        if($_POST['Nom']!="" && $_POST['Categorie']!="" && $_POST['Variete']!=""){
            $req = $bdd->prepare("INSERT INTO mydb.produits (Categorie, Variete, Nom) VALUES ('$Categorie', '$Variete', '$Nom')");
            $req->execute(array(
                
                'Categorie' => $Categorie,
                'Variete' => $Variete,
                'Nom' => $Nom));
            
            
            echo '<script>alert("Deposer fruit : OK")</script>';
            echo '<meta http-equiv="refresh" content=0;URL="index.php">';   
        
            
        }
   
   
}
?>
<!-- 
Projet de base de données : BioCycle

Gustavo Magaña López
Delehouzée Mathis 
Guily Thomas 
Duboquet Florent 

Faculté Polytechnique de Mons -2018-2019-
-->
<?php
   include_once 'includes/dbh.inc.php';
   include_once 'includes/dbh.class.php';
   include_once 'panier.class.php';
   // la variable qui contient la connexion:
   // $connexion
   $DB = new DB();
   $panier = new panier($DB);

   if(isset($_GET['id'])){
        $product = $DB->query('SELECT ID_produit FROM Produit WHERE ID_produit=:id' , array('id' => $_GET['id']));
        if(empty($product)){
            die("Ce produit n'existe pas");
        }
        $panier->add($product[0]->ID_produit);
        die('Produit ajouté au panier <a href="javascript:history.back()"> Retourner sur le catalogue </a>');
   } else {
       die("Vous n'avez aucun produit dans votre panier");
   }
    
?>

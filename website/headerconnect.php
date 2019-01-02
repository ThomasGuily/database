<?php
   include_once 'includes/dbh.inc.php';
   include_once 'includes/dbh.class.php';
   include_once 'panier.class.php';
   // la variable qui contient la connexion:
   // $connexion
   $DB = new DB();
   $panier = new panier($DB);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    
 <!-- <title>Titre de la page</title>  va falloir y passer ...-->
  
  <!--
  <meta name="description" content="">  faut ajouter pour le referencement
  <meta name="author" content=""> -->

  <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <script src="js/login.js"></script>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script type="text/javascript" src="js/send_button_info.js" ></script>

    <script>
    // This constants will enable knowing where the user came from.
      const url      = window.location.pathname;
      const filename = url.substring(url.lastIndexOf('/')+1);
    </script>

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="indexconnect.php">BioCycle</a> <!--  Ajouter le nom dans le containeur-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="indexconnect.php">
                            Accueil
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="notreentrepriseconnect.php">Notre entreprise</a>
                    </li>                 
                    <li class="nav-item">
                        <a class="nav-link" href="contactconnect.php">Contact</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link" href="login.php">Connexion</a>
                    </li>-->
                    <li class="nav-item"> 
                        <a class="nav-link" href="panier.php">Mon panier</a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link" href="index.php">Deconnexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

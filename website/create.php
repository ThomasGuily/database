<!-- 
Projet de base de données : BioCycle

Gustavo Magaña López
Delehouzée Mathis 
Guily Thomas 
Duboquet Florent 

Faculté Polytechnique de Mons -2018-2019-
-->
<!doctype html>
<?php session_start();?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <script src="js/login.js"></script>
  <link href="css/login.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

   
</head>
<body>

  <!-- Début navigation -->

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    
      
        <div class="container">
            <a class="navbar-brand" href="#">BioCycle</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">
                            Accueil
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Notre entreprise</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Connexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
  
    <!-- Fin navigation  -->
    <?php
    $verify = false ;
    $mysqli = new mysqli("localhost", "root", "", "biocycle");
    if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}?>
  
    <div class="login-page">
      
      
      
      <div class="form">
        <form action= '' method = 'post'>
          <input type="text" placeholder="Name" name = "Name"/>
          <input type="text" placeholder="Surname" name = "Surname"/>
          <input type="text" placeholder="Username" name = "Username"/>
          <input type="password" placeholder="Password" name = "Password"/>
          <input type="submit" value ="Submit" validate/>
          <p class="message">Already registered? <a href = 'login.php' > Log In  </a></p>
          <?php
          
          if (!empty ($_POST["Username"]) AND !empty ($_POST["Password"]) AND !empty ($_POST["Name"]) AND !empty ($_POST["Surname"])){
                
                  $username = $_POST["Username"];
                  $password = password_hash($_POST["Password"], PASSWORD_DEFAULT);
                  $name = $_POST["Name"];
                  $surname = $_POST["Surname"];
                  $sql = "INSERT INTO Client (Nom, Prenom, Identifiant, Mdp)
                  VALUES ('$name', '$surname', '$username','$password');";

                  if ($mysqli->query($sql) === TRUE) {
                    echo "Votre Compte a été créé !";
                    $_SESSION['connected'] = "co";
                    echo "<script> location.href='index.php'; </script>";
                    exit;
                  } 
                  else {
                    echo "Error: " . $sql . "<br>" . $mysqli->error;
                  }
          
          }

          else {
          $username = "";
          $password = "";
          $name = "" ;
          $surname ="" ;
          
          } 

          $mysqli->close();



          ?>
          </form>

      </div> 
           
      
    </div>
    
</body>
</html>

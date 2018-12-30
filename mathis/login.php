

<!doctype html>
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
$verify
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    
      
        <div class="container">
            <a class="navbar-brand" href="#">BioCycle</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">
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
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mon panier</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
  
    <!-- Fin navigation  -->
    <?php
    $verify = FALSE ;
    <div class="login-page">
      if ($verify = FALSE ) {
      <div class="form">
        <form action= 'connexion.php' method = 'post'>
          <input type="text" placeholder="Username" name = "Username"/>
          <input type="password" placeholder="Password" name = "Password"/>
          <input type="submit" value ="Connnexion"/>
          <p class="message">Not registered? <a href="#">Create an account</a></p>
        </form>
      </div>}
      if ($verify = TRUE ) {
        
      }

    </div>
    ?>
</body>
</html>
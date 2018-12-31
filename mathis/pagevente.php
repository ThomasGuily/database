
<!DOCTYPE html>
<html lang="en">
   

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/4-col-portfolio.css" rel="stylesheet">
    <?php
      include_once 'includes/dbh.inc.php';
      // la variable qui contient la connexion:
      // $connexion

      $option    = $_GET['button'];
      $my_origin = $_GET['origin'];
      switch ($option) {
        case "meat":
          $pageHeading = 'Viandes/Poissons/Oeufs';
          $requete     = "SELECT * FROM Produit INNER JOIN Type_Produit 
                          ON Produit.ID_typeproduit=Type_Produit.ID_typeproduit in 
                          (SELECT ID_typeproduit FROM Type_Produit WHERE Type_Produit.Nom_typeproduit='$pageHeading');";
          break;
        case "milk":
          $pageHeading = 'Produit Latiers';
          $requete     = "SELECT * FROM Produit INNER JOIN Type_Produit 
                          ON Produit.ID_typeproduit=Type_Produit.ID_typeproduit in 
                          (SELECT ID_typeproduit FROM Type_Produit WHERE Type_Produit.Nom_typeproduit='$pageHeading');";
          break;
        case "cereals":
          $pageHeading = 'Céréales';
          $requete     = "SELECT * FROM Produit INNER JOIN Type_Produit 
                          ON Produit.ID_typeproduit=Type_Produit.ID_typeproduit in 
                          (SELECT ID_typeproduit FROM Type_Produit WHERE Type_Produit.Nom_typeproduit='$pageHeading');";
          break;
        case "drinks":
          $pageHeading = 'Boissons';
          $requete     = "SELECT * FROM Produit INNER JOIN Type_Produit 
                          ON Produit.ID_typeproduit=Type_Produit.ID_typeproduit in 
                          (SELECT ID_typeproduit FROM Type_Produit WHERE Type_Produit.Nom_typeproduit='$pageHeading');";
          break;
        default:
          die("$option seems to be missing");
      }
    ?>
</head>

<body>

    <!-- Navigation -->
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
                        <a class="nav-link" href="notreentreprise.html">Notre entreprise</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Connexion</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Mon panier</a>
                    </li>
                    -->
                </ul>
            </div>
        </div>
    </nav>

        <!-- Page Content -->
        <div class="container">
            <!-- Page Heading -->
            <h1 class="my-4">
                <?php echo "$pageHeading"; ?>
                <small> Hola </small>
            </h1>
            <div class="row">
            <?php
            while($row = mysqli_fetch_aray($result))
            {
              echo  "<div class=\"col-lg-3 col-md-4 col-sm-6 portfolio-item\">";
              echo      "<div class=\"card h-100\">";
              echo          "<a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>";
              echo          "<div class=\"card-body\">";
              echo              "<h4 class=\"card-title\">";
              echo                  "<a href=\"#\">$row['marchand']</a>";
              echo              "</h4>";
              echo              "<p class=\"card-text\"> Lorem ipsum dolor sit amet </p>";
              echo          "</div>";
              echo      "</div>";
              echo  "</div>";
            } 
            ?>
            </div>
            <!-- /.row -->
            <!-- Pagination -->
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /.container -->
        <!-- Footer -->
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
            </div>
            <!-- /.container -->
        </footer>
        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

<!-- 
Projet de base de données : BioCycle

Gustavo Magaña López
Delehouzée Mathis 
Guily Thomas 
Duboquet Florent 

Faculté Polytechnique de Mons -2018-2019-
-->

<?php 
      require 'header.php';
?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-3">
                <h1 class="my-4"></h1> <!-- Encore rajouter le nom-->
                <div class="list-group">
                    <a id="meat" href="pagevente.php?origin=index.php&button=meat" class="list-group-item">
                      Viandes/Poissons/Oeufs
                    </a>
                    <a id="milk" href="pagevente.php?origin=index.php&button=milk" class="list-group-item">
                      Laitages
                    </a>
                    <a id="cereals" href="pagevente.php?origin=index.php&button=cereals" class="list-group-item">
                      Céréales
                    </a>
                    <a id="drinks" href="pagevente.php?origin=index.php&button=drinks" class="list-group-item">
                      Boissons
                    </a>
                    <a id="Fruits et légumes" href="pagevente.php?origin=index.php&button=fruits" class="list-group-item">
                      Fruits et légumes
                    </a>
                </div>
            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">

                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="images/bandeau1.jpeg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="images/bandeau2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="images/bandeau3.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="row">
<!--ITEM LIST-->            
<?php
    $products = $DB->query('SELECT * FROM `Produit`;');
    foreach( $products as $product)
    {
      echo   "<div class=\"col-lg-4 col-md-6 mb-4\">";
      echo   "  <div class=\"card h-100\">";
      echo   "    <a>";
      echo   "     <img class=\"card-img-top\" src=\"images/pics/Image_Produit$product->ID_produit.jpg\" alt=\"\">";
      echo   "    </a>";
      echo   "     <div class=\"card-body\">";
      echo   "       <h4 class=\"card-title\">";
      echo   "         <a> $product->Nom_produit </a>";
      echo   "       </h4>";
      echo   "       <h5> Prix: $product->Prix € </h5>";
      echo   "       <p class=\"card-text\"></p>";
      echo   "         <a class=\"add\" href=\"addpanier.php?id=$product->ID_produit\">";
      echo   "            ";
      echo   "         </a>";
      echo   "     </div>";
      echo   "     <div class=\"card-footer\">";
      echo   "       <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>";
      echo   "     </div>";
      echo   "  </div>";
      echo   "</div>";
    }
?>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
    <!-- Footer -->
<?php 
  require 'footer.php'; 
?>

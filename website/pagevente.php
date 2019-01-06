
<?php
    require "header.php";
?>


<?php

      $option    = $_GET['button'];
      $my_origin = $_GET['origin'];
      switch ($option) {
        case "meat":
          $pageHeading = 'Viandes/Poissons/Oeufs';
          $requete     = "SELECT * FROM Produit INNER JOIN 
                          (SELECT * FROM Type_Produit WHERE Nom_typeproduit='$pageHeading') AS aux 
                          ON Produit.ID_typeproduit=aux.ID_typeproduit;"; 
          break;
        case "milk":
          $pageHeading = 'Produits Laitiers';
          $requete     = "SELECT * FROM Produit INNER JOIN 
                          (SELECT * FROM Type_Produit WHERE Nom_typeproduit='$pageHeading') AS aux 
                          ON Produit.ID_typeproduit=aux.ID_typeproduit;"; 
          break;
        case "cereals":
          $pageHeading = 'Céréales';
          $requete     = "SELECT * FROM Produit INNER JOIN 
                          (SELECT * FROM Type_Produit WHERE Nom_typeproduit='$pageHeading') AS aux 
                          ON Produit.ID_typeproduit=aux.ID_typeproduit;"; 
          break;
        case "drinks":
          $pageHeading = 'Boissons';
          $requete     = "SELECT * FROM Produit INNER JOIN 
                          (SELECT * FROM Type_Produit WHERE Nom_typeproduit='$pageHeading') AS aux 
                          ON Produit.ID_typeproduit=aux.ID_typeproduit;"; 
          break;
        case "fruits":
          $pageHeading = 'Fruits et Légumes';
          $requete     = "SELECT * FROM Produit INNER JOIN 
                          (SELECT * FROM Type_Produit WHERE Nom_typeproduit='Fruits et Legumes') AS aux 
                          ON Produit.ID_typeproduit=aux.ID_typeproduit;"; 
          break;
        default:
          die("PAGE INTROUVABLE");
      }
?>

<!-- Page Content -->
        <div class="container">
            <!-- Page Heading -->
            <h1 class="my-4">
                <?php echo "$pageHeading"; ?>
            </h1>
            <div class="row">
            
            <?php

            $products = $DB->query($requete);
            foreach( $products as $product )
            {
              echo  "<div class=\"col-lg-3 col-md-4 col-sm-6 portfolio-item\">";
              echo      "<div class=\"card h-100\">";
              echo          "<a><img class=\"card-img-top\" src=\"images/pics/Image_Produit$product->ID_produit.jpg\" alt=\"\"></a>";
              echo          "<div class=\"card-body\">";
              echo              "<h4 class=\"card-title\">";
              echo                  "<a> $product->Nom_produit </a>";
              echo              "</h4>";
              echo              "<h5> Prix: $product->Prix € </h5>";
              echo              "<p class=\"card-text\">  </p>";
              echo              "<a class=\"add\" href=\"addpanier.php?id=$product->ID_produit\">";
              echo              "";
              echo              "</a>";
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
<?php
	require 'footer.php';
?>

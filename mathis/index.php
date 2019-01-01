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
<!--ITEM 1-->             
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <?php $products = $DB->query('SELECT * FROM `Produit` WHERE `ID_produit` = 1 ');?>
                            <?php foreach( $products as $product); ?>
                            <a><img class="card-img-top" src="images/pics/Image_Produit<?php echo $product->ID_produit ;?>.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#"><?php echo $product->Nom_produit; ?></a>
                                </h4>

                                <h5><?php echo $product->Prix; ?> € </h5>
                                
                                <p class="card-text"></p>

                                <a class="add" href="addpanier.php?id=<?php echo $product->ID_produit; ?>">
                                ajouter au panier
                                </a> 
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

<!--ITEM 2-->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <?php $products = $DB->query('SELECT * FROM `Produit` WHERE `ID_produit` = 2 ');?>
                            <?php foreach( $products as $product); ?>
                            <a href="#"><img class="card-img-top" src="images/pics/Image_Produit<?php echo $product->ID_produit ;?>.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">                               
                                    <a href="#"><?php echo $product->Nom_produit; ?></a>
                                </h4>
                                <h5><?php echo $product->Prix; ?> € </h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                                <a class="add" href="addpanier.php?id=<?php echo $product->ID_produit; ?>">
                                ajouter au panier
                                </a> 
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>
<!--ITEM 3-->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <?php $products = $DB->query('SELECT * FROM `Produit` WHERE `ID_produit` = 3 ');?>
                                <?php foreach( $products as $product); ?>
                                <a href="#"><img class="card-img-top" src="images/pics/Image_Produit<?php echo $product->ID_produit ;?>.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                
                                    <a href="#"><?php echo $product->Nom_produit; ?></a>
                                </h4>
                                <h5><?php echo $product->Prix; ?> € </h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                                <a class="add" href="addpanier.php?id=<?php echo $product->ID_produit; ?>">
                                ajouter au panier
                                </a> 
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>
<!--ITEM 4-->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                        <?php $products = $DB->query('SELECT * FROM `Produit` WHERE `ID_produit` = 4 ');?>
                                <?php foreach( $products as $product); ?>
                            <a href="#"><img class="card-img-top" src="images/pics/Image_Produit<?php echo $product->ID_produit ;?>.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                
                                    <a href="#"><?php echo $product->Nom_produit; ?></a>
                                </h4>
                                <h5><?php echo $product->Prix; ?> € </h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                                <a class="add" href="addpanier.php?id=<?php echo $product->ID_produit; ?>">
                                ajouter au panier
                                </a> 
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>
<!--ITEM 5-->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                        <?php $products = $DB->query('SELECT * FROM `Produit` WHERE `ID_produit` = 5 ');?>
                                <?php foreach( $products as $product); ?>
                            <a href="#"><img class="card-img-top" src="images/pics/Image_Produit<?php echo $product->ID_produit ;?>.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                
                                    <a href="#"><?php echo $product->Nom_produit; ?></a>
                                </h4>
                                <h5><?php echo $product->Prix; ?> € </h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                                <a class="add" href="addpanier.php?id=<?php echo $product->ID_produit; ?>">
                                ajouter au panier
                                </a> 
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>
<!--ITEM 6-->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                        <?php $products = $DB->query('SELECT * FROM `Produit` WHERE `ID_produit` = 6 ');?>
                                <?php foreach( $products as $product); ?>
                            <a href="#"><img class="card-img-top" src="images/pics/Image_Produit<?php echo $product->ID_produit ;?>.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                
                                    <a href="#"><?php echo $product->Nom_produit; ?></a>
                                </h4>
                                <h5><?php echo $product->Prix; ?> € </h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                                <a class="add" href="addpanier.php?id=<?php echo $product->ID_produit; ?>">
                                ajouter au panier
                                </a> 
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9734; &#9734;</small>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
    <!-- Footer -->
    <?php require 'footer.php'; ?>

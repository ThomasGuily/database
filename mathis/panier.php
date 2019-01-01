<?php 

    require 'header.php'; 
    #unset($_SESSION['panier']); 
    #var_dump($_SESSION);
    
    $ids = array_keys($_SESSION['panier']);
    #var_dump($ids);
    if(empty($ids)){
        $products=array();
    }else{ 
    #echo implode(',',$ids);
    $products = $DB->query("SELECT * FROM `Produit` WHERE `ID_produit` IN (".implode(',',$ids).")");
    }
    #var_dump($products);
    if(isset($_GET['del'])){
        $panier->del($_GET['del']);
    }
?>
 

<br/><br/><br/><br/><br/>


 <div class="container">
    
    <div class="row">
        <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Ingrédient</th>
            <th scope="col">Prix à l'unité</th>
            <th scope="col">Quantité</th>
            <th scope="col">Total</th>
            </tr>
        </thead>
    <?php foreach($products as $product): ?>
        <tbody>
            <tr>
            <th scope="row"><?php echo $product->Nom_produit ?></th>
            <td><?php echo $product->Prix ?> € </td>
            
            <td><?php
                      if(isset($_SESSION['panier'][$product->ID_produit])) { 
                        echo $_SESSION['panier'][$product->ID_produit]; 
                      }else{
                          echo "<script> location.reload() </script>";
                      }
            ?></td>
            <td><?php ?></td>
            <td> <a  href="panier.php?del=<?php echo $product->ID_produit;?>" class ="del"> Supprimer </a></td>
            </tr>
        </tbody>
    <?php endforeach; ?>        
        
        </table>
    </div>
 </div>

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
  <?php require 'footer.php'; ?>
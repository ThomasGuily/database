<?php   #attention juste avant <!DOCTYPE> pas oublier require 'class_panier.php';  dans header 
#faire super gaffe qu'il n'y ait pas d'espace entre la balise php et le début et de créer un nouvel objet $panier = new panier()

class panier{

    
    public function __construct(){
        if(!isset($_SESSION))
            { #si la variable session n'est pas activée -> var session sert de cookies pour la commande
            session_start(); #on l'initialise 
            }
    

        if(!isset($_SESSION['panier'])){
            $_SESSION['panier'] = array(); #Je crée un panier vide 
            }
            
        }
    
    /* public function total(){
        $total =0;
        $ids = array_keys($_SESSION['panier']);
        if(empty($ids)){
            $products=array();
        }else{ 
        $products = $this->DB->query("SELECT ID_produit,Prix FROM `Produit` WHERE `ID_produit` IN (".implode(',',$ids).")");
        }
        foreach($products as $product){
            $total += $product->Prix * $_SESSION['panier'][$product->ID_produit];
        }
        return $total;
    } */

    public function add($product_id){ #on remplis le panier de produits
       if(isset($_SESSION['panier'][$product_id])){
            $_SESSION['panier'][$product_id]++;
       }else{
            $_SESSION['panier'][$product_id]=1;
        }
    }

    public function del($product_id){
        unset($_SESSION['panier'][$product_id]);
    }
}
?>
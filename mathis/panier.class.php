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
    public function add($product_id){
        $_SESSION['panier'][$product_id]= 1;
    }
}

?>
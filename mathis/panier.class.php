<?php   #attention juste avant <!DOCTYPE> pas oublier require 'class_panier.php';  dans header 
#faire super gaffe qu'il n'y ait pas d'espace entre la balise php et le début et de créer un nouvel objet $panier = new panier()
class panier{

    public function __construct(){
        if(!isset($_SESSION){
            session_start();
        }
    }
    if(!isset($_SESSION['panier'])){
        $_SESSION['panier'] = array();
    }
    
}

?>
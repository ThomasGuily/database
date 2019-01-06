<!-- 
Projet de base de données : BioCycle

Gustavo Magaña López
Delehouzée Mathis 
Guily Thomas 
Duboquet Florent 

Faculté Polytechnique de Mons -2018-2019-
-->
﻿<?php 
      session_start();
      
      if (isset ($_SESSION['connected'])){
        require 'headerconnect.php';
      }
      else {
        require 'header.php';
      }
  
?>

Ccoucou 

<?php require 'footer.php'; ?>

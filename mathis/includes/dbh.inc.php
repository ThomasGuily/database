
<?php
   $servername = "localhost";
   $dBUsername = "root";
   $dBPassword = "";
   $dBName     = "biocycle";
   
   $connexion = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
   
   if (!$connexion) {
      die("Connection failed: ".mysqli_conect_error());
   }

?>


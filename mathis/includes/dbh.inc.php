
<?php
   $servername = "localhost";
   $dBUsername = "root";
   $dBPassword = "";
   $dBName     = "BioCycle";
   
   $connexion = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
   
   if (!$connexion) {
      die("Connection failed: ".mysqli_conect_error());
   }

?>


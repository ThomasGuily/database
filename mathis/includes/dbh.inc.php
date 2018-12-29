
<?php
   $servername = "localhost";
   $dBUsername = "root";
   $dBPassword = "";
   $dBName     = "BioCycle";
   
   $conection = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
   
   if (!$connection) {
      die("Connection failed: ".mysqli_conect_error());
   }

?>


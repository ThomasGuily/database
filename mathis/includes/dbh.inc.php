
<?php
  $servername = 'localhost';
  $dBUsername = 'root';
  $dBPassword = '';
  $dBName     = 'biocycle';
  $dns        = "mysql:dbname=$dBName;host=$servername";

  // J'ajoute la possibilite de changer entre l'implementation
  // des slides et l'ancienne.

  // ANCIENNE (mysqli):
  //$connexion = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
   
  //if (!$connexion) {
  //   die("Connection failed: ".mysqli_conect_error());
  //}
  // NOUVELLE (PDO):
  try {
    $base = new PDO($dns, $dBUsername, $dBPassword);
  }
  catch (Exception $e){
    die('Erreur:'.$e->getMessage());
  }


?>


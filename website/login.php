<!-- 
Projet de base de données : BioCycle

Gustavo Magaña López
Delehouzée Mathis 
Guily Thomas 
Duboquet Florent 

Faculté Polytechnique de Mons -2018-2019-
-->
﻿
<?php 
  require 'header.php';
?>

  <?php
    $verify = false ;
    $mysqli = new mysqli("localhost", "root", "", "biocycle");
    if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error); }
  ?>
  
<div class="login-page">
      
  <div class="form">
    <form action= '' method = 'post'>
      <input type="text" placeholder="Username" name = "Username"/>
      <input type="password" placeholder="Password" name = "Password"/>
      <input type="submit" value ="Connnexion " validate/>
        <p class="message">
          Not registered? 
          <a href = 'create.php'> 
            Create Account  
          </a>
        </p>
        <?php
          
          if (isset($_POST["Username"])){
          $username = $_POST["Username"];
          $password = $_POST["Password"];
          $result = $mysqli->query("SELECT `Mdp` FROM `Client` WHERE `Identifiant`='$username' ;");

          $row = mysqli_fetch_row($result);
           
            if(mysqli_num_rows($result)==0){ 
              echo 'Inscrivez vous !' ;
              exit;
            } 
            elseif (password_verify($password, $row[0] )){
              $bool2 = TRUE ;
              echo "<script> location.href='indexconnect.php'; </script>";
              return $bool2 ;
              exit;

            }
            else {
              echo 'Bad password !';
              exit;
            }  
          }
          else {
            $username = "";
            $password = "";
          }
          $mysqli->close();
        ?>

    </form>
  </div>       
</div>
    
<?php 
  require 'footer.php';
?>

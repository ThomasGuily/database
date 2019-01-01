
<?php require 'header.php'; ?>


    <?php
    $verify = false ;
    $mysqli = new mysqli("localhost", "root", "", "biocycle");
    if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error); } ?>
  
    <div class="login-page">
      
      
      
      <div class="form">
        <form action= '' method = 'post'>
          <input type="text" placeholder="Username" name = "Username"/>
          <input type="password" placeholder="Password" name = "Password"/>
          <input type="submit" value ="Connnexion " validate/>
          <p class="message">Not registered? <a href = 'create.php' > Create Account  </a></p>
          <?php
          
          if (isset($_POST["Username"])){
          $username = $_POST["Username"];
          $password = $_POST["Password"];
          
          }
          else {
          $username = "";
          $password = "";
          }
          $result = $mysqli->query("SELECT `Mdp` FROM `Client` WHERE `Identifiant`='$username' ;");

          $row = mysqli_fetch_row($result);
          $hash = $row[0];
          
           
            if(mysqli_num_rows($result)==0){ 
              echo 'Inscrivez vous !' ;
              #echo "<script> location.href='login.php'; </script>";
              exit;
            } 
            elseif (password_verify($password, $hash)){
              echo "<script> location.href='index.php'; </script>";
              exit;
            }
            else {
              echo 'Bad password !' ;
              #echo "<script> location.href='login.php'; </script>";
              exit;
          }$mysqli->close(); ?>

        </form>

      </div> 
           
      
    </div>
    
    <?php require 'footer.php'; ?>

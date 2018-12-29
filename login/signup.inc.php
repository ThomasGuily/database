<?php

if (isset($_POST['signup-submit'])) {
   require 'dbh.inc.php';
   $username = $_POST['uid'];
   $email    = $_POST['mail'];
   $password = $_POST['pwd'];
   $passwrep = $_POST['pwd-repeat'];

   if (empty($username) || empty($email) || empty($password) || empty($passwrep)) {
      header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail".$email);
      exit();
   }
}

?>

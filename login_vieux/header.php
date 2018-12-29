<!DOCTYPE html>
<html>
   <head>
      <neta charset="utf-8">
      <meta name="description" content="Login BioCycle">
      <meta name=viewport content="width=device-width, initial-scale=1">
      <title></title>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
   
      <header>
      <! La il y a des choses qu'il faut modifier
         genre les noms des images et dossiers.
      -->
         <nav>
            <a href="#">
               <img src="img/logo.png" alt="logo">
               <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="#">Fougueux</a></li>
                  <li><a href="#">Pas Fougueux</a></li>
                  <li><a href="#">Home</a></li>
               </ul>
               <div>
                  <form action="includes/login.inc.php" method="post">
                     <input type="text" name="mailuid" placeholder="Username/E-mail...">
                     <input type="password" name="mailuid" placeholder="Password...">
                     <button type="submit" name="login-submit"> Login </button>
                  </form>
                  <a href="signup.php">Signup</a>
                  <form action="includes/logout.inc.php" method="post">
                     <button type="submit" name="logout-submit"> Logout </button>
                  </form>
               </div>
            </a>
         </nav>
      </header>

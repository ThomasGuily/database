<?php 
session_start();
echo $_SESSION['connected'] ;
unset ($_SESSION['connected']);



header('Location: index.php');

?>
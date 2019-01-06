<?php
    $mysqli = new mysqli("localhost", "root", "", "biocycle");?>

<?php 
$username = $_POST["Username"];
$password = $_POST["Password"];

$result = $mysqli->query("SELECT `Mdp` FROM `Client` WHERE `Identifiant`='$username' ;");

$row = mysqli_fetch_row($result);
if(mysqli_num_rows($result)==0){ 
    echo 'Inscrivez vous !' ;
    echo "<script> location.href='login.html'; </script>";
        exit;
	} 

	if ($row[0] == $password){
		echo "<script> location.href='index.php'; </script>";
        exit;
        }
    else {
    	echo 'Bad password !' ;
    	echo "<script> location.href='login.html'; </script>";
        exit;
    }
#}
?>

<?php
    $mysqli = new mysqli("localhost", "root", "", "biocycle");?>

<?php 
$username = $_POST["Username"];
$password = $_POST["Password"];
#echo "Username : ".$username;
#echo "<br>";
#echo "password : ".$password;
$result = $mysqli->query("SELECT `Mdp` FROM `client` WHERE `Identifiant`='$username' ");
#var_dump($result);
$row = mysqli_fetch_row($result);
if(mysqli_num_rows($result)==0){ 
    echo 'Inscrivez vous !' ;
    echo "<script> location.href='login.html'; </script>";
        exit;
	} 
else{ 
	#while ($row = mysqli_fetch_assoc($result)) {
     	#print_r ($row);}
	if ($row[0] == $password){
		echo "<script> location.href='index.php'; </script>";
        exit;}
    else {
    	echo 'Bad password !' ;
    	echo "<script> location.href='login.html'; </script>";
        exit;
    }
}
?>
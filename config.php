<?php 

$severname = "localhost";
$username = "root";
$password = "";
$database = "signup_db";

$connection = new mysqli($severname, $username, $password, $database);

if($connection -> connect_error){
	die("Connection error");
}
else{
	echo"connection ok";
}

?>
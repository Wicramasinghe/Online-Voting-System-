<?php

include 'config.php';

$username = $_POST['username'];
$fullname = $_POST['fullname'];
$email    = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO user(username, fullname, email, password) Values(?, ?, ?, ?)";
$statement = $connection -> prepare($sql);

$statement -> bind_param("ssss", $username, $fullname, $email, $password);

if($statement -> execute()){
	echo"Inser data success";
}
else{
	echo"Insert data error";
}

?>
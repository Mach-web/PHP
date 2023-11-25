<?php
$server = "localhost";
$user = "root";
$pwd = "";
$DbName = "university";

//create a connection to the database
$conn = mysqli_connect($server, $user, $pwd, $DbName);
// Check if connection is established

/*
if($conn){
	echo "Connection is established successfully!";
	}
else{
	echo "Connection failed to establish";
	}
*/
?>
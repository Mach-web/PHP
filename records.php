<?php
include('connection.php');
//can also use require
// Table fields
$Adm = $_POST['AdmNo'];
$SName = $_POST['SName'];
$Gender = $_POST['Gender'];
$Course = $_POST['Course'];
$YoA = $_POST['Year'];

//use sql query to add records
$sql = "Insert into students values('$Adm', '$SName', '$Gender', '$Course', '$YoA')";

// Check if data is added
if($conn -> query($sql)){
	echo "<BR>Record added successfully!";
	}
else{
	echo "<BR>Error: ".$sql ." ".$conn->error;
	}
mysqli_close($conn);
?>
<?php
	//for MySQLi OOP
	// $conn = new mysqli('localhost', 'root', 'LetaBesi1234', 'mydatabase');
	// if($conn->connect_error){
	//    die("Connection failed: " . $conn->connect_error);
	// }
	////////////////

	//for MySQLi Procedural
	$conn = mysqli_connect('localhost', 'root', '', 'apple_storeproject');
	if(!$conn){
	    die("Connection failed: " . mysqli_connect_error());
	}
	////////////////
?>
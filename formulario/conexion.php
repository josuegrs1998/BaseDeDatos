<?php

	$servername = "localhost:3307";
	$username = "root";
	$password = "";
	

	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
	}

	
	$conexion=mysqli_connect($servername,$username,$password,'universidad');


	
    ?>
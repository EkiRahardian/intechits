<?php
	$servername = "localhost";
	$username = "ekirahardian";
	$password = "ekiverycool2X";
	$dbname = "ekirahar_useraccount";	

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
?>
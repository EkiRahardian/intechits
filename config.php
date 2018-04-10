<?php
	$servername = "localhost";
	$username = "ekirahar_admin";
	$password = "kurangajar1803";
	$dbname = "ekirahar_useraccount";
	$tblname = "user";	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}
?>
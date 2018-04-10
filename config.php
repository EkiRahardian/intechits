<?php
	$servername = "localhost";
	$username = "ekirahar_admin";
	$password = "kurangajar1803";
	$dbname = "ekirahar_useraccount";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}
?>
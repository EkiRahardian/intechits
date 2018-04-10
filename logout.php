<?php session_start();?>
<?php
	$host  = $_SERVER['HTTP_HOST'];
	$url   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	$redirect = 'index.php';
	if(session_destroy())
	{
		header("Location: http://$host$url/$redirect");	
	}
?>
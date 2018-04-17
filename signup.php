<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/images/icon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
<?php
	$message = "";
	function sanitize($input)
	{
		if (is_array($input))
		{
			foreach($input as $var=>$val)
			{
				$output[$var] = sanitize($val);
			}
		}
		else
		{
			if (get_magic_quotes_gpc())
			{
				$input = stripslashes($input);
			}
			$input  = cleanInput($input);
			$output = $input;
		}
		return $output;
	}
	function encrypt($string)
	{
		$output = false;
		$encrypt_method = "AES-256-CBC";
		$secret_key = 'w89sdfbsdinf9nq23nf9nf9wnfw9en';
		$secret_iv = 'c0shsd9fhShfa9fna9enadaWf';
		$key = hash('sha256', $secret_key);
		$iv = substr(hash('sha256', $secret_iv), 0, 16);
		$output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
		$output = base64_encode($output);
		return $output;
	}
	function submit()
	{
		global $message;
		include("config.php");
		$host  = $_SERVER['HTTP_HOST'];
		$url   = rtrim(dirname(htmlspecialchars($_SERVER["PHP_SELF"])), '/\\');
		$encryptPassword = encrypt($_POST['pass']);
		$myusername = mysqli_real_escape_string($conn,sanitize($_POST['username']));
		$mypassword = mysqli_real_escape_string($conn,sanitize($encryptPassword)); 
		$sql = "INSERT INTO User (username, password) VALUES ('" . $myusername . "', '" . $encryptPassword . "')";
		if ($conn->query($sql) === TRUE)
		{
			$message = "Your account has been created successfully";
		}
		else
		{
			$message = "Username already exist";
		}
		$conn->close();
	}
	if(isset($_POST['Submit']))
	{
	   submit();
	} 
?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="post">
					<span class="login100-form-title">
						Sign Up
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
					<br>
					</div>
					<div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" value="Sign Up" name="Submit">
						<a class="txt3">
							<br> <?php echo $message;?>
						</a>
					</div>
					<div class="container-login100-form-btn">
					<br>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" onclick="location.href='downloadxls.php'" type="button">
							Download Daftar Mahasiswa SI 2016 (Excel)
						</button>
					</div>
					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Already have an account?
						</span>

						<a href="login.php" class="txt3">
							Log in now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	
<!--===============================================================================================-->
	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/main2.js"></script>
<!--===============================================================================================-->
</body>
</html>
<?php
// Connection 
$servername = "localhost";
$username = "ekirahar_admin";
$password = "kurangajar1803";
$dbname = "ekirahar_useraccount";
$conn = new mysqli($servername, $username, $password, $dbname);
$db=mysqli_select_db($conn,$dbname);

$filename = "Webinfopen.xls"; // File Name
// Download file
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
$id_query = mysqli_query($conn,"select id from User");
$user_query = mysqli_query($conn,"select username from User");
$password_query = mysqli_query($conn,"select password from User");
$query = mysqli_query($conn,"select * from User");
// Write data to file
$flag = false;
while ($row = mysqli_fetch_assoc($query)) {
	
    if (!$flag) {
        // display field/	column names as first row
        echo implode("\t", array_keys($row)) . "\r\n";
        $flag = true;
    }
    echo implode("\t", array_values($row)) . "\r\n";
}
?>
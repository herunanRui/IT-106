<?php  
//php code to connect or configure database
//I use xampp database/server
$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "it106";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}
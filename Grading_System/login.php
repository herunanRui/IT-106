<?php
require_once('mysql_connection.php');
session_start();
if(isset($_POST['login'])){
	$type = $_POST['usertype'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$result	= mysqli_query($conn, "SELECT * FROM accounts where username='$username' and password = '$password' and usertype = '$type'");
	$row  = mysqli_fetch_array($result);
	if(is_array($row)) {
		$_SESSION["id"] = $row['id'];
		if($type == "ADMIN"){
			header('location: view_accounts.php');
		} elseif($type == "USER"){
			header('location: view_records.php');
		}
	} 
	else 
	{
		echo "<script>alert('Incorrect Username or Password!')</script>";
	}
}
?>
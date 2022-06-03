<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
</head>
<body>
	
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
</head>
<body>
<?php
$id = $_SESSION['id'];
$selectquery = "SELECT * FROM accounts where id = '$id'";
$selectresult = mysqli_query($conn, $selectquery);
while ($row = mysqli_fetch_array($selectresult)){
	$picture = $row['picture'];
	$lastname = $row['lastname'];
	$firstname = $row['firstname'];
}
?>
    <div style="padding: 5px 0px;" width="33.3%">
				<img src="images/<?php echo "$picture";?>"  style="width: 50px; height: 50px;background-color: #f9f5f5;border: 2px solid black;">
				<span style="font-size: 20px; font-family: algerian;"><?php echo " $firstname $lastname";?></span>
	</div>
	<br>
	<!--<table style="text-align: center;">-->
		<tr>
			<th style="text-align: right;" width="33.3%">
			</th>
			<th style="text-align: center;"  width="33.4%">
				<a href="view_accounts.php" style="text-decoration: none;background-color: #00FFFF ;color: #000;padding: 10px 20px;font-weight: bolder; border-radius: 14px; border: 3px solid #d05a5a;border-style: inset;">Teachers Account</a>
				<a href="create_account.php" style="text-decoration: none;background-color: #00FFFF;color: #000;padding: 10px 20px;font-weight: bolder; border-radius: 14px; border: 3px solid #d05a5a;border-style: inset;">Create Account</a>
				<a href="logout.php" style="text-decoration: none;background-color: #00FFFF;color: #000;padding: 10px 20px;font-weight: bolder; border-radius: 14px; border: 3px solid #d05a5a;border-style: inset;">Logout</a>
			</th>
		</tr>
	</table>
	<br>
</body>
</html>
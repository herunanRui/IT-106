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
    <div style="padding: 5px 0px; text-align: center;">
				<img src="images/<?php echo "$picture";?>"  style="width: 50px; height: 50px;background-color: #f9f5f5;border: 2px solid black;">
				<span style="font-size: 20px; font-family: algerian;"><?php echo "$firstname $lastname";?></span>
    </div>
	<br>
	<!--<table>-->
		<tr>
			<th style="text-align: right;width: 76.7%;">
				<a href="view_records.php" style="text-decoration: none;background-color: #00FFFF;color: #000;padding: 10px 20px;font-weight: bolder;border: 3px solid #d05a5a;border-style: inset; border-radius: 14px; ">Students Records</a>
				<a href="create_student_account.php" style="text-decoration: none;background-color: #00FFFF;color: #000;padding: 10px 20px;font-weight: bolder;border: 3px solid #d05a5a;border-style: inset; border-radius: 14px; ">Create Student Account</a>
				<a href="choose_grading.php" style="text-decoration: none;background-color: #00FFFF;color: #000;padding: 10px 20px;font-weight: bolder;border: 3px solid #d05a5a;border-style: inset; border-radius: 14px; ">Add Student Grades</a>
				<a href="logout.php" style="text-decoration: none;background-color: #00FFFF;color: #000;padding: 10px 20px;font-weight: bolder;border: 3px solid #d05a5a;border-style: inset; border-radius: 14px; ">Logout</a>
			</th>
		</tr>
	</table>
	<br>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
body{
       background-image: url('wallpaper.jpg');
       background-repeat: no-repeat;
       background-attachment: fixed;
       background-size: 100% 100%;
	  }
</style>
<?php
require_once('mysql_connection.php');

session_start();
if(!isset($_SESSION["id"]) || $_SESSION["id"] == '') 
{
	header('location: login.html');
}

if(isset($_POST['process'])){
	$grading = $_POST['grading'];
	header("location:add_student_grade.php?grading=$grading");
}
?>
<body>
	<center>
		<?php include('header.html');?>
		<?php include('teacher_header.php');?>
		</br>
		<form action="choose_grading.php" method="post">
			<table width="50%" cellspacing="0" style="border:5px solid #85C1E9;border-style: inset;">
				<tr>
					<th>
						<table width="100%" cellspacing="0">
							<tr>
								<th colspan="4" style="border-bottom: 1px solid;background-color: #AED6F1;padding: 5px 0px;font-size: 45px;">Add Students Grade</th>
							</tr>
							<tr>
								<th width="33.3%" style="background-color: #D6EAF8;border-bottom: 1px solid;padding: 5px 0px;">Choose Grading: </th>
								<th width="33.4%" style="background-color: #D6EAF8;border-bottom: 1px solid;padding: 5px 0px;">
									<select name="grading">
										<option value="First Grading">First Grading</option>
										<option value="Second Grading">Second Grading</option>
										<option value="Third Grading">Third Grading</option>
										<option value="Fourth Grading">Fourth Grading</option>
									</select>
								</th>
								<th style="background-color: #D6EAF8;border-bottom: 1px solid;" width="33.3%">
									<input type="submit" name="process" value="Process" style="text-decoration: none;padding: 0px 15px;color: black;background-color: white;border: 2px solid black;border-style: outset;border-radius: 5px;">
								</th>
							</tr>
						</table>
					</th>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>
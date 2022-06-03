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
?>
<body>
	<center>
		<?php include('header.html');?>
		<?php include('teacher_header.php');?>
		</br>
		<table width="80%" cellspacing="0" style="border:5px solid #85C1E9;border-style: inset;">
			<tr>
				<th>
					<table width="100%" cellspacing="0">
						<tr>
							<th colspan="10" style="border-bottom: 1px solid;background-color: #AED6F1;padding: 5px 0px;font-size: 45px;">Students Records</th>
						</tr>
						<tr>
							<th width=15%" style="background-color: #D6EAF8;border-bottom: 1px solid;padding: 5px 0px;">Picture</th>
							<th width="15%" style="background-color: #D6EAF8;border-bottom: 1px solid;padding: 5px 0px;">Name</th>
							<th width="7%" style="background-color: #D6EAF8;border-bottom: 1px solid;padding: 5px 0px;">First Grading</th>
							<th width="7%" style="background-color: #D6EAF8;border-bottom: 1px solid;padding: 5px 0px;">Second Grading</th>
							<th width="7%" style="background-color: #D6EAF8;border-bottom: 1px solid;padding: 5px 0px;">Third Grading</th>
							<th width="7%" style="background-color: #D6EAF8;border-bottom: 1px solid;padding: 5px 0px;">Fourth Grading</th>
							<th width="7%" style="background-color: #D6EAF8;border-bottom: 1px solid;padding: 5px 0px;">Final Grade</th>
							<th width="10%" style="background-color: #D6EAF8;border-bottom: 1px solid;padding: 5px 0px;">Remarks</th>
							<th colspan="2" style="background-color: #D6EAF8;border-bottom: 1px solid;padding: 5px 0px;">Options</th>
						</tr>
						<?php
						$query = "SELECT * FROM records where teacher_number = '".$_SESSION["id"]."' order by lastname ASC";
						$result = mysqli_query($conn, $query);
						while($row = mysqli_fetch_array($result)){
							$id = $row['id']; 
							$firstname = $row['firstname']; 
							$lastname = $row['lastname']; 
							$mi = $row['mi']; 
							$first_grading = $row['first_grading']; 
							$second_grading = $row['second_grading']; 
							$third_grading = $row['third_grading']; 
							$fourth_grading = $row['fourth_grading'];
							$final_grade = ($first_grading + $second_grading + $third_grading + $fourth_grading) / 4;
							if($final_grade>=75){
								$remarks = "PASSED";	
							} else {
								$remarks = "FAILED";
							}
							$picture = $row['picture']; 
						?>
						<tr>
							<th style="background-color: #D6EAF8;border-bottom: 1px solid;"><img src="images/<?php echo "$picture";?>"  style="width: 40px; height: 40px;background-color: #f9f5f5;border: 2px solid black;"></th>
							<th style="background-color: #D6EAF8;border-bottom: 1px solid;"><?php echo "$lastname , $firstname $mi.";?></th>
							<th style="background-color: #D6EAF8;border-bottom: 1px solid;"><?php echo "$first_grading";?></th>
							<th style="background-color: #D6EAF8;border-bottom: 1px solid;"><?php echo "$second_grading";?></th>
							<th style="background-color: #D6EAF8;border-bottom: 1px solid;"><?php echo "$third_grading";?></th>
							<th style="background-color: #D6EAF8;border-bottom: 1px solid;"><?php echo "$fourth_grading";?></th>
							<th style="background-color: #D6EAF8;border-bottom: 1px solid;"><?php echo "$final_grade";?></th>
							<th style="background-color: #D6EAF8;border-bottom: 1px solid;"><?php echo "$remarks";?></th>
							<th style="background-color: #D6EAF8;border-bottom: 1px solid;" width="10%">
								<a href="edit_student.php?id=<?php echo $row['id'];?>" style="text-decoration: none;padding: 0px 15px;color: black;background-color: white;border: 2px solid black;border-style: outset;border-radius: 5px;">Edit</a>
							</th>
							<th style="background-color: #D6EAF8;border-bottom: 1px solid;" width="10%">
								<a href="delete_student.php?id=<?php echo $row['id'];?>" style="text-decoration: none;padding: 0px 15px;color: black;background-color: white;border: 2px solid black;border-style: outset;border-radius: 5px;">Delete</a>
							</th>

						</tr>
						<?php }?>
					</table>
				</th>
			</tr>
		</table>
	</center>
</body>
</html>
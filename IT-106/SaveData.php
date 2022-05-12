<?php  
//php code for inserting data from html file to database
if (isset($_POST['Fname']) && isset($_POST['Lname']) && isset($_POST['age']) 
    && isset($_POST['course']) && isset($_POST['yrlvl'])) {
	include 'connect.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$fname = validate($_POST['Fname']);
	$lname = validate($_POST['Lname']);
	$age = validate($_POST['age']);
	$course = validate($_POST['course']);
	$yrlvl = validate($_POST['yrlvl']);

	if (empty($fname) || empty($lname)) {
		header("Location: IT106_SaveData.html");
	}else {

		$sql = "INSERT INTO students (stud_ID, first_Name, last_Name, age, course, year_Lvl) 
		VALUES(' ', '$fname', '$lname', '$age', '$course', '$yrlvl')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo "Your data was sent to database successfully!";
		}else {
			echo "Your data could not be sent!";
		}
	}

}else {
	header("Location: IT106_SaveData.html");
}
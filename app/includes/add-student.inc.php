<?php

include_once("dbh.inc.php");
// If upload button is clicked ...
  if (isset($_POST['submit'])) {
  		// Get text
		$StudentName=$_POST['StudentName'];
		$emailid =$_POST['emailid'];
		$Phonenumber =$_POST['Phonenumber'];
		$CollegeRollnumber =$_POST['CollegeRollnumber'];
		$BloodGroup=$_POST['BloodGroup'];
		$universityroll=$_POST['universityroll'];
		$alumnicode=$_POST['alumnicode'];
		$dob=$_POST['dob'];
		
		
	$sql = "INSERT INTO student_details (name, email_id, phone_number,dob, college_rollno, blood_group, university_rollno, alumnicode) VALUES ('$StudentName','$emailid','$Phonenumber','$dob','$CollegeRollnumber','$BloodGroup','$universityroll','$alumnicode')";
  	// execute query
  	mysqli_query($conn, $sql);
	
  	
	
	
  			$msg = "Student Added successfully";
	header("Location:../add-student.php?msg=".$msg);
  	
  
  
  }else
  {
	  header("Location:../add-student.php");
  }
  
<?php

include_once("dbh.inc.php");
// If upload button is clicked ...
  if (isset($_POST['submit'])) {
  		// Get text
		$eventname=$_POST['eventname'];
		$startdate=$_POST['startdate'];
		$enddate=$_POST['enddate'];
		$starttime=$_POST['starttime'];
		$endtime=$_POST['endtime'];
		$eventdetails=$_POST['eventdetails'];
		$host_name=$_POST['hostname'];
		$host_email=$_POST['hostemail'];
		$host_phone=$_POST['hostphonenumber'];
		
		
		$image = $_FILES['image']['name'];
		
		
	$sql = "INSERT INTO event_details (event_name, starts_form, ends_on,starts_at, ends_at, event_details, cover_photo, host_name, host_email, host_phone) VALUES ('$eventname','$startdate','$enddate','$starttime','$endtime','$eventdetails','$image','$host_name','$host_email','$host_phone')";
  	// execute query
  	mysqli_query($conn, $sql);
	
	$target = "../event_doc/".basename($image);
  			
	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Question added successfully";
	header("Location:../add-event.php?msg=".$msg);
		
  	}
  	
	
	
  			$msg = "Student Added successfully";
	header("Location:../add-event.php?msg=".$msg);
  	
  
  
  }
  
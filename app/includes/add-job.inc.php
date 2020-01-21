<?php

include_once("dbh.inc.php");
// If upload button is clicked ...
  if (isset($_POST['submit'])) {
  		// Get text
		$jobpost=$_POST['jobpost'];
		$location =$_POST['location'];
		$wkhours =$_POST['wkhours'];
		$requirements =$_POST['requirements'];
		$description=$_POST['description'];
		$date=$_POST['date'];
		$name=$_POST['name'];
		$hostemail=$_POST['hostemail'];
		$phonenumber=$_POST['phonenumber'];
	
		
		
	$sql = "INSERT INTO add_job (jobpost, location, wkhours,requirements, description, date, name, hostemail, phonenumber) VALUES ('$jobpost','$location','$wkhours','$requirements','$description','$date','$name', '$hostemail', '$phonenumber')";
  	// execute query
  	mysqli_query($conn, $sql);
	
  	
	
	
  			$msg = "Student Added successfully";
	header("Location:../add-job.php?msg=".$msg);
  	
  
  
  }else
  {
	  header("Location:../add-job.php");
  }
  
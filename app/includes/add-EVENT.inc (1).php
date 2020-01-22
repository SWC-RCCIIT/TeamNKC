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
		$eventfile=$_POST['eventfile'];
		$eventphoto=$_POST['eventphoto'];
		$hostname=$_POST['hostname'];
		$hostemail=$_POST['hostemail'];
		$hostphonenumber=$_POST['hostphonenumber'];
		$hostalumninumber=$_POST['hostalumninumber'];
		
		
	$sql = "INSERT INTO event_details (eventname,startdate,enddate,starttime,endtime,eventdetails,eventfile,eventphoto,hostname,hostemail,hostphonenumber,hostalumninumber)VALUES	('$eventname','$startdate','$enddate','$starttime','$endtime','$eventdetails','$eventfile','$eventphoto','$hostname','$hostemail','$hostphonenumber','$hostalumninumber')";
  	// execute query
  	mysqli_query($conn, $sql);
	
  	
	
	
  			$msg = "Student Added successfully";
	header("Location:../add-student.php?msg=".$msg);
  	
  
  
  }else
  {
	  header("Location:../add-student.php");
  }
  
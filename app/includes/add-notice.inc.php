<?php

include_once("dbh.inc.php");
// If upload button is clicked ...
  if (isset($_POST['submit'])) {
  		// Get text
		$noticesubject=$_POST['noticesubject'];
		$deadline =$_POST['deadline'];
		$eventfile =$_POST['eventfile'];
		$T&C =$_POST['T&C'];
		$name=$_POST['name'];
		$hostemail=$_POST['hostemail'];
		$phonenumber=$_POST['phonenumber'];
		
		
	$sql = "INSERT INTO Notice_details (noticesubject,deadline,eventfile,T&C,name,hostemail,phonenumber) VALUES
    	('$noticesubject','$deadline','$eventfile','$T_C','$name','$hostemail','$phonenumber')";
  	// execute query
  	mysqli_query($conn, $sql);
	
  	
	
	
  			$msg = "Notice_details Added successfully";
	header("Location:../add-notice.php?msg=".$msg);
  	
  
  
  }else
  {
	  header("Location:../add-notice.php");
  }
  
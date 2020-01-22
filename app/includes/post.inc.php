<?php
session_start();
include_once("dbh.inc.php");
// If upload button is clicked ...
  if (isset($_POST['submit'])) {
  		// Get text
		$body=$_POST['body'];	
		$u_id=$_SESSION['id'];	
		$posted_at = date('Y-m-d H:i:s');
	
		
		
	$sql = "INSERT INTO post (body, posted_at,u_id) VALUES ('$body','$posted_at','$u_id')";
  	// execute query
  	mysqli_query($conn, $sql);
	
  	
	
	
  			$msg = "Student Added successfully";
	header("Location:../add-certificate.php?msg=".$msg);
  	
  
  
  }else
  {
	  header("Location:../add-certificate.php");
  }
  
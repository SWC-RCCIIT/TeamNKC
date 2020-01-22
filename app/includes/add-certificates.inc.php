<?php

include_once("dbh.inc.php");
// If upload button is clicked ...
  if (isset($_POST['submit'])) {
  		// Get text
		$diya=$_POST['achievements'];
		$hindol =$_POST['achievementyear'];
		
		
		
	$sql = "INSERT INTO gautami (col1, col2) VALUES ('$diya','$hindol')";
  	// execute query
  	mysqli_query($conn, $sql);
	
  	
	
	
  			$msg = "Student Added successfully";
	header("Location:../add-certificate.php?msg=".$msg);
  	
  
  
  }else
  {
	  header("Location:../add-certificate.php");
  }
  
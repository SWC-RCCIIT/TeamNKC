<?php

include_once("dbh.inc.php");
// If upload button is clicked ...
  if (isset($_GET['id'])) {
  		// Get text
 	$id=$_GET['id'];
	
  	$sql = "UPDATE event_details SET status='1' WHERE b_id='$id'";
  	// execute query
  	mysqli_query($conn, $sql);
  			$msg = "Batch Actived successfully";
	header("Location:../checkbatch.php?msg=".$msg);
  	
  
  }else
  {
	  header("Location:../checkbatch.php");
  }
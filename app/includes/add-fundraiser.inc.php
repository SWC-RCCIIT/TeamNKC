<?php

include_once("dbh.inc.php");
// If upload button is clicked ...
  if (isset($_POST['submit'])) {
  		// Get text
		$fundraisername=$_POST['fundraisername'];
		$startdate =$_POST['startdate'];
		$enddate =$_POST['enddate'];
		$amount =$_POST['amount'];
		$fundraiserdesc =$_POST['fundraiserdesc'];
		$hostname=$_POST['hostname'];
		$hostemail=$_POST['hostemail'];
		$hostphonenumber=$_POST['hostphonenumber'];
		$bankingdet=$_POST['bankingdet'];
		
		
	$sql = "INSERT INTO add_fundraiser (fundraisername,startdate,enddate,amount,fundraiserdesc,hostname,hostemail,hostphonenumber,bankingdet) VALUES
    	('$fundraisername','$startdate','$enddate','$amount','$fundraiserdesc','$hostname','$hostemail','$hostphonenumber','$bankingdet')";
  	// execute query
  	mysqli_query($conn, $sql);
	
  	
	
	
  			$msg = "Fundraiser Added successfully";
	header("Location:../add-fundraiser.php?msg=".$msg);
  	
  
  
  }else
  {
	  header("Location:../add-fundraiser.php");
  }
  
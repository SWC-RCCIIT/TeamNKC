<?php
session_start();

include_once('dbh.inc.php');

	if(isset($_POST['submit']))
	{
		$username=$_POST['your_name'];
		$password=$_POST['your_pass'];
		echo $password;
		$password=sha1($password);

							$sql = "SELECT * FROM user_details WHERE u_id =? AND password=?";
							$stmt=$conn->prepare($sql);
							$stmt->bind_param("ss",$username,$password);
							$stmt->execute();
							$result = $stmt->get_result();
							$row= $result->fetch_assoc();
							
							session_regenerate_id();
							$_SESSION['u_id']= $row['id'];
							
							
							
								
								
																		if($result->num_rows==1)
																		{
																			header("Location:../index.php");
																		}
																		
																		else
																		{
																			$msg = "Username or Password is Incorrect!";
																			header("Location:../sigin.php?msg=".$msg);
																		}
								
								
							
						
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
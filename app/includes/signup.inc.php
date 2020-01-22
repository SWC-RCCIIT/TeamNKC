<?php

if(isset($_POST['submit'])){
	include_once 'dbh.inc.php';
	
	$name = $_POST['name'] ;
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$dob = $_POST['dob'];
	$uid = $_POST['colroll'];
	$alumnumber = $_POST['alumnumber'];
	$pwd = $_POST['pass'];
	// Get image name
  	$image = $_FILES['image']['name'];
	
	
				$sql = "SELECT * FROM user_details WHERE collegeroll='$uid'";
				$result = mysqli_query($conn, $sql);
				$resultcheck =mysqli_num_rows($result);
				if($resultcheck > 0){
					$msg="Account is already present";
					header("Location:../signup.php?msg=".$msg);
					exit();
				}else {
					
					$res=mysqli_query($conn,"SELECT * FROM student_details");
						while($row=mysqli_fetch_array($res)){
						if($dob==$row['dob'] && $alumnumber==$row['alumnicode'] && ($email==$row['email_id'] || $phone==$row['phone_number']))
						{
							echo("wtf");
					$hashedpwd = sha1($pwd);
					$sql = "INSERT INTO user_details (u_id, name, email, phoneno, dob, collegeroll, alumnino, password, photo) VALUES ('$uid', '$name', '$email', '$phone', '$dob', '$uid','$alumnumber','$hashedpwd','$image');";
					mysqli_query($conn , $sql);
					
					$target = "../userphoto/".basename($image);
					if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
					$msg="Account created successfully";
					header("Location:../signin.php?msg1=".$msg);
		
					}
					exit();
						}
				}
				}
			
echo('hi');
 
	exit();
}
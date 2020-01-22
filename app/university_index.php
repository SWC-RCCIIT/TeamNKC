<!DOCTYPE html>
<html lang="en">

<?php include_once('head.php')?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

<?php include_once('sidebar-university-login.php')?>

	
<?php include_once('rightsidebar.php')?>
	
	
	
	
	
	<!---------------------- Front End guys will start from here  ------------------------------------>
	
	
	
	
	
	
	
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
	
		
      <!-- Main Content -->
      <div id="content" class="mt-4 pt-4 dashboard_body">
		
        <!-- Begin Page Content -->
        <div class="container-fluid">
		 <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="check-events.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Check Notices</a>
          </div>
		  <!-- Welcome box -->
		<div class="welcome_box alert alert-danger ">
		<div class="row">
		<div class="col-xl-6 ">
			<div>
			<div class="text-s font-weight-bold text-danger text-uppercase mb-1">Welcome Back Hindol Das</div>
			<div class="text-xs font-weight-bold text-dark text-uppercase mb-1">We were missing you :) . After all it's your college</div>
			</div>
		</div>
		</div>
		</div>
         

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Number of Colleges </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">3190</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-graduate"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Number of Departments</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">8</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-university"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Notices Released this month</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">14</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar-week"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Reports to generate</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-thumbs-up"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">

            <!-- post status -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">

                <!-- Card Body -->
                <div class="card-body">
						<form name="statusupdate" method="post" action="includes/post.inc.php">
						<div class="form-group">
							<textarea class="form-control" placeholder="Whats on your mind ?" name="body" ></textarea>
						</div>
						<div class="form-group">
						<label> Post To : </label>
							<input type="radio" name="post_to"> All 
							<input type="radio" name="post_to"> Students/Alumni
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary form-control" value="Post status" name="submit">
						</div>
							
						</form>
                </div>
              </div>
            </div>
          </div>
		  <?php 
		   $res=mysqli_query($conn,"SELECT * FROM post order by id DESC");
			while($row=mysqli_fetch_array($res)){
				
			
		  echo'<!--indivitual post-->
		  <div class="row">

            <!-- post status -->
            <div class="col-xl-12 col-lg-7">
              <div class="card  mb-4">

                <!-- Card Body -->
                <div class="card-body">
					 <div class="row">
						<div class="col-xl-1">
							<img class="img-profile rounded-circle status-profile-photo" src="userphoto/';
							$result=mysqli_query($conn,"SELECT photo FROM user_details where id=".$row['u_id']." order by id DESC");
			while($rows=mysqli_fetch_array($result)){
				echo $rows['photo'];
			}
							echo'">
						</div>
						<div class="col-xl-11">
							<div class="text-s font-weight-bold text-primary text-uppercase mb-1">';
							$result=mysqli_query($conn,"SELECT name FROM user_details where id=".$row['u_id']." order by id DESC");
			while($rows=mysqli_fetch_array($result)){
				echo 'Hindol Das';
			}
							echo'</div>
							<div class="text-xs font-weight-bold text-dark text-uppercase mb-1">'. date ( "d-m-Y. h:m" , strtotime ( $row['posted_at'] )).' <i class="fas fa-world"></i></div>
						
						</div>
						
					 </div>
					 <div class="row">
						<div class="col-xl-1">
							
						</div>
						<div class="col-xl-11">
								' .nl2br($row['body']).'
						
						</div>
						
					 </div>
					 <div class="row">
						<div class="col-xl-1">
							
						</div>
						<div class="col-xl-11">
						<hr>
						<form action="index.php?username='.$_SESSION['id'].'&postid='.$row['id'].'"method="post" style="float:left">
						<input type="submit" name="like" value="like">
</form>					
						<span class="text-dark">&nbsp&nbsp&nbsp '.$row['likes'].' Like </span>		
						<span class="text-dark">&nbsp&nbsp&nbsp 5 Comments </span>		
						<hr>
						
						</div>
						
					 </div>
						<hr>
						<div class="row">
						';
						$rus=mysqli_query($conn,"SELECT comment,user_id FROM comment_details where post_id=".$row['id']." order by id DESC");
			while($ro=mysqli_fetch_array($rus)){
				$ru=mysqli_query($conn,"SELECT name,photo FROM user_details where id=".$ro['user_id']." order by id DESC");
			while($ra=mysqli_fetch_array($ru)){
				echo'
				<div class="col-xl-1">
							<img class="img-profile rounded-circle status-profile-photo" src="userphoto/'.$ra['photo'].'">
						</div>
						<div class="col-xl-11  ">
							<p class="alert-info pt-2 pb-2 pl-2 pr-2"><span class="text-s font-weight-bold text-primary text-uppercase mb-1">';
							
							echo $ra['name'].'</span> <span class="text-s font-weight-bold text-dark "> ';
			}
							
				echo $ro['comment'];
			}
							echo'</span></p>
						
						
						</div>
						
					 </div>
                </div>
				
              </div>
			  
			  
			  
            </div>
          </div>';
			}

?>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
<?php
	
	if(isset($_GET['username']))
	{
		$u_id=$_GET['username'];
		$postid=$_GET['postid'];
		
		 $res=mysqli_query($conn,"SELECT * FROM post_likes WHERE u_id='$u_id' && post_id='$postid' order by id DESC");
			$num=0;
			while($row=mysqli_fetch_array($res)){
				$num++;
			}
			if($num==1)
			{
				$res=mysqli_query($conn,"delete from post_likes where u_id='$u_id' && post_id='$postid'");
				$res=mysqli_query($conn,"update post set likes=likes-1 where id='$postid'");
				
			}else{
			$sql = "INSERT INTO post_likes (post_id, u_id) VALUES ('$postid','$u_id')";
			$res=mysqli_query($conn,"update post set likes=likes+1 where id='$postid'");
			// execute query
			mysqli_query($conn, $sql);
			}
			
	}
?>
<?php
	
	if(isset($_POST['submit']))
	{
		$comment=$_POST['comment'];
		$user_id=$_SESSION['id'];
		$posted_at = date('Y-m-d H:i:s');
		$postid=$_POST['post_id'];
		
		
	$sql = "INSERT INTO comment_details (comment, user_id, posted_at, post_id) VALUES ('$comment','$user_id','$posted_at','$postid')";
  	// execute query
  	mysqli_query($conn, $sql);
	
	}
?>
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
<?php include_once('belowlinks.php')?>
</body>

</html>

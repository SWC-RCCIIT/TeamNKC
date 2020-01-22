<!DOCTYPE html>
<html lang="en">

<?php include_once('head.php')?>
<?php include_once('includes/dbh.inc.php')?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

<?php include_once('sidebar.php')?>

	
	
	
	
	
	
	<!---------------------- Front End guys will start from here  ------------------------------------>
	
	
	
	
	
	
	
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
	<div class="row">
		<div class="col-xl-12 header_photo" style="background-image:url(img/college.jpg)">
		</div>		
	</div>
	<div class="row">
		<div class="col-xl-3 profile_photo ml-4 pl-4 " style="background-image:url(userphoto/<?php echo $_SESSION['photo']?>)">
		</div>
		<div class="col-xl-8 ml-4  pt-4">
		<h1 class="text-dark font-weight-bold"><?php echo $_SESSION['name'] ?></h1>
		<h6 class="text-dark font-weight-bold">Student</h6>
		</div>
	</div>
		
      <!-- Main Content -->
      <div id="content" class="mt-4 pt-4">
		
        <!-- Begin Page Content -->
        <div class="container-fluid">
		 <!-- Page Heading -->
		 <div class="row">
		 <div class="col-xl-4">
			<div class="row">
				<div class="col-xl-12 ">
					 <div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h3 mb-0 text-gray-800">About Me</h1>
					  </div>
				</div>
			</div>
			<div class="row card">
				<div class="card-body shadow">
				 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				 <hr>
				<div class="text-l font-weight-bold text-dark text-uppercase mb-1">Personal Details</div>
				<hr>
				<table>
					<tr>
						<td width="30%"> Name </td>
						<td width="5%"> : </td>
						<td> Aritra Basu </td>
					</tr>
					<tr>
						<td width="30%"> Phone </td>
						<td> : </td>
						<td> 6291080552 </td>
					</tr>
					<tr>
						<td width="30%"> Email </td>
						<td> : </td>
						<td> aritrabasu71@gmail.com </td>
					</tr>
					<tr>
						<td width="30%"> Website </td>
						<td> : </td>
						<td> Aritra Basu </td>
					</tr>
					<tr>
						<td width="30%"> Went to </td>
						<td> : </td>
						<td> www.facebook.com </td>
					</tr>
				</table>
				<button class="mt-4 text-center w-100">Edit Details</button>
				 </div>
			</div>
<div class="row mt-4">
				<div class="col-xl-12 ">
					 <div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h3 mb-0 text-gray-800">Photos</h1>
					  </div>
				</div>
			</div>
			<div class="row card">
				<div class="card-body shadow">
				 <div class="row">
					<div class="col-xl-3 mr-2" style="background-image:url('img/college.jpg');min-height:80px;background-size:cover">
					</div>
					<div class="col-xl-3 mr-2 " style="background-image:url('img/college.jpg');min-height:80px;background-size:cover">
					</div>
					<div class="col-xl-3 mr-2 " style="background-image:url('img/college.jpg');min-height:80px;background-size:cover">
					</div>
				 </div>
				 <div class="row">
					<div class="col-xl-3 mr-2 mt-2" style="background-image:url('img/college.jpg');min-height:80px;background-size:cover">
					</div>
					<div class="col-xl-3 mr-2 mt-2" style="background-image:url('img/college.jpg');min-height:80px;background-size:cover">
					</div>
					<div class="col-xl-3 mr-2 mt-2" style="background-image:url('img/college.jpg');min-height:80px;background-size:cover">
					</div>
				 </div>
				 </div>
			</div>
		 </div>
		
		 <div class="col-xl-8">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Timeline</h1>
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
							<input type="radio" name="post_to"> Public 
							<input type="radio" name="post_to"> Friends
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
		   $res=mysqli_query($conn,"SELECT * FROM post WHERE u_id=".$_SESSION['id']." order by id DESC");
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
							<img class="img-profile rounded-circle status-profile-photo" src="img/user_photo/me.jpg">
						</div>
						<div class="col-xl-11">
							<div class="text-s font-weight-bold text-primary text-uppercase mb-1">'.$_SESSION['name'].'</div>
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
						<form action="timeline.php?username='.$_SESSION['id'].'&postid='.$row['id'].'"method="post" style="float:left">
						<input type="submit" name="like" value="like">
</form>					
						<span class="text-dark">&nbsp&nbsp&nbsp '.$row['likes'].' Like </span>		
						<span class="text-dark">&nbsp&nbsp&nbsp 5 Comments </span>		
						<hr>
						
						</div>
						
					 </div>
						<hr>
						<div class="row">
						<div class="col-xl-1">
							<img class="img-profile rounded-circle status-profile-photo" src="img/user_photo/me.jpg">
						</div>
						<div class="col-xl-11  ">
							<p class="alert-info pt-2 pb-2 pl-2 pr-2"><span class="text-s font-weight-bold text-primary text-uppercase mb-1">
							Aritra  Kumar Basu</span> <span class="text-s font-weight-bold text-dark ">Are Bhai Bhai Bhai </span></p>
						
						
						</div>
						
					 </div>
					 <div class="row">
						<div class="col-xl-1">
							<img class="img-profile rounded-circle status-profile-photo" src="userphoto/'.$_SESSION['photo'].'">
						</div>
						<div class="col-xl-11  ">
							<form method="post" action="timeline.php">
							<textarea class="form-control" name="comment" placeholder="Comment Goes Here...."></textarea>
							<input type="text" name="post_id" placeholder="'.$row['id'].'" value="'.$row['id'].'" hidden>
							<input type="submit" class="btn btn-primary mt-2" name="submit" value="post">
							</form>
						</div>
						
					 </div>
                </div>
              </div>
            </div>
          </div>';
			}

?>

        </div>
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

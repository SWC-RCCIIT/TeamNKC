 <?php 
	session_start();
	include_once("includes/dbh.inc.php");
	if(!isset($_SESSION['u_id']))
	{
		//header("Location:login.php");
	}
	if(isset($_SESSION['u_id']))
	{
		$id=$_SESSION['u_id'];
		 $res=mysqli_query($conn,"SELECT * FROM user_details WHERE id='$id'");
		while($row=mysqli_fetch_array($res)){
			$_SESSION['u_id']=$row['u_id'];
			$_SESSION['email']=$row['email'];
			$_SESSION['name']=$row['name'];
			$_SESSION['phoneno']=$row['phoneno'];
			$_SESSION['dob']=$row['dob'];
			$_SESSION['alumnino']=$row['alumnino'];
			$_SESSION['id']=$row['id'];
			$_SESSION['photo']=$row['photo'];
	}
	}
	
?>


    <!-- Sidebar -->
    <ul class="navbar-nav   sidebar sidebar-light accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Diary</div>
      </a>

     

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a> 
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="add-college.php">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Add College</span></a>
        </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="review-college.php">
        <i class="fas fa-apple-alt"></i>
          <span>Review College</span></a>
		</li>
		  
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#notice" aria-expanded="true" aria-controls="notice">
          <i class="fas fa-fw fa-folder"></i>
          <span>Notice</span>
        </a>
        <div id="notice" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="add.php">Add</a>
            <a class="collapse-item" href="update.php">Update</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="college-ranking.php">
         <i class="fas fa-apple-alt"></i>
          <span>College Ranking</span></a>
      </li>
	  
	   <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#generate-report" aria-expanded="true" aria-controls="generate-report">
          <i class="fas fa-fw fa-cog"></i>
          <span>Generate-report</span>
        </a>
        <div id="generate-report" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
			<a class="collapse-item" href="accounts.php">Accounts</a>
            <a class="collapse-item" href="users.php">Users</a>
            <a class="collapse-item" href="placement/job.php">Placement/Job</a>            
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
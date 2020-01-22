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
		<i class="fab fa-dyalog"></i>
          
          <span>Dashboard</span></a> 
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link " href="check-event.php">
		<i class="far fa-calendar-check"></i>
         
          <span>Check events</span></a>
        </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="institutional-settings.php">
		<i class="fas fa-cogs"></i>
        
          <span>Institutional Settings</span></a>
		</li>
		  
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#review" aria-expanded="true" aria-controls="review">
         <i class="fas fa-search"></i> 
          <span>Review</span>
        </a>
        <div id="review" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="notice.php">Notice</a>
            <a class="collapse-item" href="achievements.php">Achievements</a>
			<a class="collapse-item" href="fundraisers.php">Fundraisers</a>
			<a class="collapse-item" href="applications.php">Applications</a>
          </div>
        </div>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#generate-report" aria-expanded="true" aria-controls="generate-report">
          
		  <i class="fas fa-file-alt"></i>
          <span>Generate Report</span>
        </a>
        <div id="generate-report" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="user-reports.php">User Reports</a>
            <a class="collapse-item" href="placement/job-report.php">Placement/Job Report</a>
			<a class="collapse-item" href="accounts.php">Accounts</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="user.php">
          
		  <i class="fas fa-user"></i>
          <span>Users</span>
		  </a>
		  <div id="users" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="search.php">search</a>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="notify.php">
          
		  <i class="fas fa-bullhorn"></i>
          <span>Notify</span></a>
      </li>
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="push-notifications.php">
          
		  <i class="fas fa-exclamation"></i>
          <span>Push Notifications</span></a>
      </li>

      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
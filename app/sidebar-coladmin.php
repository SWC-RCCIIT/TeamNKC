 <?php 
	session_start();
	include_once("includes/dbh.inc.php");
	if(!isset($_SESSION['u_id']))
	{
		header("Location:login.php");
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


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>User</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
			<a class="collapse-item" href="add-user.php">Add </a>
                      
          </div>
        </div>
      </li>
	  
	   <!-- Nav Item - Department -->
      <li class="nav-item active">
        <a class="nav-link" href="add-department.php">
		<i class="fab fa-dochub"></i>
        <span>Add Department</span></a> 
      </li>


      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Events</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="add-event.php">Add</a>
            <a class="collapse-item" href="check-event.php">Check</a>
            
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-apple-alt"></i>
          <span>Newsletter/Notice</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="add-notice.php">Add </a>
           
          </div>
        </div>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#certificate" aria-expanded="true" aria-controls="certificate">
          <i class="fas fa-fw fa-folder"></i>
          <span>Fundraising Event</span>
        </a>
        <div id="certificate" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="add-fundraiser.php">Add  </a>
            
			 <a class="collapse-item" href="check-fundraisingevent.php">Check</a>
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
<?php include_once('includes/dbh.inc.php')?>
	
	
	
	
	
	
	
	
	
	
	
	
	    <!-- Sidebar -->
    <ul class="navbar-nav right_bar fixed-right sidebar sidebar-light accordion mr-auto" id="accordionSidebar">


     

      <!-- Nav Item - Dashboard -->
      <li class="nav-item ">
        <a class="nav-link" href="index.html" data-toggle="logout" >
          <span>Logout</span></a>
      </li>


		<div class="text-center d-none d-md-inline">
         <img class="img-profile rounded-circle" src="<?php echo 'userphoto/'.$_SESSION['photo']?>" style="height:100px; width:100px;">
		</div>
		<div class="text-center d-none d-md-inline badges">
         <a href="#"><img class="img-profile rounded-circle" src="img/badge.png" style="height:40px;"></a>
		</div>
		<div class="text-center d-none d-md-inline mt-4">
         <a href="timeline.php"><h5 class="text-dark font-weight-bold"><?php echo$_SESSION['name'] ?></h5></a>
         <h6 class="">Student </h6>
         <h6 class="online_status font-bold">Online </h6>
		</div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item pl-4">
       <a href="#" class="btn btn-facebook btn-circle">
                    <i class="fab fa-facebook-f"></i>
       </a>
	   <a href="#" class="btn btn-instagram btn-circle">
                    <i class="fab fa-instagram"></i>
       </a>
	   <a href="#" class="btn btn-twitter btn-circle">
                    <i class="fab fa-twitter"></i>
       </a>
	   <a href="#" class="btn btn-gmail btn-circle">
                    <i class="fab fa-google"></i>
       </a>
      </li>
	 
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html" data-toggle="notification" >
          <span>Notifications</span></a>
      </li>
	  <li class="nav-item">
	  <a class="nav-link" href="tables.html">
	  <div class="row ml-0">
        <div class="col-lg-2 bg-light-blue text-center">
			<i class="far fa-envelope text-primary notification_icon"></i>
		</div> 
        <div class="col-lg-10">
			<div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Message from Dean</div>
			<p class="text-xs mb-1">This message states that ....</p>
		</div> 
		</div>
		</a>
      </li>
	  <li class="nav-item">
	  <a class="nav-link" href="tables.html">
	  <div class="row ml-0">
        <div class="col-lg-2 bg-light-blue text-center">
			<i class="far fa-envelope text-primary notification_icon"></i>
		</div> 
        <div class="col-lg-10">
			<div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Message from Dean</div>
			<p class="text-xs mb-1">This message states that ....</p>
		</div> 
		</div>
		</a>
      </li>

	  <li class="nav-item">
	  <a class="nav-link" href="tables.html">
	  <div class="row ml-0">
        <div class="col-lg-2 bg-light-blue text-center">
			<i class="far fa-envelope text-primary notification_icon"></i>
		</div> 
        <div class="col-lg-10">
			<div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Message from Dean</div>
			<p class="text-xs mb-1">This message states that ....</p>
		</div> 
		</div>
		</a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

    </ul>
    <!-- End of Sidebar -->
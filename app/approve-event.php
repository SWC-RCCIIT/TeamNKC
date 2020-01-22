<!DOCTYPE html>
<html lang="en">

<?php include_once('head.php')?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

<?php include_once('sidebar.php')?>	
	<!---------------------- Front End guys will start from here  ------------------------------------>
	
	
	
	
	
	
	
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
	
		
      <!-- Main Content -->
      <div id="content" class="mt-4 pt-4">
		
        <!-- Begin Page Content -->
        <div class="container-fluid">
		
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Approve Event</h1>
            <a href="check-event.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-search fa-sm text-white-50"></i> Check Other Events</a>
          </div>



          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary"></h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
				<div class="row">
				<div class="col-xl-7 ">
				 <h6 class="m-0 font-weight-bold text-primary">Event Details</h6>
				 <hr>
					<form method="post" action="includes/user-add-event.inc.php" enctype="multipart/form-data">
						  <div class="form-group">
						     <label for="eventname">Event Name</label>
						     <input type="text" class="form-control" id="eventname" name="eventname" placeholder="Enter a Event Name">
						  </div>
						  <div class="form-group">
							<div class="row">
							<div class="col-xl-6">
							<label for="startdate">Starts From</label>
							<input type="date" class="form-control" id="startdate" name="startdate" placeholder="start date">
							</div>
							<div class="col-xl-6">
							<label for="enddate">Ending on</label>
							<input type="date" class="form-control" id="enddate" name="enddate" placeholder="end date">
							</div>
							</div>
						  </div>
						  <div class="form-group">
							<div class="row">
							<div class="col-xl-6">
							<label for="starttime">Starts at</label>
							<input type="time" class="form-control" id="starttime" name="starttime" placeholder="start time">
							</div>
							<div class="col-xl-6">
							<label for="enddate">Ends at</label>
							<input type="time" class="form-control" id="endtime" name="endtime" placeholder="end time">
							</div>
							</div>
						  </div>
						  <div class="form-group">
						   <label for="eventname">Event Description</label>
							<textarea class="form-control" id="eventdetails" name="eventdetails" placeholder="Enter Event Description"></textarea>
						  </div>
						   <div class="form-group">
						   <div class="row">
							<div class="col-xl-6">
						     <label for="eventphoto">Event Cover Photo</label><br>
						     <input type="file"  id="eventphoto" name="image">
							</div>
						  </div>
						  </div>
						  <button type="submit" class="btn btn-primary submit_btn" name="submit">Submit</button>
					
                </div>
				<div class="col-xl-5">
				 <h6 class="m-0 font-weight-bold text-primary">Personal / Host Details</h6>
				 <hr>
					
						  <div class="form-group">
						     <label for="hostname">Host Name</label>
						     <input type="name" class="form-control" id="hostname"  name="hostname" placeholder="Host Name">
						  </div>
						  <div class="form-group">
							<label for="hostemail">Host Email</label>
							<input type="email" class="form-control" id="hostemail" name="hostemail" placeholder="Host Email Id">
						  </div>
						  <div class="form-group">
							<label for="hostphonenumber">Host Phone Number</label>
							<input type="text" class="form-control" id="hostphonenumber" name="hostphonenumber" placeholder="Host Phone Number">
						  </div>
					</form>
                </div>
                </div>
                </div>
              </div>
            </div>

            
          </div>

         

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
<?php include_once('belowlinks.php')?>

</body>

</html>

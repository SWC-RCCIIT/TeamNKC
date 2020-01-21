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
            <h1 class="h3 mb-0 text-gray-800">Add Fundraising Event</h1>
            <a href="check-event.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-search fa-sm text-white-50"></i> Check Other Fundraising Event</a>
          </div>



          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">New Event Request</h6>
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
						     <label for="amount">Amount</label>
						     <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter Amount to be raised for the Event">
						  </div>
						  <div class="form-group">
						   <label for="eventdescription">Event Description</label>
							<textarea class="form-control" id="eventdescription" name="eventdescription" placeholder="Enter Full Event Details"></textarea>
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
				 <h6 class="m-0 font-weight-bold text-primary">Deatails of Fundraiser</h6>
				 <hr>
					
						  <div class="form-group">
						     <label for="hostname">Name</label>
						     <input type="name" class="form-control" id="hostname"  name="hostname" placeholder="Host Name">
						  </div>
						  <div class="form-group">
							<label for="hostemail">Email</label>
							<input type="email" class="form-control" id="hostemail" name="hostemail" placeholder="Host Email Id">
						  </div>
						  <div class="form-group">
							<label for="hostphonenumber">Phone Number</label>
							<input type="text" class="form-control" id="hostphonenumber" name="hostphonenumber" placeholder="Host Phone Number">
						  </div>
						  <div class="form-group">
							<label for="hostphonenumber">Banking Details</label>
							<textarea class="form-control" id="eventdetails" name="eventdetails" placeholder="Enter Full Event Details"></textarea>
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

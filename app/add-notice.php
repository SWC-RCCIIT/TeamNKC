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
            <h1 class="h3 mb-0 text-gray-800">New Notice</h1>
            <a href="check-event.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-search fa-sm text-white-50"></i> Check Other Notices</a>
          </div>



          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Create New Notice</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
				<div class="row">
				<div class="col-xl-7 ">
                  <h6 class="m-0 font-weight-bold text-primary">Notice Details</h6>
				 <hr>
					<form>
						  <div class="form-group">
						     <label for="noticesubject">Notice Subject</label>
						     <input type="text" class="form-control" id="noticesubject" name="noticesubject" placeholder="Enter Notice Subject">
						  </div>
						 <div class="form-group">
						     <label for="deadline">Deadline</label>
						     <input type="text" class="form-control" id="deadline" name="deadline" placeholder="Enter deadline if there is any">
						  </div> 
						  
						  
						  <div class="form-group">
						  <label for="notice">Notice</label>
							<textarea class="form-control" id="notice" name="notice" placeholder="Type in notice"></textarea>
						  </div>
						   <div class="form-group">
						   <div class="row">
						   <div class="col-xl-6">
						     <label for="eventfile">Attach required file</label><br>
						     <input type="file"  id="eventfile" name="eventfile">
							</div>
							<div class="col-xl-6">
						     <label for="eventfile">Signature of Authority</label><br>
						     <input type="file"  id="eventfile" name="eventfile">
							</div>
						  </div>
						  </div>
						  <div class="col-l-1 mb-4">
						     <input type="checkbox" id="T&C" name="T&C"> Do you want a reminder?
							 </div>
						  
						  <button type="submit" class="btn btn-primary submit_btn">Submit</button>
					</form>
                </div>
				<div class="col-xl-5">
				 <h6 class="m-0 font-weight-bold text-primary">Contact in case of Query</h6>
				 <hr>
					<form>
						  <div class="form-group">
						     <label for="hostname">Name</label>
						     <input type="name" class="form-control" id="name"  name="name" placeholder="Enter Name">
						  </div>
						  <div class="form-group">
							<label for="hostemail">Email</label>
							<input type="email" class="form-control" id="hostemail" name="hostemail" placeholder="Enter Email Id">
						  </div>
						  <div class="form-group">
							<label for="phonenumber">Phone Number</label>
							<input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="Enter Phone Number">
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

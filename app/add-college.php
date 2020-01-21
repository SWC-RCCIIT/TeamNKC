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
            <h1 class="h3 mb-0 text-gray-800">Add College</h1>
            <a href="check-event.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-search fa-sm text-white-50"></i> Check Other Colleges</a>
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
				 <h6 class="m-0 font-weight-bold text-primary">College Details</h6>
				 <hr>
					<form method="post" action="includes/user-add-event.inc.php" enctype="multipart/form-data">
						  <div class="form-group">
						     <label for="collegename">College Name</label>
						     <input type="text" class="form-control" id="collegename" name="collegename" placeholder="Enter College Name">
						  </div>
						   <div class="form-group">
						     <label for="affiliation">Affiliation</label>
						     <input type="text" class="form-control" id="affiliation" name="affiliation" placeholder="Enter Board of Affiliation">
						     </div>
						   <div class="form-group">
						     <label for="departments">Departments</label>
						     <input type="text" class="form-control" id="departments" name="departments" placeholder="Enter Departments">
						     </div>
						 <div class="form-group">
						     <label for="website">College Website</label>
						     <input type="text" class="form-control" id="website" name="website" placeholder="Enter link to college website">
						     </div>
						  <div class="form-group">
						  <label for="description">Write something about the college</label>
							<textarea class="form-control" id="description" name="description" placeholder="Enter Details"></textarea>
						  </div>
						   <div class="form-group">
						   <div class="row">
							<div class="col-xl-6">
						     <label for="reqdoc">PRequired Document</label><br>
						     <input type="file"  id="reqdoc" name="image">
							</div>
						  </div>
						  </div>
						  <button type="submit" class="btn btn-primary submit_btn" name="submit">Submit</button>
					
                </div>
				<div class="col-xl-5">
				 <h6 class="m-0 font-weight-bold text-primary">Other Details</h6>
				 <hr>
					
						  <div class="form-group">
						     <label for="emailid">College Email Id</label>
						     <input type="name" class="form-control" id="emailid"  name="emailid" placeholder="Enter College Email Id">
						  </div>
						   <div class="form-group">
						     <label for="collegeaddress">College Address</label>
						     <input type="name" class="form-control" id="collegeaddress"  name="collegeaddress" placeholder="Enter Founder Name">
						  </div>
						  <div class="form-group">
							<label for="establishment">Date of Establishment</label>
							<input type="email" class="form-control" id="establishment" name="establishment" placeholder="Enter date of Establishment">
						  </div>
						  <div class="form-group">
							<label for="collegeadmin">College Admin Name</label>
							<input type="text" class="form-control" id="collegeadmin" name="collegeadmin" placeholder="Enter name of College Admin">
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

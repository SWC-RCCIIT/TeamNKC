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
            <h1 class="h3 mb-0 text-gray-800">Add Department</h1>
            <a href="check-event.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-search fa-sm text-white-50"></i> Check Other Departments</a>
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
				<div class="col-xl-12 ">
				 <h6 class="m-0 font-weight-bold text-primary">Department Details</h6>
				 <hr>
					<form method="post" action="includes/user-add-event.inc.php" enctype="multipart/form-data">
						  <div class="form-group">
						     <label for="departmentname">Department Name</label>
						     <input type="text" class="form-control" id="departmentname" name="departmentname" placeholder="Enter Department Name">
						  </div>
						   <div class="form-group">
						     <label for="degree">Degree</label>
						     <input type="text" class="form-control" id="degree" name="degree" placeholder="Enter Degree">
						     </div>
						     <div class="form-group">
						     <label for="accredition">Accredition</label>
						     <input type="text" class="form-control" id="accredition" name="accredition" placeholder="Enter Accredition">
						     </div>
						     <div class="form-group">
						     <label for="num-of-tech">Number of Teaching Staff</label>
						     <input type="text" class="form-control" id="num-of-tech" name="num-of-tech" placeholder="Enter number of teaching staff">
						     </div>
							  <div class="form-group">
						     <label for="hod">Name Of HOD</label>
						     <input type="text" class="form-control" id="hod" name="hod" placeholder="Enter Name of HOD">
						     </div>
							  <div class="form-group">
						     <label for="num-of-stu">Number Of Students</label>
						     <input type="text" class="form-control" id="num-of-stu" name="num-of-stu" placeholder="Enter Number of Students">
						     </div>
						 
						   <div class="form-group">
						   <div class="row">
							<div class="col-xl-6">
						     <label for="reqdoc">Required Document if any</label><br>
						     <input type="file"  id="reqdoc" name="image">
							</div>
						  </div>
						  </div>
						  <button type="submit" class="btn btn-primary submit_btn" name="submit">Submit</button>
					
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

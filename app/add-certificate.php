<!DOCTYPE >
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
            <h1 class="h3 mb-0 text-gray-800">Record Of Achievements</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-search fa-sm text-white-50"></i> Check Others Achievements</a>
          </div>



          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Your Achievements</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
				<div class="row">
				<div class="col-xl-12 ">
				 <h6 class="m-0 font-weight-bold text-primary">Details</h6>
				 <hr>
					<form method="post" action="includes/add-certificates.inc.php">
						  <div class="form-group">
						  <div class="row">
						  <div class="col-xl-6 ">
						     <label for="achievements">Your Achievements</label>
						     <input type="text" class="form-control" id="achievements" name="achievements" placeholder="Enter your achievements">
						  </div>
						  <div class="col-xl-6 ">
						   <div class="form-group">
						   
						     <label for="achievementyear">Year of Achievement </label>
						     <input type="text" class="form-control" id="achievementyear" name="achievementyear" placeholder="Enter year of Achievement ">
						  </div>
						  </div>
						  </div>
						   </div>
						   <div class="form-group">
						     <label for="description">Description</label>
						     <textarea  class="form-control" id="description" name="description" placeholder="Enter description"> </textarea>
						  </div>
		                  <div class="form-group">
						     <label for="proof">Link of proof</label>
						     <input type="text" class="form-control" id="proof" name="proof" placeholder="Enter link to prove your achievement">
						  </div>
						  <div class="row">
				<div class="col-xl-12">
					 <div class="form-group">
						   <div class="row">
						   <div class="col-xl-3">
						     <label for="eventfile">Certificate of Achievement</label><br>
						     <input type="file"  id="eventfile" name="eventfile">
							</div>
							</div>
							</div>
							</div>
						 
						  
						  <button type="submit" class="btn btn-primary submit_btn ml-2" name="submit" >Submit</button>
						  
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

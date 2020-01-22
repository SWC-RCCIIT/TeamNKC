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
            <h1 class="h3 mb-0 text-gray-800">Add User</h1>
            <a href="check-event.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-search fa-sm text-white-50"></i> Check Other Users</a>
          </div>



          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">New User</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
				<div class="row">
				<div class="col-xl-7 ">
				 <h6 class="m-0 font-weight-bold text-primary">User Details</h6>
				 <hr>
					<form method="post" action="includes/user-add-event.inc.php" enctype="multipart/form-data">
						  <select class="form-control" id="sel1">

						      <option value="" hidden>Select Option</option>
                             <option value="teacher">Teacher</option>
							  <option value="librarian">Librarian</option>
                             <option value="nonteaching">Non Teaching Staff</option>
                             <option value="accountant">Accountant</option>
							 <option value="student">Student</option>
							  <option value="alumni">Alumni</option>
							 <option value="other">Other</option>
                           </select>
						 <div class="form-group mt-3">
						     <label for="name">Name</label>
						     <input type="text" class="form-control" id="ame" name="ame" placeholder="Enter Name">
						  </div>
						  <div class="form-group">
							<label for="department">Department</label>
							<input type="email" class="form-control" id="deaprtment" name="department" placeholder="Enter Department">
						  </div>
						  <div class="form-group">
							<label for="rollnumber">Roll/Id Number</label>
							<input type="text" class="form-control" id="rollnumber" name="rollnumber" placeholder="Enter Roll/Id Number">
						  </div>
						  
						  <div class="form-group">
						  <label for="bio">Bio</label>
							<textarea class="form-control" id="bio" name="bi" placeholder="Enter About"></textarea>
						  </div>
						   <div class="form-group">
						   <div class="row">
							<div class="col-xl-6">
						     <label for="photograph">Photograph</label><br>
						     <input type="file"  id="photograph" name="image">
							</div>
							<div class="col-xl-6">
						     <label for="signature">Signature</label><br>
						     <input type="file"  id="signature" name="image">
							</div>
						  </div>
						  </div>
						  
						  <button type="submit" class="btn btn-primary submit_btn" name="submit">Submit</button>
						  </div>
					<div class="col-xl-5">
				 <h6 class="m-0 font-weight-bold text-primary">Other Details</h6>
				 <hr>
					
						  
						  <div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Id">
						  </div>
						  <div class="form-group">
							<label for="phonenumber">Phone Number</label>
							<input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="Enter Phone Number">
						  </div>
						   <div class="form-group">
							<label for="bloodgroup">Enter Blood Group</label>
							<input type="text" class="form-control" id="bloodgroup" name="bloodgroup" placeholder="Enter Your Blood Group">
						  </div>
						   <div class="form-group">
							<label for="address">Address</label>
							<textarea class="form-control" id="address" name="address" placeholder="Enter Address"></textarea>
						    </div>
							
					</form>
                </div>
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

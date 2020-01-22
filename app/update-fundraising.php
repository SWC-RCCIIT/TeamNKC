<?php 
include_once("includes/dbh.inc.php");
$id=$_GET['id'];

?>
<!DOCTYPE html>
<html lang="en">

<?php include_once('head.php')?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

<?php include_once('sidebar-coladmin.php')?>	

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
                  <h6 class="m-0 font-weight-bold text-primary">New Fundraising details</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
				<div class="row">
				<div class="col-xl-7 ">
				 <h6 class="m-0 font-weight-bold text-primary">Fundraising Details</h6>
				 <hr>
				<?php 
				$res=mysqli_query($conn,"SELECT * FROM add_fundraiser where id='$id' ");
			while($row=mysqli_fetch_array($res)){
				echo '<form method="post" action="includes/add-fundraiser.inc.php" enctype="multipart/form-data">
						  <div class="form-group">
						     <label for="fundraisername">Fundraising Name</label>
						     <input type="text" class="form-control" id="fundraisername" name="fundraisername" value="'.$row['fundraisername'];.'">
						  </div>';
				?>
					<form method="post" action="includes/add-fundraiser.inc.php" enctype="multipart/form-data">
						  <div class="form-group">
						     <label for="fundraisername">Fundraising Name</label>
						     <input type="text" class="form-control" id="fundraisername" name="fundraisername" value="<?php echo $row['fundraisername'];?>">
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
						     <label for="amount">Amount</label>
						     <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter Amount to be raised for the Event">
						  </div>
						  <div class="form-group">
						   <label for="fundraiserdesc">Fundraising Description</label>
							<textarea class="form-control" id="fundraiserdesc" name="fundraiserdesc" placeholder="Enter Full Event Details"></textarea>
						  </div>
						  
						   
						  <button type="submit" class="btn btn-primary submit_btn" name="submit">Submit</button>
					
                </div>
				<div class="col-xl-5">
				 <h6 class="m-0 font-weight-bold text-primary">Contact Person Details </h6>
				 <hr>
					
						  <div class="form-group">
						     <label for="hostname">Name</label>
						     <input type="name" class="form-control" id="hostname"  name="hostname" placeholder="<?php echo $row['fundraisername'];?>">
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
							<label for="bankingdet">Banking Details</label>
							<textarea class="form-control" id="bankingdet" name="bankingdet" placeholder="Enter Full Event Details"></textarea>
						  </div>
					</form>
                </div>
                </div>
                </div>
              </div>
            </div>

            
          </div>
<?php 
			}
			?>
         

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
<?php 
include_once('belowlinks.php')
	
?>
</body>

</html>

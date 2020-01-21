
<?php include_once('includes/dbh.inc.php');?>
<!doctype html>
<html>
<?php include_once("head.php"); ?>
<body id="page-top"><?php include_once('sidebar.php');?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        
 

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

       
<?php include_once('topnav.php');?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Check Batch Details</h1>
            <a href="addbatch.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add New Batch</a>
			
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Number of batches</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
					  <?php

							$sql="SELECT * from batch_details";
							if ($result=mysqli_query($conn,$sql))
							{
								// Return the number of rows in result set
								$rowcount=mysqli_num_rows($result);
								echo $rowcount;
							}

?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-school fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Number of Student</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php

							$sql="SELECT * from userdetails where role='student'";
							if ($result=mysqli_query($conn,$sql))
							{
								// Return the number of rows in result set
								$rowcount=mysqli_num_rows($result);
								echo $rowcount;
							}

?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Number of Students</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"> <?php

							$sql="SELECT * from userdetails where role='teacher'";
							if ($result=mysqli_query($conn,$sql))
							{
								// Return the number of rows in result set
								$rowcount=mysqli_num_rows($result);
								echo $rowcount;
							}

?></div>
                        </div>
                       
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Messages</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php

							$sql="SELECT con_id from contact_us where status='0'";
							if ($result=mysqli_query($conn,$sql))
							{
								// Return the number of rows in result set
								$rowcount=mysqli_num_rows($result);
								echo $rowcount;
							}

?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">All Batch Details</h6>
                  
            <a href="includes/batch_det.inc.php?id=1" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Download Batch Details</a>
           
                </div>
                <!-- Card Body -->
                <div class="card-body">
			
					<div class="table-responsive">
					<?php if(isset($_GET['msg'])){ echo '
				<div class="alert alert-success alert-dismissible fade show" role="alert">'.$_GET['msg']; echo'
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
				</div>';}?>
				<?php if(isset($_GET['msg1'])){ echo '
				<div class="alert alert-danger alert-dismissible fade show" role="alert">'.$_GET['msg1']; echo'
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
				</div>';}?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Batch Name</th>
                      <th>Batch Code</th>
                      <th>Batch Timing</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Batch Name</th>
                      <th>Batch Code</th>
                      <th>Batch Timing</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
				  <tr style="display:hidden">
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                   
                      
                   </tr>
				  <?php 
				  $res=mysqli_query($conn,"SELECT * FROM batch_details");
while($row=mysqli_fetch_array($res)){
					echo'<tr>
							<td>'.$row['batchname'].'</td>
							<td>'.$row['batchcode'].'</td>
							<td>'.$row['batchtiming'].'</td>';
							if($row['status']=='1')
							{
								echo '<td><div class="alert alert-success">Active</div></td>';
							}else
							{
								echo '<td><div class="alert alert-danger">InActive</div></td>';
							}
							echo'
							<td style="display:none">'.$row['b_id'].'</td>
							<td width="23%"><a href="includes/del_batch.inc.php?id='.$row['b_id'].'" class="btn-sm btn-info btn-circle">
                    <i class="fas fa-trash-alt" title="Delete batch"></i>
                  </a> <a href="#" class="edit_data editid btn-sm btn-warning btn-circle" title="Edit batch">
                    <i class="fas fa-pen"></i>
                  </a>'
				  ; if($row['status']=='1')
							{
								echo ' <a href="includes/deactivate_batch.inc.php?id='.$row['b_id'].'" class="btn-sm btn-danger btn-circle" title="Deactivate batch">
										<i class="fas fa-times"></i>
										</a>';
							}else
							{
								echo ' <a href="includes/activate_batch.inc.php?id='.$row['b_id'].'" class="btn-sm btn-success btn-circle" title="Activate batch">
										<i class="fas fa-check"></i>
										</a>';
							}
				 echo'
										<a href="includes/batchdetails.inc.php?id='.$row['b_id'].'" class="btn-sm btn-dark btn-circle" title="Export batch Details">
										<i class="fas fa-file-excel"></i>
										</a>
										<a href="includes/promotebatch.inc.php?id='.$row['b_id'].'" class="btn-sm btn-secondary btn-circle" title="Promote batch">
										<i class="fas fa-sync"></i>
										</a>
										</td>
				  
                                   
							</tr>';
}
				  ?>

                  </tbody>
                </table>
				</div>
                </div>

	
	
			
		 <script>  
 $(document).ready(function(){
  
      $('.edit_data').on('click',function(){  
           
                     $('#editmodal').modal('show');

						$tr = $(this).closest('tr');
						var data=$tr.children("td").map(function(){
							return $(this).text();
						}).get();
						
						console.log(data);
						
						$('#batchname').val(data[0]);
						$('#batchcode').val(data[1]);
						$('#batchtiming').val(data[2]);
						$('#b_id').val(data[4]);
                }  
           );

 }
 );
 </script>
				<!--modal-->
				<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header ">
        <h4 class="modal-title" id="myModalLabel">Edit Batch Details</h4>
      </div>
      <div class="modal-body">
        <form action="includes/updatebatch.inc.php" method="post" class="input_form">
					
					 
					 
				   <div class="form-group">
					<label for="batchname"> Batch Name </label>
					<input type="text" name="batchname" id="batchname" placeholder="Add Batch Name" class="form-control" id="email">
					</div>
					<div class="form-group">
					<label for="batchcode"> Batch Code </label>
					<input type="text" name="batchcode" id="batchcode" placeholder="Add Batch Code" class="form-control" id="email">
					</div>
					<div class="form-group">
					<label for="batchtiming"> Batch Timing </label>
					<input type="text" name="batchtiming" id="batchtiming" placeholder="Batch Timing" class="form-control" id="email">
					<input type="text" name="b_id" id="b_id" value="" hidden  />
					</div>
					<input type="submit" name="submit" value="Update Batch Details" class="btn btn-success">
					
					</form>
    </div>
  </div>
</div>
  
              </div>
            </div>

           
          </div>

        </div>
		
		
		
		
		
		

 
 
 
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
	  
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>



<?php include_once("pagedownscript.php");?>
</body>
</html>
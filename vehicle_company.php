<?php
require_once('database_config.php');
error_reporting(0);
session_start();
$sess = $_SESSION['name'];
if(!$sess)
{
	header('location:index.php?ses=ex');	
}

?>

<script>

 function delete_category(id1)
 {
  if(confirm("Are You Sure You Want To Delete It"))
  $.ajax({
   
     url:'excess/delete_company.php',
     type:'POST',
     data:{'id':id1},
     success: function(data)
     {
      location.reload();
     }

	});
 }
</script>
<script>

	function category_status(id,status)
 {
 
  if(confirm("Are You Sure You Want To change It"))
  $.ajax({
   
     url:'excess/update_company.php',
     type:'POST',
     data:{'id':id,'status':status},
     success: function(data)
     {
      location.reload();
     }
   });
 }
 
</script>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
		
		<!-- Summernote css -->
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
		
		 <!-- select2 css -->
        <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

        <!-- dropzone css -->
        <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
		
		<!-- DataTables -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		
		
		<link href='assets/packages/core/main.css' rel='stylesheet' />
		<link href='assets/packages/daygrid/main.css' rel='stylesheet' />
		<link href='assets/packages/timegrid/main.css' rel='stylesheet' />
		<link href='assets/packages/list/main.css' rel='stylesheet' />
		<script src='assets/packages/core/main.js'></script>
		<script src='assets/packages/interaction/main.js'></script>
		<script src='assets/packages/daygrid/main.js'></script>
		<script src='assets/packages/timegrid/main.js'></script>
		<script src='assets/packages/list/main.js'></script>

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="layout-wrapper" >

            <header id="page-topbar" >
				
		
                <div class="navbar-header">
                    <div class="d-flex" >
                        <!-- LOGO --> 
                        <div class="navbar-brand-box">
                            <a href="dashboard.php" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-dark.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="17">
                                </span>
                            </a>

                           
                        </div>
                    </div>

                    
                </div>
            </header>
			
			
			
			 <!-- ========== Left Sidebar Start ========== -->
			<div class="vertical-menu">

				<div data-simplebar class="h-100">

					<!--- Sidemenu -->
					<div id="sidebar-menu">
						<!-- Left Menu Start -->
						<ul class="metismenu list-unstyled" id="side-menu">
							<li class="menu-title">Menu</li>


							<li>
							<a href="vehicle_buy.php" class="waves-effect">
									<i class="bx bx-rupee"></i>
									<span>Vehicle Buy</span>
								</a>
							</li>

							<li>
							<a href="vehicle_sell.php" class="waves-effect">
									<i class="bx bx-rupee"></i>
									<span>Vehicle Sales</span>
								</a>
							</li>

							<li>
								<a href="javascript: void(0);" class="has-arrow waves-effect">
									<!-- <i class="bx bxs-truck"></i> -->
									<i class="fa fa-motorcycle"></i>
									<span>Vehicles</span>
								</a>
								<ul class="sub-menu" aria-expanded="false">
									<li><a href="vehicle_company.php">Company</a></li> 
									<li><a href="vehicle_model.php">Model</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<!-- Sidebar -->
				</div>
			</div>
			<!-- Left Sidebar End -->

            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Vehicle Company</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Company</a></li>
                                            <li class="breadcrumb-item active">Vehicle Company</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->
						
						
						<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                                
                                        <form method="post" action="" enctype="multipart/form-data">
                                            <div class="row">
												
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="productname">Company Type</label>
                                                        <input id="productname" name="txtCategory" type="text" class="form-control" required>
                                                    </div>  
                                                </div>
        
                                                
                                            </div>
											
        
                                            <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light" name="btnupdate">Save Changes</button>
                                            <button type="submit" class="btn btn-secondary waves-effect">Cancel</button>
                                        </form>
        
                                    </div>
                                </div>

                               
        
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                                
                                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
												<th>Company</th>
												<th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <?php 
												$quu1 = "select * from company ORDER BY company ASC";							
												$ress1 = mysqli_query($conn, $quu1);
												$i = 1;
												while($roww1 = mysqli_fetch_assoc($ress1))
												{
													$id1 = $roww1['id'];
													$departments = $roww1['company']; 													 
													$status1 = $roww1['status'];
											?>
											
                                            <tr>
											 
											<tr>
												<td><?php echo $departments; ?></td>
                                                <td>
													<a href="#" data-toggle="modal" data-target=".editCategory<?php echo $id1; ?>" class="btn btn-outline-success waves-effect waves-light"><i class="fas fa-pencil-alt "></i> </a>
												
													
													<a href="#" class="btn btn-outline-danger waves-effect waves-light" onclick="delete_category(<?php echo $id1; ?> )"> <i class="fas fa-trash-alt "></i> </a>
												</td>
                                            </tr>
											 
											<?php  } ?>
                                            
											</tbody>
        
                                        </table>
        
                                    </div>
                                </div>

                               
        
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <?php include 'footer.php'; ?>
				
<?php
error_reporting(0); 

if(isset($_POST['btnupdate']) )
	{
		$txtname= $_POST['txtCategory'];	
		
			
		 $sqlb = mysqli_query($conn, "insert into company (company, status) values('$txtname', '1')");
	
		  if($sqlb)
		  { ?>
			  <script>alert('Added successfully...');
				window.location.href = "vehicle_company.php";</script>  
		  <?php }
		
}   

if(isset($_POST['btnModelUp']) )
	{
		$txtnameMod= $_POST['txtdesignationMod'];	
		$idModel1 = $_POST['txtIDMod'];	
			
		 $sqlb = mysqli_query($conn, "UPDATE `company` SET `company`='$txtnameMod' WHERE id='$idModel1 '");
	
		  if($sqlb)
		  { ?>
			  <script>alert('Update successfully...');
				window.location.href = "vehicle_company.php";</script>  
		  <?php }
		
}   

?>  				
				
			<?php 
				$quuModel = "select * from company ORDER BY id DESC";							
				$resModel = mysqli_query($conn, $quuModel);
				
				while($rowModel = mysqli_fetch_assoc($resModel))
				{
					$idModel = $rowModel['id'];
					$departmentsModel = $rowModel['company'];
					
			?>	
				
				
				<div class="modal fade editCategory<?php echo $idModel; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title mt-0" id="myLargeModalLabel">Update</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="post" action="" enctype="multipart/form-data">
									<div class="row">
										
										<input type="text" hidden name="txtIDMod" required value="<?php echo $idModel; ?>">
										<div class="col-sm-6">
											<div class="form-group">
												<label for="productname">Company</label>
												<input type="text" class="form-control" name="txtdesignationMod" required value="<?php echo $departmentsModel; ?>">
											</div>  
										</div>

										
									</div>
									

									<button type="submit" class="btn btn-primary mr-1 waves-effect waves-light" name="btnModelUp">Save Changes</button>
									<button data-dismiss="modal" aria-label="Close" class="btn btn-secondary waves-effect">Cancel</button>
								</form>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
				
				<?php  } ?>					
				
                </body>
                </html>
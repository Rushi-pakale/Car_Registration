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

 function delete_custmer(id1)
 {
  if(confirm("Are You Sure You Want To Delete It"))
  $.ajax({
   
     url:'excess/delete_buyer.php',
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

	function brand_custmer(id,status)
 {
 
  if(confirm("Are You Sure You Want To change It"))
  $.ajax({
   
     url:'excess/update_buyer.php',
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
                                    <h4 class="mb-0 font-size-18">Vendors</h4>

                                    <div class="page-title-right">
                                       <div class="text-sm-right">
											<a  class="btn btn-success btn-rounded waves-effect waves-light mb-2 mr-2  " href="add_buyers.php">
											<i class="mdi mdi-plus mr-1"></i> Add New</a>
										</div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
										<div class="table-responsive">
                                                
											<table id="datatable-buttons" class="table table-striped table-bordered nowrap">
												<thead class="thead-light">
													<tr>                                                        
														<th>No</th>
                                                        <th>Date</th>
                                                        <th>Contact</th>
														<th>Name</th>	
														<th>Vehicle</th>
														<th>Payment</th>
                                                        <th>Advance</th>
                                                        <th>Pending</th>
                                                        <th>Action</th>
													</tr>
												</thead>
												<tbody>

                                                <?php 
					 
					 
					                        $srNo = 1;
                        					$query = "select * from vehicle_buyers order by id desc";
                        					
                        					$res = mysqli_query($conn, $query);
                        					while($rowss = mysqli_fetch_assoc($res) )
                        					{	
                        					
                                                $id1 = $rowss['id'];
                                                $date = $rowss['date'];
                                                $contact_no = $rowss['contact_no'];
                                                $cust_name = $rowss['cust_name'];
                                                $cust_email= $rowss['cust_email'];
                                                $cust_add = $rowss['cust_add'];
                                                $country_id= $rowss['country_id'];
                                                $state_id= $rowss['state_id'];
                                                $city_id= $rowss['city_id'];
                                                $pincode	= $rowss['pincode	'];
                                                $gst_num= $rowss['gst_num'];
                                                $pan_num	= $rowss['pan_num'];
                                                $company_id	= $rowss['company_id'];
                                                $model_id	= $rowss['model_id'];
                                                $colour_id = $rowss['colour_id'];
												$fuel_id	= $rowss['fuel_id'];
                                                $odometer_reading= $rowss['odometer_reading'];
                                                $year_mgf = $rowss['year_mgf'];
                                                $resistration_num= $rowss['resistration_num'];
                                                $resistration_date= $rowss['resistration_date'];
                                                $engine_number= $rowss['engine_number'];
                                                $chassis_number	= $rowss['chassis_number'];
                                                $payment= $rowss['payment'];
                                                $advance	= $rowss['advance'];
												$pending = $rowss['pending'];
												$payment_method = $rowss['payment_method'];
					    
					     	                $queryCompany = "select * from company where id='$company_id'";
                        					
                        					$res1 = mysqli_query($conn, $queryCompany);
                        						while($rowss1 = mysqli_fetch_assoc($res1) )
                        					{
                        					         $company_name	= $rowss1['company'];
                        					         
                        					}
											
											$queryModel = "select * from model where id='$model_id'";
                        					
                        					$resModel = mysqli_query($conn, $queryModel);
                        						while($rowssModel = mysqli_fetch_assoc($resModel) )
                        					{
                        					         $model_name	= $rowssModel['model'];
                        					         
                        					}
											
?>
													
													<tr> 
														<td><?php echo $srNo;?></td>
														<td><?php echo $date;?></td>                                                        
														<td><?php echo $contact_no;?></td>  
														<td><?php echo $cust_name;?></td>
														<td><?php echo $company_name.', '.$model_name;?></td>
														<td><?php echo $payment;?></td>
                                                        <td><?php echo $advance;?></td>
														<td><?php echo $pending;?></td>
														<td>
                                                       <a href="buyer-update.php?u_id=<?php echo $id1; ?>" class="btn btn-outline-success waves-effect waves-light"><i class="fas fa-pencil-alt "></i> </a>
                                                       <a href="#" class="btn btn-outline-danger waves-effect waves-light" onclick="delete_custmer(<?php echo $id1; ?>);"> <i class="fas fa-trash-alt "></i> </a>
														</td>
													</tr>

<?php
 $srNo++;
} 	  	 ?>
                                                    
													
												</tbody>
											
											</table>
										</div>
                                    </div>
                                </div>

                               
        
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
			<?php include 'footer.php'; ?>

</body>
</html>
<?php
require_once('database_config.php');
session_start();
$sess = $_SESSION['name'];
if(!$sess)
{
	header('location:index.php?ses=ex');	
}

?>
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
                <div class="container">
                <div class="row justify-content-right"><a href="logout.php">Logout</a></div>
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
                                    <h4 class="mb-0 font-size-18">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item active">Welcome to Dashboard</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->	

						<?php
$query5 = "select * from model";
$result = mysqli_query($conn, $query5);
$row = mysqli_num_rows($result); 

?>

						<div class="row">
							<div class="col-md-4">
								<div class="card mini-stats-wid">
									<div class="card-body">
										<div class="media">
											<div class="media-body">
												<p class="text-muted font-weight-medium">Total Vehicle's</p>
												<h4 class="mb-0" id = "countVehicle"><?php echo $row;?></h4>
											</div>

											<div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
												<span class="avatar-title">
                                                <i class="fa fa-motorcycle font-size-24"></i>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>

							<?php
$querybuyer = "select * from vehicle_buyers";
$resultbuy = mysqli_query($conn, $querybuyer);
$rowbuyer = mysqli_num_rows($resultbuy); 

?>				
							<div class="col-md-4">
								<div class="card mini-stats-wid">
									<div class="card-body">
										<div class="media">
											<div class="media-body">
												<p class="text-muted font-weight-medium">Total Buyer</p>
												<h4 class="mb-0" id = "countDriver"><?php echo $rowbuyer;?></h4>
											</div>

											<div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
												<span class="avatar-title rounded-circle bg-primary">
													<i class="bx bxs-user-detail font-size-24"></i>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>

							<?php
$queryseller = "select * from vehicle_seller";
$resultsell = mysqli_query($conn, $queryseller);
$rowseller = mysqli_num_rows($resultsell); 

?>

							<div class="col-md-4">
								<div class="card mini-stats-wid">
									<div class="card-body">
										<div class="media">
											<div class="media-body">
												<p class="text-muted font-weight-medium">Total Seller</p>
												<h4 class="mb-0" id = "countCustomer"><?php echo $rowseller;?></h4>
											</div>

											<div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
												<span class="avatar-title rounded-circle bg-primary">
                                                <i class="bx bxs-user-detail font-size-24"></i>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
                        </div>
							
                        <!-- end row -->
						<?php
$queryEnquiry = "select * from enquiry where date(enq_dt) = current_date";
$resEnquiry = mysqli_query($conn, $queryEnquiry);
$rowEnquiry = mysqli_num_rows($resEnquiry); 

?>
						<div class="row">
							<div class="col-md-4">
								<div class="card mini-stats-wid">
									<div class="card-body">
										<div class="media">
											<div class="media-body">
												<p class="text-muted font-weight-medium">Today's Enquiry</p>
												<h4 class="mb-0" id = "countVehicle"><?php echo $rowEnquiry;?></h4>
											</div>

											<div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
												<span class="avatar-title">
                                                <i class="bx bx-question-mark font-size-24"></i>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>

							<?php
$queryFollow = "select * from enquiry_followup where date(follow_dt) = current_date";
$resFollow = mysqli_query($conn, $queryFollow);
$rowFollow = mysqli_num_rows($resFollow); 

?>
							<div class="col-md-4">
								<div class="card mini-stats-wid">
									<div class="card-body">
										<div class="media">
											<div class="media-body">
												<p class="text-muted font-weight-medium">Today's Followup</p>
												<h4 class="mb-0" id = "countDriver"><?php echo $rowFollow;?></h4>
											</div>

											<div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
												<span class="avatar-title rounded-circle bg-primary">
													<i class="bx bxs-user-detail font-size-24"></i>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>

							<?php
$query1 = "select * from enquiry";
$res1 = mysqli_query($conn, $query1);
$row1 = mysqli_num_rows($res1); 

?>

							<div class="col-md-4">
								<div class="card mini-stats-wid">
									<div class="card-body">
										<div class="media">
											<div class="media-body">
												<p class="text-muted font-weight-medium" id = "date">Total Enquiry</p>
												<h4 class="mb-0" id = "countProfit"><?php echo $row1;?></h4>
											</div>

											<div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
												<span class="avatar-title">
												<i class="bx bx-question-mark font-size-24"></i>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
							
						<!-- end row -->

						<?php
$total = 0;
$sumAmount = 0;
$query = "select * from vehicle_buyers where month(date) = month(current_date()) and year(date) = year(current_date())"; 		
	    	
$res = mysqli_query($conn, $query);
$rowAll = mysqli_num_rows($res);
	    	 
while($rowss = mysqli_fetch_assoc($res) )
{		
    
    $id = $rowss['id'];
                $date = $rowss['date'];
                $payment= $rowss['payment'];

                $sumAmount = $sumAmount + $payment;
}
                $sumAmount1 = 0;
                $query1 = "select * from vehicle_seller where month(date) = month(current_date()) and year(date) = year(current_date())"; 		                
	    	
                $res1 = mysqli_query($conn, $query1);
                $rowAll1 = mysqli_num_rows($res1);                
	    	 
                while($rowss1 = mysqli_fetch_assoc($res1) )
                {		
    
                $id1 = $rowss1['id'];
                $date1 = $rowss1['date'];
                $payment1= $rowss1['payment'];
    $sumAmount1 = $sumAmount1 + $payment1;
                }
                
	$total = $sumAmount1 - $sumAmount; 

	?>						

						<div class="row">
							<div class="col-md-4">
								<div class="card mini-stats-wid">
									<div class="card-body">
										<div class="media">
											<div class="media-body">
												<p class="text-muted font-weight-medium"><?php echo date('F');?></p>
												<h4 class="mb-0" id = "countVehicle"><?php echo $total;?></h4>
											</div>

											<div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
												<span class="avatar-title">
                                                <i class="bx bx-rupee font-size-24"></i>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>

							<?php
$total = 0;
$sumAmount = 0;
$query = "select * from vehicle_buyers"; 		
	    	
$res = mysqli_query($conn, $query);
$rowAll = mysqli_num_rows($res);
	    	 
while($rowss = mysqli_fetch_assoc($res) )
{		
    
    $id = $rowss['id'];
                $date = $rowss['date'];
                $payment= $rowss['payment'];

                $sumAmount = $sumAmount + $payment;
}
                $sumAmount1 = 0;
                $query1 = "select * from vehicle_seller"; 		                
	    	
                $res1 = mysqli_query($conn, $query1);
                $rowAll1 = mysqli_num_rows($res1);                
	    	 
                while($rowss1 = mysqli_fetch_assoc($res1) )
                {		
    
                $id1 = $rowss1['id'];
                $date1 = $rowss1['date'];
                $payment1= $rowss1['payment'];
    $sumAmount1 = $sumAmount1 + $payment1;
                }
                
	$total = $sumAmount1 - $sumAmount; 

	?>


							<div class="col-md-4">
								<div class="card mini-stats-wid">
									<div class="card-body">
										<div class="media">
											<div class="media-body">
												<p class="text-muted font-weight-medium">January to <?php echo date('F');?></p>
												<h4 class="mb-0" id = "countDriver"><?php echo $total?></h4>
											</div>

											<div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
												<span class="avatar-title rounded-circle bg-primary">
													<i class="bx bx-rupee font-size-24"></i>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
<?php
$total = 0;
$sumAmount = 0;
$query = "select * from vehicle_buyers"; 		
	    	
$res = mysqli_query($conn, $query);
$rowAll = mysqli_num_rows($res);
	    	 
while($rowss = mysqli_fetch_assoc($res) )
{		
    
    $id = $rowss['id'];
                $date = $rowss['date'];
                $payment= $rowss['payment'];

                $sumAmount = $sumAmount + $payment;
}
                $sumAmount1 = 0;
                $query1 = "select * from vehicle_seller"; 		                
	    	
                $res1 = mysqli_query($conn, $query1);
                $rowAll1 = mysqli_num_rows($res1);                
	    	 
                while($rowss1 = mysqli_fetch_assoc($res1) )
                {		
    
                $id1 = $rowss1['id'];
                $date1 = $rowss1['date'];
                $payment1= $rowss1['payment'];
    $sumAmount1 = $sumAmount1 + $payment1;
                }
                
	$total = $sumAmount1 - $sumAmount; 

	?>

							<div class="col-md-4">
								<div class="card mini-stats-wid">
									<div class="card-body">
										<div class="media">
											<div class="media-body">
												<p class="text-muted font-weight-medium" id = "date">Total Profit</p>
												<h4 class="mb-0" id = "countProfit"><?php echo $total;?></h4>
											</div>

											<div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
												<span class="avatar-title">
													<i class="bx bx-rupee font-size-24"></i>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
							
						<!-- end row -->


                <!-- <div class="card-body">
                 <div class="row">
                    <div class="col-md-7">
                        <form action="" method="$_GET">
                            <input id="searchbar" class="form-control" type="text" value="<?php if(isset($_GET['search']))?>" name="search" placeholder="Search">   
                        
                        </form>
                    </div> 
                 </div>  
                </div>  -->


<div class="container-fluid">

<!-- start page title -->
<div class="row">
	<div class="col-12">
		<div class="page-title-box d-flex align-items-center justify-content-between">
			<h4 class="mb-0 font-size-18">Today Follow Up</h4>
		</div>
	</div>
</div>     
<!-- end page title -->

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">

				 <div class="table-responsive mb-0" data-pattern="priority-columns">        
				<table id="datatable-buttons" class="table table-striped table-bordered nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
							<thead>
								<tr>
									<th>SrNo</th>
									<th>Name</th>
									<th>Address</th>
									<th>Contact No</th>
									<th>Details</th>
									<th>Enquiry Dt</th>
									<th>Follow Up Dt</th>
									<th>Type</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>

					 
							<tbody>
							
							<?php 
								//	$quuFeedback = "select * from enquiry_feedback where id IN (select feed_id from enquiry_followup where followup_dt <= CURDATE()) ORDER BY followup_dt DESC";	

									$quu1 = "SELECT * FROM `enquiry` order by id DESC";
									
									$ress1 = mysqli_query($conn, $quu1);
									$i = 1;
									while($roww1 = mysqli_fetch_assoc($ress1))
									{
										
										$id_enquiry = $roww1['id'];
										$f_name = $roww1['f_name'];															
										$address = $roww1['address'];
										$mob = $roww1['mob'];
										$msg = $roww1['msg'];
										$enq_type = $roww1['status'];
										
										
										
										
										$selectcontent = mysqli_query($conn, "select * from enquiry_feedback where enq_id='$id_enquiry' ORDER BY followup_dt ");
										$resultcontent = mysqli_fetch_assoc($selectcontent);
										
										$id_feedback = $resultcontent['id'];
										$enq_id = $resultcontent['enq_id'];																
										$remark = $resultcontent['feedback'];
										//$enq_dt	 = $roww1['enq_dt'];
										//$followup_dt = $roww1['followup_dt'];
										
										$enq_dt1	 = $resultcontent['enq_dt'];
										$enq_dt2 = strtotime($enq_dt1);
										$enq_dt = date("d-m-Y", $enq_dt2);
										
										$followup_dt1 = $resultcontent['followup_dt'];
										$followup_dt2 = strtotime($followup_dt1);
										$followup_dt = date("d-m-Y", $followup_dt2);
										
										$status = $resultcontent['status'];
										$todatdt = date("d-m-Y");
										
										if($followup_dt <= $todatdt ){
								?>
								
								<tr>
									<td><?php echo $i;?></td>
									<td><?php echo $f_name;?> </td>
									<td><?php echo $address;?> </td>
									<td><?php echo $mob;?> </td>
									<td><?php echo $msg;?> </td>
									<td><?php echo $enq_dt;?> </td>
									<td><?php echo $followup_dt;?> </td>
									
									<td>
										<select class="form-control" onchange="enquiry_status(<?php echo $id_enquiry;?>,this.value); this.className=this.options[this.selectedIndex].className" >
											<option>Select</option>
											<option value="0" <?php if($enq_type=='0') { ?> selected="selected" <?php } ?>>General Enquiry</option>
											<option value="1" <?php if($enq_type=='1') { ?> selected="selected" <?php } ?>>Booking Enquiry  </option>
											<option value="2" <?php if($enq_type=='2') { ?> selected="selected" <?php } ?>>Quotation Enquiry </option>  
											<option value="4" <?php if($enq_type=='4') { ?> selected="selected" <?php } ?>>Not Interested</option>
										</select>
									</td>
									
									<td>
										<select class="form-control" onchange="enq_status(<?php echo $id_feedback;?>, <?php echo $enq_id;?>, this.value); this.className=this.options[this.selectedIndex].className" >
											<option>Select</option>
											<option value="0" <?php if($status=='0') { ?> selected="selected" <?php } ?>>Follow Up</option>
											<option value="1" <?php if($status=='1') { ?> selected="selected" <?php } ?>>Close</option>                                                
										</select>
									</td>
									
									<td align="center">
										<a href="frmEnquiryUpdate.php?u_id=<?php echo $id_enquiry;?>" class="btn btn-outline-success waves-effect waves-light"><i class="fas fa-pencil-alt "></i> </a>													
								
										
										<a href="#" class="btn btn-outline-danger waves-effect waves-light" onclick="delete_enquiry(<?php echo $id_enquiry; ?>);"> <i class="fas fa-trash-alt "></i> </a>
										
									</td>
								</tr>
								
								 <?php $i++; }  } ?>
								
							</tbody>
							<tfoot>
								<tr>
									<th>SrNo</th>
									<th>Name</th>
									<th>Address</th>
									<th>Contact No</th>
									<th>Details</th>
									<th>Enquiry Dt</th>
									<th>Follow Up Dt</th>	
									<th>Type</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</tfoot>
						</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end row -->

</div> <!-- container-fluid -->


    <div class="container-fluid">
		<!-- start page title -->
<div class="row">
	<div class="col-12">
		<div class="page-title-box d-flex align-items-center justify-content-between">
			<h4 class="mb-0 font-size-18">Today Buyers</h4>
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
                        					$query = "select * from vehicle_buyers where date(date) = current_date";
                        					
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
                                                $pincode	= $rowss['pincode'];
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
                                                        <a href="#" class="btn btn-outline-info waves-effect waves-light" data-toggle="modal" data-target="#modalEmp<?php echo $id1;?> "><i class="fas fa-eye"></i> </a>
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


    <div class="container-fluid">
		<!-- start page title -->
<div class="row">
	<div class="col-12">
		<div class="page-title-box d-flex align-items-center justify-content-between">
			<h4 class="mb-0 font-size-18">Today Sales</h4>
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
                        					$query = "select * from vehicle_seller where date(date) = current_date";
                        					
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
                                                $pincode	= $rowss['pincode'];
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
                                                        <a href="#" class="btn btn-outline-info waves-effect waves-light" data-toggle="modal" data-target="#modalsell<?php echo $id1;?> "><i class="fas fa-eye"></i> </a>
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
                        <!-- end row -->
               
                <?php include 'footer.php'; ?>

				 <!-- eye model -->
				 <?php 
					 
					 
					 $quu1 = "select * from vehicle_buyers";							
                 $ress1 = mysqli_query($conn, $quu1);
                 $con_type1='';
                 $service_type='';
                 while($roww1 = mysqli_fetch_assoc($ress1))
                 {
                     $id2 = $roww1['id'];
                     $date2 = $roww1['date'];
                     $contact_no2 = $roww1['contact_no'];
                     $cust_name2 = $roww1['cust_name'];
                     $cust_email2 = $roww1['cust_email'];
                     $cust_add2 = $roww1['cust_add'];
                     $country_id2 = $roww1['country_id'];
                     $state_id2 = $roww1['state_id'];
                     $city_id2 = $roww1['city_id'];
                     $pincode2 = $roww1['pincode'];
                     $gst_num2 = $roww1['gst_num'];
                     $pan_num2 = $roww1['pan_num'];
                     $company_id2 = $roww1['company_id'];
                     $model_id2 = $roww1['model_id'];
                     $colour_id2 = $roww1['colour_id'];
                     $fuel_id2 = $roww1['fuel_id'];
                     $odometer_reading2 = $roww1['odometer_reading'];
                     $year_mgf2 = $roww1['year_mgf'];
                     $resistration_num2 = $roww1['resistration_num'];
                     $chassis_number2 =$roww1['chassis_number'];
                     $payment2 = $roww1['payment'];
                     $advance2 = $roww1['advance'];
                     $pending2 = $roww1['pending'];
                     $payment_method2 =$roww1['payment_method'];

                     //vehicle
                    $Company = "select * from company where id='$company_id2'";
                        					
                	$result = mysqli_query($conn, $Company);
                		while($rw = mysqli_fetch_assoc($result) )
                	{
                	         $company_nm	= $rw['company'];
                	         
                	}
					
					$Model = "select * from model where id='$model_id2'";
                	
                	$result1 = mysqli_query($conn, $Model);
                		while($rowmodel = mysqli_fetch_assoc($result1) )
                	{
                	         $model_nm	= $rowmodel['model'];
                	         
                	}

                    // add

                    $state = "select state_name from states where state_id = '$state_id2'";
                        					
                	$resst = mysqli_query($conn, $state);
                		while($rw1 = mysqli_fetch_assoc($resst) )
                	{
                	         $state	= $rw1['state_name'];
                	         
                	}
					
					$city = "select city_name from cities where state_id = '$state_id2'";
                	
                	$rescity = mysqli_query($conn, $city);
                		while($rowcity = mysqli_fetch_assoc($rescity) )
                	{
                	         $city = $rowcity['city_name'];
                	         
                	}
						
					 // fuel

                     $fuel = "select * from fuel where id = '$fuel_id2'";
                        					
                     $resfl = mysqli_query($conn, $fuel);
                         while($rwfl = mysqli_fetch_assoc($resfl) )
                     {
                              $fuel_nm	= $rwfl['fuel'];
                              
                     }
                     
                     $colour = "select * from colour where id = '$colour_id2'";
                        					
                     $rescr = mysqli_query($conn, $colour);
                         while($rwcr = mysqli_fetch_assoc($rescr) )
                     {
                              $colour_nm	= $rwcr['colour'];
                              
                     }	 
						 	
					 

				?>
				
				<div id="modalEmp<?php echo $id2; ?>" class="modal fade modalTicketBox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                    <div class="modal-dialog modal-lg"> 
                        <div class="modal-content"> 
                            <div class="modal-header">
                                <h4 class="modal-title mt-0"><?php echo $cust_name2; ?> (<?php echo $contact_no2; ?>)  </h4> 
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div> 
                            <div class="modal-body"> 
                                <h4>#customer Details</h4><br>
								<div class="row">
												
									<div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="control-label">Name</label>
                                            : <?php echo $cust_name2; ?>
                                        </div>  
                                    </div>
									
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="productname">Contact No</label>
                                            : <?php echo $contact_no2; ?>
                                        </div>  
                                    </div>
									
									<div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="productname">Email Id</label>
                                            : <?php echo $cust_email2; ?>
                                        </div>  
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="productname">Date</label>
                                            : <?php echo $date; ?>
                                        </div>  
                                    </div>
                                    
                                </div>
								
								<div class="row">
									<div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="control-label">Address</label>
                                            : <?php echo $cust_add2; ?>
                                        </div>  
                                    </div>
									<div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">City</label>
                                            : <?php echo $city; ?>
                                        </div>  
                                    </div>
									<div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">State</label>
                                            : <?php echo $state; ?>
                                            
                                        </div>  
                                    </div> 
                                   <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Pincode</label>
                                            : <?php echo $pincode2; ?>
                                        </div>  
                                    </div>
                                </div>
								
								
								<div class="row">
									<div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">GST Number</label>
                                            : <?php echo $gst_num2; ?>
                                        </div>  
                                    </div> 
									
									<div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">PAN No</label>
                                            : <?php echo $pan_num2; ?>
                                        </div>  
                                    </div>
                                </div>

                                <hr>

                                <h4>#Vehicle Details</h4><br>
                                <div class="row">
									<div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Company</label>
                                            : <?php echo $company_nm; ?>
                                        </div>  
                                    </div>
									<div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Model</label>
                                            : <?php echo $model_nm; ?>
                                        </div>  
                                    </div>
                                   <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Colour</label>
                                            : <?php echo $colour_nm; ?>
                                        </div>  
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Fuel</label>
                                            : <?php echo $fuel_nm; ?>
                                        </div>  
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Odometer Reading</label>
                                            : <?php echo $odometer_reading2; ?>
                                        </div>  
                                    </div>
                                </div>
								

                                <div class="row">
									<div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Year Of Manufacturing</label>
                                            : <?php echo $year_mgf2; ?>
                                        </div>  
                                    </div>
									<div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Resistration Number</label>
                                            : <?php echo $resistration_num2; ?>
                                        </div>  
                                    </div>
									<div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Resistration Date</label>
                                            : <?php echo $resistration_date; ?>
                                            
                                        </div>  
                                    </div> 
                                   <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Engine Number</label>
                                            : <?php echo $odometer_reading2; ?>
                                        </div>  
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Chassis Number</label>
                                            : <?php echo $chassis_number2; ?>
                                        </div>  
                                    </div>
                                </div>

                                <hr>
                                <h4>#Payment Details</h4><br>
                                <div class="row">
									<div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Payment</label>
                                            : <?php echo $payment2; ?>
                                        </div>  
                                    </div>
									<div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Advance</label>
                                            : <?php echo $advance2; ?>
                                        </div>  
                                    </div>
									<div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Pending</label>
                                            : <?php echo $pending2; ?>
                                            
                                        </div>  
                                    </div> 
                                   <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Payment Method</label>
                                            : <?php echo $payment_method2; ?>
                                        </div>  
                                    </div>
                                </div>

								
							</div> 
                            <div class="modal-footer"> 
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button> 
                                
                            </div> 
                        </div> 
                    </div>
                </div>
				
				<?php  } ?>
                  <!-- end eye  -->


				                    <!-- eye model -->
									<?php 
					 
					 
					 $quu1 = "select * from vehicle_seller";							
                 $ress1 = mysqli_query($conn, $quu1);
                 $con_type1='';
                 $service_type='';
                 while($roww1 = mysqli_fetch_assoc($ress1))
                 {
                     $id2 = $roww1['id'];
                     $date2 = $roww1['date'];
                     $contact_no2 = $roww1['contact_no'];
                     $cust_name2 = $roww1['cust_name'];
                     $cust_email2 = $roww1['cust_email'];
                     $cust_add2 = $roww1['cust_add'];
                     $country_id2 = $roww1['country_id'];
                     $state_id2 = $roww1['state_id'];
                     $city_id2 = $roww1['city_id'];
                     $pincode2 = $roww1['pincode'];
                     $gst_num2 = $roww1['gst_num'];
                     $pan_num2 = $roww1['pan_num'];
                     $company_id2 = $roww1['company_id'];
                     $model_id2 = $roww1['model_id'];
                     $colour_id2 = $roww1['colour_id'];
                     $fuel_id2 = $roww1['fuel_id'];
                     $odometer_reading2 = $roww1['odometer_reading'];
                     $year_mgf2 = $roww1['year_mgf'];
                     $resistration_num2 = $roww1['resistration_num'];
                     $chassis_number2 =$roww1['chassis_number'];
                     $payment2 = $roww1['payment'];
                     $advance2 = $roww1['advance'];
                     $pending2 = $roww1['pending'];
                     $payment_method2 =$roww1['payment_method'];

                     //vehicle
                    $Company = "select * from company where id='$company_id2'";
                        					
                	$result = mysqli_query($conn, $Company);
                		while($rw = mysqli_fetch_assoc($result) )
                	{
                	         $company_nm	= $rw['company'];
                	         
                	}
					
					$Model = "select * from model where id='$model_id2'";
                	
                	$result1 = mysqli_query($conn, $Model);
                		while($rowmodel = mysqli_fetch_assoc($result1) )
                	{
                	         $model_nm	= $rowmodel['model'];
                	         
                	}

                    // add

                    $state = "select state_name from states where state_id = '$state_id2'";
                        					
                	$resst = mysqli_query($conn, $state);
                		while($rw1 = mysqli_fetch_assoc($resst) )
                	{
                	         $state	= $rw1['state_name'];
                	         
                	}
					
					$city = "select city_name from cities where state_id = '$state_id2'";
                	
                	$rescity = mysqli_query($conn, $city);
                		while($rowcity = mysqli_fetch_assoc($rescity) )
                	{
                	         $city = $rowcity['city_name'];
                	         
                	}
						
					 // fuel

                     $fuel = "select * from fuel where id = '$fuel_id2'";
                        					
                     $resfl = mysqli_query($conn, $fuel);
                         while($rwfl = mysqli_fetch_assoc($resfl) )
                     {
                              $fuel_nm	= $rwfl['fuel'];
                              
                     }
                     
                     $colour = "select * from colour where id = '$colour_id2'";
                        					
                     $rescr = mysqli_query($conn, $colour);
                         while($rwcr = mysqli_fetch_assoc($rescr) )
                     {
                              $colour_nm	= $rwcr['colour'];
                              
                     }	 
						 	
					 

				?>
				
				<div id="modalsell<?php echo $id2; ?>" class="modal fade modalTicketBox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                    <div class="modal-dialog modal-lg"> 
                        <div class="modal-content"> 
                            <div class="modal-header">
                                <h4 class="modal-title mt-0"><?php echo $cust_name2; ?> (<?php echo $contact_no2; ?>)  </h4> 
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div> 
                            <div class="modal-body"> 
                                <h4>#customer Details</h4><br>
								<div class="row">
												
									<div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="control-label">Name</label>
                                            : <?php echo $cust_name2; ?>
                                        </div>  
                                    </div>
									
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="productname">Contact No</label>
                                            : <?php echo $contact_no2; ?>
                                        </div>  
                                    </div>
									
									<div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="productname">Email Id</label>
                                            : <?php echo $cust_email2; ?>
                                        </div>  
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="productname">Date</label>
                                            : <?php echo $date; ?>
                                        </div>  
                                    </div>
                                    
                                </div>
								
								<div class="row">
									<div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="control-label">Address</label>
                                            : <?php echo $cust_add2; ?>
                                        </div>  
                                    </div>
									<div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">City</label>
                                            : <?php echo $city; ?>
                                        </div>  
                                    </div>
									<div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">State</label>
                                            : <?php echo $state; ?>
                                            
                                        </div>  
                                    </div> 
                                   <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Pincode</label>
                                            : <?php echo $pincode2; ?>
                                        </div>  
                                    </div>
                                </div>
								
								
								<div class="row">
									<div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">GST Number</label>
                                            : <?php echo $gst_num2; ?>
                                        </div>  
                                    </div> 
									
									<div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">PAN No</label>
                                            : <?php echo $pan_num2; ?>
                                        </div>  
                                    </div>
                                </div>

                                <hr>

                                <h4>#Vehicle Details</h4><br>
                                <div class="row">
									<div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Company</label>
                                            : <?php echo $company_nm; ?>
                                        </div>  
                                    </div>
									<div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Model</label>
                                            : <?php echo $model_nm; ?>
                                        </div>  
                                    </div>
                                   <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Colour</label>
                                            : <?php echo $colour_nm; ?>
                                        </div>  
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Fuel</label>
                                            : <?php echo $fuel_nm; ?>
                                        </div>  
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Odometer Reading</label>
                                            : <?php echo $odometer_reading2; ?>
                                        </div>  
                                    </div>
                                </div>
								

                                <div class="row">
									<div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Year Of Manufacturing</label>
                                            : <?php echo $year_mgf2; ?>
                                        </div>  
                                    </div>
									<div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Resistration Number</label>
                                            : <?php echo $resistration_num2; ?>
                                        </div>  
                                    </div>
									<div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Resistration Date</label>
                                            : <?php echo $resistration_date; ?>
                                            
                                        </div>  
                                    </div> 
                                   <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Engine Number</label>
                                            : <?php echo $odometer_reading2; ?>
                                        </div>  
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Chassis Number</label>
                                            : <?php echo $chassis_number2; ?>
                                        </div>  
                                    </div>
                                </div>

                                <hr>
                                <h4>#Payment Details</h4><br>
                                <div class="row">
									<div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Payment</label>
                                            : <?php echo $payment2; ?>
                                        </div>  
                                    </div>
									<div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Advance</label>
                                            : <?php echo $advance2; ?>
                                        </div>  
                                    </div>
									<div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Pending</label>
                                            : <?php echo $pending2; ?>
                                            
                                        </div>  
                                    </div> 
                                   <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Payment Method</label>
                                            : <?php echo $payment_method2; ?>
                                        </div>  
                                    </div>
                                </div>

								
							</div> 
                            <div class="modal-footer"> 
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button> 
                                
                            </div> 
                        </div> 
                    </div>
                </div>
				
				<?php  } ?>
                  <!-- end eye  -->



                  <script>
$(".datatable-buttons").click(function() {

    var tblId=$(this).attr("id");
    alert(tblId);
    $("#"+tblId).hide();
});

</script>
</body>
</html>
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
                                    <h4 class="mb-0 font-size-18">Buyers Details</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Buyers</a></li>
                                            <li class="breadcrumb-item active">Add Buyers</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
								 <form method="post" action="" name="form" enctype="multipart/form-data">
								 
                                <div class="card">
                                    <div class="card-body">
        
                                    <div class="row">

                                                 <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Date</label>
                                                        <input name="textdate" type="date" class="form-control" required>
                                                    </div>  
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="productname">Contact No</label>
                                                        <input name="txtContact" type="text" class="form-control" required>
                                                    </div>  
                                                </div>
												<div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Customer Name</label>
                                                        <input  name="txtNm" type="text" class="form-control" required>
                                                    </div>  
                                                </div>
												<div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Email</label>
                                                        <input name="txtEmail" type="email" class="form-control">
                                                    </div>  
                                                </div>
                                               
                                            </div>
											
                                            <div class="row">
												<div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Address</label>
                                                        <input name="txtAddBilling" type="text" class="form-control">
                                                    </div>  
                                                </div>
                                            </div>
                                    </div>
                                </div>

                               
							   
							   <div class="card">
                                    <div class="card-body">
                                        <!-- <div class="row">         
								<?php	
                                 $query = "SELECT * FROM countries  ORDER BY country_name ASC";
                                 $run_query = mysqli_query($conn, $query);
                                 //Count total number of rows
	                              $count = mysqli_num_rows($run_query);
                                 
                                 ?>
                                 <div class="col-sm-3">
                                 <div class="form-group">
                                <label class="control-label">Country</label>
                                 <select class="form-control" name="country" id="country">
                                     <option value="">Select Country</option>
                                     <?php
                                     if($count > 0){
                                         while($row = mysqli_fetch_array($run_query)){
	                              			$country_id=$row['country_id'];
	                              			$country_name=$row['country_name'];
                                             echo "<option value='$country_id'>$country_name</option>";
                                         }
                                     }else{
                                         echo '<option value="">Country not available</option>';
                                     }
                                     ?>
                                 </select>
                                 </div>
                                </div>

                                 <div class="col-sm-3">
                                 <div class="form-group">
                                <label class="control-label">State</label>
                                 <select class="form-control" name="state" id="state">
                                     <option value="">Select country first</option>
                                 </select>
                                    </div>
                                </div>
	                            
                                <div class="col-sm-3">
                                 <div class="form-group">
                                <label class="control-label">City</label>
                                 <select class="form-control" name="city" id="city">
                                     <option value="">Select state first</option>
                                 </select>
                                 </div>
                                </div>
                                             
                                
                            </div> -->
									
                                    <div class="row">
                                       <!-- eee -->
                                    <?php	
                                 $query1 = "SELECT * FROM company  ORDER BY company ASC";
                                 $run_query1 = mysqli_query($conn, $query1);
	                              $count1 = mysqli_num_rows($run_query1);
                                 
                                 ?>
                                 <div class="col-sm-3">
                                 <div class="form-group">
                                <label class="control-label">Company</label>
                                 <select class="form-control" name="company" id="company">
                                     <option value="">Select Company</option>
                                     <?php
                                     if($count > 0){
                                         while($row1 = mysqli_fetch_array($run_query1)){
	                              			$company_id2=$row1['id'];
	                              			$company_name=$row1['company'];
                                             echo "<option value='$company_id2'>$company_name</option>";
                                         }
                                     }else{
                                         echo '<option value="">Company not available</option>';
                                     }
                                     ?>
                                 </select>
                                 </div>
                                </div>

                                 <div class="col-sm-3">
                                 <div class="form-group">
                                <label class="control-label">Model</label>
                                 <select class="form-control" name="model" id="model">
                                     <option value="">Select Company first</option>
                                 </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Odometer Reading(KM)</label>
                                                        <input name="txtodometer" type="text" class="form-control">
                                                    </div>  
                                                </div>

                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Year of Manufacture</label>
                                                        <select class="form-control" name="year" required="">
                                                            <option value="">Select</option>                           
															<option value="2000">2000</option>	
															<option value="2001">2001</option>
															<option value="2002">2002</option>	
															<option value="2003">2003</option>	
															<option value="2004">2004</option>	
                                                            <option value="2005">2005</option>	
															<option value="2006">2006</option>
															<option value="2007">2007</option>	
															<option value="2008">2008</option>	
															<option value="2009">2009</option>
                                                            <option value="2010">2010</option>	
															<option value="2011">2011</option>
															<option value="2012">2012</option>	
															<option value="2013">2013</option>	
															<option value="2014">2014</option>	
                                                            <option value="2015">2015</option>	
															<option value="2016">2016</option>
															<option value="2017">2017</option>	
															<option value="2018">2018</option>	
															<option value="2019">2019</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2021">2021</option>	
															<option value="2022">2022</option>
															<option value="2023">2023</option>	
															<option value="2024">2024</option>	
															<option value="2025">2025</option>	
                                                            <option value="2026">2026</option>	
															<option value="2027">2027</option>
															<option value="2028">2028</option>	
															<option value=" 2029">2029</option>	
															<option value="2030">2030</option>
                                                        </select>
                                                    </div>  
                                                </div>
                                                     <!-- rttdgf -->
                                                   </div>

                                            <div class="row">
                                            
											
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Resistration Number</label>
                                                        <input name="txtnumber" type="text" class="form-control">
                                                    </div>  
                                                </div> 
												
												 <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Resistration Date</label>
                                                        <input name="txtdate" type="date" class="form-control">
                                                    </div>  
                                                </div>

                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Engine Number</label>
                                                        <input name="txtengine" type="text" class="form-control">
                                                    </div>  
                                                </div> 
												
												 <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Chassis Number</label>
                                                        <input name="txtchassis" type="text" class="form-control">
                                                    </div>  
                                                </div>
                                            </div>
									</div>
								</div>

                                <div class="card">
                                    <div class="card-body">

                                            <div class="row">
												<div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Payment</label>
                                                        <input name="txtpayment" id="txtpayment" type="text" class="form-control">
                                                    </div>  
                                                </div> 
												
												 <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Advance</label>
                                                        <input name="txtadvance" id="txtadvance" type="text" class="form-control">
                                                    </div>  
                                                </div>

                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Pending</label>
                                                        <input name="pending" id="pending" type="text" class="form-control">
                                                    </div>  
                                                </div> 

                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Payment Method</label>
                                                        <select class="form-control" name="payment_method" id="payment_method" required>
                                                            <option value="">Select</option>                           
															<option value="Cash">Cash</option>	
															<option value="Gpay">GPay</option>
															<option value="Phonepe">phonepe</option>	
															<option value="Account Pay">Account Pay</option>	
															<option value="Card">Card</option>	
                                                        </select>
                                                    </div>  
                                                </div>
                                            </div>
                                               
                                            <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light" name="btnupdate">Save Changes</button>
                                            <button type="submit" class="btn btn-secondary waves-effect">Cancel</button>
											
											
									</div>
								</div>
								
								
								 </form>
        
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
			
		
$textdate = $_POST['textdate'];
$txtContact = $_POST['txtContact'];
$txtNm= $_POST['txtNm'];
$txtEmail = $_POST['txtEmail'];
$txtAddBilling= $_POST['txtAddBilling'];
$country= $_POST['country'];
$state= $_POST['state'];
$city= $_POST['city'];
$txtPincodeBilling	= $_POST['txtPincodeBilling'];
$txtVAT = $_POST['txtVAT'];
$txtPAN	= $_POST['txtPAN'];
$company	= $_POST['company'];
$model	= $_POST['model'];
$colour	= $_POST['colour'];
$fuel = $_POST['fuel'];
$txtodometer = $_POST['txtodometer'];
$year = $_POST['year'];
$txtnumber = $_POST['txtnumber'];
$txtdate = $_POST['txtdate'];
$txtengine	= $_POST['txtengine'];
$txtchassis= $_POST['txtchassis'];
$txtvehicle= $_POST['txtvehicle'];
$txtpayment= $_POST['txtpayment'];
$txtadvance= $_POST['txtadvance'];
$pending	= $_POST['pending'];
$payment_method = $_POST['payment_method'];

$sqlb = mysqli_query($conn, "INSERT INTO vehicle_buyers
(`date`, `contact_no`, `cust_name`, `cust_email`, `cust_add`, `country_id`, `state_id`, `city_id`, `pincode`,
 `gst_num`, `pan_num`, `company_id`, `model_id`, `colour_id`, `fuel_id`, `odometer_reading`, `year_mgf`,
  `resistration_num`, `resistration_date`, `engine_number`, `chassis_number`, `payment`, `advance`, `pending`, `payment_method`)
VALUES
('$textdate', '$txtContact','$txtNm', '$txtEmail', '$txtAddBilling', '$country', '$state', '$city', 
'$txtPincodeBilling', '$txtVAT', '$txtPAN',  '$company', '$model', '$colour', 
'$fuel', '$txtodometer', '$year', '$txtnumber', '$txtdate', '$txtengine', '$txtchassis', '$txtpayment',
'$txtadvance', '$pending', '$payment_method')");

$p_id = mysqli_insert_id($conn);
			
				$sqlb_paid = mysqli_query($conn, "INSERT INTO invoice_paid
(invoice_id,  paid_amount, pending_amount,  total_amount, remark, payment_date) VALUES
 ('$p_id', '0', '$txtpayment','$txtpayment', '','$textdate')");


			  if($sqlb)
			  { ?>
				  <script>alert('Added successfully...');
					window.location.href = "vehicle_buy.php";</script>  
			  <?php }
}   


?>


<script>

$('#txtadvance').keyup(function() {
		var txtpayment = $("#txtpayment").val();
		var txtadvance = $("#txtadvance").val();
		$("#pending").val(Math.round(txtpayment - txtadvance))
	});

    $('#txtpayment').keyup(function() {
		var txtpayment = $("#txtpayment").val();
		var txtadvance = $("#txtadvance").val();
		$("#pending").val(Math.round(txtpayment - txtadvance))
	});

 </script>

 <!-- script start -->

<script type="text/javascript">
$(document).ready(function(){
    $('#company').on('change',function(){
        var companyID = $(this).val();
        if(companyID){
            $.ajax({
                type:'POST',
                url:'ajaxFile.php',
                data:'id='+companyID,
                success:function(html){
                    $('#model').html(html);
                }
            });
        }else{
            $('#model').html('<option value="">Select company first</option>');
        }
    });


   
});
</script>

<!-- script -->

</body>
</html>
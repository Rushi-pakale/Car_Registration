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

<?php 
 	error_reporting(0);
			 $id = $_GET['u_id'];
//print_r($id);exit;
					$query = "select * from vehicle_buyers where id = '$id'";
					
					$res = mysqli_query($conn, $query);
					while($rowss = mysqli_fetch_assoc($res) )
					{		
					
                        $id = $rowss['id'];
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
                        $terms = $rowss['terms'];

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
                                    <h4 class="mb-0 font-size-18">Update Buyers</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Buyers</a></li>
                                            <li class="breadcrumb-item active">Update Buyers</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
								 <form method="post" action="" enctype="multipart/form-data">
								 
                                <div class="card">
                                    <div class="card-body">
        
                                    <div class="row">

                                                 <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Date</label>
                                                        <input name="date" type="date" class="form-control" value="<?php echo $date; ?>">
                                                    </div>  
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="productname">Contact No</label>
                                                        <input name="contact_no" type="text" class="form-control" value="<?php echo $contact_no; ?>">
                                                    </div>  
                                                </div>
												<div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Customer Name</label>
                                                        <input  name="cust_name" type="text" class="form-control" value="<?php echo $cust_name; ?>">
                                                    </div>  
                                                </div>
												<div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Email</label>
                                                        <input name="cust_email" type="email" class="form-control" value="<?php echo $cust_email; ?>">
                                                    </div>  
                                                </div>
                                               
                                            </div>
											
                                            <div class="row">
												<div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Address</label>
                                                        <input name="cust_add" type="text" class="form-control" value="<?php echo $cust_add; ?>">
                                                    </div>  
                                                </div>
                                            </div>

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
	                              			$country_id1=$row['country_id'];
	                              			$country_name=$row['country_name']; ?>
                                            
                                             <option value="<?php echo $country_id1; ?>" <?php if($country_id == $country_id1) { echo 'selected'; } ?>>
                                             <?php echo $country_name; ?></option>
                                       <?php  }
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
                                    
                                 <?php
                                     $qstate = "select * from states where state_id = '$state_id'";
                                                   
                                 $rstate = mysqli_query($conn, $qstate);
                                     while($rowstate = mysqli_fetch_assoc($rstate) )
                                 {
                                     $state_name = $rowstate['state_name'];
                                     $st_id	= $rowstate['state_id'];
                                 ?>
                                     <option  value="<?php echo $st_id; ?>" <?php if($state_id == $st_id) { echo 'selected'; }?>>
                                     <?php echo $state_name;?></option>
                                                   
                                              <?php  }?>
                                 </select>
                                    </div>
                                </div>
	                            
                                <div class="col-sm-3">
                                 <div class="form-group">
                                <label class="control-label">City</label>
                                 <select class="form-control" name="city" id="city">
                                 <?php
                                     $qcity = "select * from cities where city_id = '$city_id'";
                                                   
                                 $rcity = mysqli_query($conn, $qcity);
                                     while($rowcity = mysqli_fetch_assoc($rcity) )
                                 {
                                     $city_name = $rowcity['city_name'];
                                     $ct_id	= $rowcity['id'];
                                 ?>
                                     <option  value="<?php echo $ct_id; ?>" <?php if($city_id == $ct_id) { echo 'selected'; }?>>
                                     <?php echo $city_name;?></option>
                                                   
                                              <?php  }?>
                                 </select>
                                 </div>
                                </div>
                            </div> -->
                                    </div>
                                </div>

                               
							   
							   <div class="card">
                                    <div class="card-body">
									
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
	                              			$company_name=$row1['company']; ?>
                                             <option value="<?php echo $company_id2; ?>" <?php if($company_id == $company_id2) { echo 'selected'; } ?>>
                                             <?php echo $company_name; ?></option>
                                       <?php  }
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
                                 <?php
                                     $qmodel = "select * from model where company_id = '$company_id'";
                                                   
                                 $rmodel = mysqli_query($conn, $qmodel);
                                     while($rowsmodel = mysqli_fetch_assoc($rmodel) )
                                 {
                                     $model	= $rowsmodel['model'];
                                     $m_id	= $rowsmodel['id'];
                                 ?>
                                     <option  value="<?php echo $m_id; ?>" <?php if($model_id == $m_id) { echo 'selected'; }?>>
                                     <?php echo $model;?></option>
                                                   
                                              <?php  }?>
                                 </select>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Odometer Reading(KM)</label>
                                                        <input name="odometer_reading" type="text" class="form-control" value="<?php echo $odometer_reading; ?>">
                                                    </div>  
                                                </div>

                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Year of Manufacture</label>
                                                        <select class="form-control" name="year" id="year">
                                                            <option value="">Select</option>                           
															<option <?php if($year_mgf == '2021'){ ?> selected <?php } ?> value="2021">2021</option>	
															<option <?php if($year_mgf == '2022'){ ?> selected <?php } ?> value="2022">2022</option>
															<option <?php if($year_mgf == '2023'){ ?> selected <?php } ?> value="2023">2023</option>	
															<option <?php if($year_mgf == '2024'){ ?> selected <?php } ?> value="2024">2024</option>	
															<option <?php if($year_mgf == '2025'){ ?> selected <?php } ?> value="2025">2025</option>	
                                                            <option <?php if($year_mgf == '2026'){ ?> selected <?php } ?> value="2026">2026</option>	
															<option <?php if($year_mgf == '2027'){ ?> selected <?php } ?> value="2027">2027</option>
															<option <?php if($year_mgf == '2028'){ ?> selected <?php } ?> value="2028">2028</option>	
															<option <?php if($year_mgf == '2029'){ ?> selected <?php } ?> value=" 2029">2029</option>	
															<option <?php if($year_mgf == '2030'){ ?> selected <?php } ?> value="2030">2030</option>
                                                        </select>
                                                    </div>  
                                                </div>
                             </div>

                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Resistration Number</label>
                                                        <input name="resistration_num" type="text" class="form-control" value="<?php echo $resistration_num; ?>">
                                                    </div>  
                                                </div> 
												
												 <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Resistration Date</label>
                                                        <input name="resistration_date" type="date" class="form-control" value="<?php echo $resistration_date; ?>">
                                                    </div>  
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Engine Number</label>
                                                        <input name="engine_number" type="text" class="form-control" value="<?php echo $engine_number; ?>">
                                                    </div>  
                                                </div> 
												
												 <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Chassis Number</label>
                                                        <input name="chassis_number" type="text" class="form-control" value="<?php echo $chassis_number; ?>">
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
                                                        <input name="payment" id="payment" type="text" class="form-control" value="<?php echo $payment; ?>">
                                                    </div>  
                                                </div> 
												
												 <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Advance</label>
                                                        <input name="advance" id="advance" type="text" class="form-control" value="<?php echo $advance; ?>">
                                                    </div>  
                                                </div>

                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Pending</label>
                                                        <input name="pending" id="pending" type="text" class="form-control" value="<?php echo $pending; ?>">
                                                    </div>  
                                                </div> 

                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Payment Method</label>
                                                        <select class="form-control" name="payment_method" id="payment_method" required>
                                                            <option value="">Select</option>
															<option <?php if($payment_method == 'Cash'){ ?> selected <?php } ?> value="Cash">Cash</option>
															<option <?php if($payment_method == 'Gpay'){ ?> selected <?php } ?> value="Gpay">GPay</option>
															<option <?php if($payment_method == 'Phonepe'){ ?> selected <?php } ?> value="Phonepe">phonepe</option>
															<option <?php if($payment_method == 'Account Pay'){ ?> selected <?php } ?> value="Account Pay">Account Pay</option>
															<option <?php if($payment_amount== 'Card'){ ?> selected <?php } ?> value="Card">Fuel Card</option>
                                                        </select>
                                                    </div>  
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                            <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Terms & Conditions</label>
                                                        <input name="terms" id="terms" type="text" class="form-control" value="<?php echo $terms; ?>">
                                                    </div>  
                                                </div>
                                            </div> -->
                                               
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
			
		
     $id = $_POST['id'];
     $date = $_POST['date'];
     $contact_no = $_POST['contact_no'];
     $cust_name = $_POST['cust_name'];
     $cust_email= $_POST['cust_email'];
     $cust_add = $_POST['cust_add'];
     $country_id= $_POST['country'];
     $state_id= $_POST['state'];
     $city_id= $_POST['city'];
     $pincode	= $_POST['pincode'];
     $gst_num= $_POST['gst_num'];
     $pan_num	= $_POST['pan_num'];
     $company_id	= $_POST['company'];
     $model_id	= $_POST['model'];
     $colour_id = $_POST['colour'];
     $fuel_id	= $_POST['fuel_id'];
     $odometer_reading= $_POST['odometer_reading'];
     $year_mgf = $_POST['year'];
     $resistration_num= $_POST['resistration_num'];
     $resistration_date= $_POST['resistration_date'];
     $engine_number= $_POST['engine_number'];
     $chassis_number	= $_POST['chassis_number'];
     $payment= $_POST['payment'];
     $advance	= $_POST['advance'];
     $pending = $_POST['pending'];
     $payment_method = $_POST['payment_method'];
     $terms = $_POST['terms'];

$id = $_GET['u_id'];

$sqlb = mysqli_query($conn, "UPDATE vehicle_buyers
SET
    id ='$id',
    date ='$date',      
    contact_no ='$contact_no',
    cust_name  ='$cust_name',
    cust_email ='$cust_email',
    cust_add   ='$cust_add',
    country_id ='$country_id',
    state_id ='$state_id',
    city_id ='$city_id',
    pincode	='$pincode',
    gst_num  ='$gst_num',
    pan_num	 ='$pan_num',
    company_id ='$company_id',
    model_id  ='$model_id',
    colour_id  ='$colour_id',
    fuel_id	 ='$fuel_id',
    odometer_reading  ='$odometer_reading',
    year_mgf  ='$year_mgf',
    resistration_num  ='$resistration_num',
    resistration_date ='$resistration_date',
    engine_number  ='$engine_number',
    chassis_number  ='$chassis_number',
    payment ='$payment',
    advance ='$advance',
    pending ='$pending',
    payment_method ='$payment_method',
    status = '1' WHERE id='$id'");

//print_r($sqlb);exit;


			  if($sqlb)
			  { ?>
				  <script>alert('Updated successfully...');
					window.location.href = "vehicle_buy.php";</script>  
			  <?php }
		
		
}   


?>  


<script>

$('#advance').keyup(function() {
		var payment = $("#payment").val();
		var advance = $("#advance").val();
		$("#pending").val(Math.round(payment - advance))
	});

    $('#payment').keyup(function() {
		var payment = $("#payment").val();
		var advance = $("#advance").val();
		$("#pending").val(Math.round(payment - advance))
	});

 </script>



<!-- script start -->

<script type="text/javascript">
$(document).ready(function(){
    $('#country').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxFile.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state').html('<option value="">Select country first</option>');
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxFile.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });

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
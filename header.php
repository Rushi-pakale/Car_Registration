<?php
require_once('database_config.php'); 
 	
 	$id = $_SESSION['admin_id'];
	
	$result = mysqli_query($conn, "select * from admin_registration where admin_id='$id'");
	while($rowval = mysqli_fetch_array($result))
	 {
		$name1 = $rowval['admin_name'];
		$nm = explode(' ',$name1);
		$name = $nm[0];
		
		$email = $rowval['admin_email'];
		$profile_photo= $rowval['admin_pic'];
		//$admin_level= $rowval['admin_level'];
	}

?>

<!doctype html>
<html lang="en">

    
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

    <body data-sidebar="dark">
        <!-- Begin page -->
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
		</div>
	</body>
</html>
<!doctype html>
<html lang="en">

    

<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>
       
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-soft-primary">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div class="p-2">
								
									<div style="color:#fb0000; ">
										   <p> <?php
												error_reporting(0);
												$sessionn = $_REQUEST['lgn'];
												if($sessionn=='nnn')
												{ 
													echo 'Invalid Username Or Password...!';
													 
												}
											?>   </p>	
									</div>
									<div style="color:#ff0000; ">
										  <p>  <?php
												error_reporting(0);
												$sessionn = $_REQUEST['ses'];
												if($sessionn=='ex')
												{ 
													echo 'Sorry Session expire, please login again..!';
												}
											?>   </p>	
									</div> 
									
                                    <form class="form-horizontal" action="excess/admin_login.php" method="post">
        
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" required="" placeholder="Username" name="txtusername" id="txtusername">
                                        </div>
                
                                        <div class="form-group">
                                            <label for="userpassword">Password</label>
                                            <input type="password" class="form-control" required="" placeholder="Password" name="txtpassword" id="txtpassword">
                                        </div>
                
                                        
                                        
                                        <div class="mt-3">
                                            <button class="btn btn-primary btn-block waves-effect waves-light" name="btnsubmit" id="btnsubmit" type="submit">Log In</button>
                                        </div>
            
                                        <div class="mt-4 text-center">
                                            <a href="#" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Forgot your password?</a>
                                        </div>
                                    </form>
                                </div>
            
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </body>


</html>


<script type="text/javascript">
		
		/*** Check Login Creditinals ****/
		
			function logincheck()
			{	
					
					var admin_email = $('#txtusername').val();
					var admin_password = $('#txtpassword').val();
					
					
					if(admin_email=="")
					{
						$('#txtusername').focus();
						$('#err_email').show();
						setTimeout(function(){ $('#err_email').hide(); }, 2500);
						
					}
					
					else if(admin_password=="")
					{
						$('#txtpassword').focus();
						$('#err_pass').show();
						setTimeout(function(){ $('#err_pass').hide(); }, 2500);
						
					}
					
					else 
		        	{
				
		           var datastring='txtusername='+txtusername+'&txtpassword='+txtpassword;
					$.ajax({
					url:'excess/admin_login.php',
					type:'POST',
					data:datastring,
						success:function(data)
						{
 
							var obj=$.parseJSON(data);
							if(obj=="No")
							{
							$('#errormsg').show();	
							$('#txtusername').focus();	
							//$("#admin_email").val('');
							//$("#admin_password").val('');
							setTimeout(function(){ $('#errormsg').hide(); }, 3000);
							}
							else
							{
								$('#successrmsg').show();
								setTimeout(function(){ $('#successrmsg').hide(); }, 500);
								 window.location.href = "";								
							}
 
						}
						}); 					
					}
			}		
	</script> 

				
            <html>
             <body>   
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        

        <!--script src="assets/js/pages/dashboard.init.js"></script-->
		
		<!-- select 2 plugin -->
        <script src="assets/libs/select2/js/select2.min.js"></script>

        <!-- dropzone plugin -->
        <script src="assets/libs/dropzone/min/dropzone.min.js"></script>

        <!-- init js -->
        <script src="assets/js/pages/ecommerce-select2.init.js"></script>
		
		
		<!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/jszip/jszip.min.js"></script>
        <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
		<!-- Datatable init js -->
        <script src="assets/js/pages/datatables.init.js"></script> 
		
		
		<script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
		
		
		<script src="assets/js/calender/tui-code-snippet.min.js"></script>
		
		<script src="assets/libs/tui-dom/tui-dom.min.js"></script>

        <script src="assets/libs/tui-time-picker/tui-time-picker.min.js"></script>
        <script src="assets/libs/tui-date-picker/tui-date-picker.min.js"></script>
        
        <script src="assets/libs/moment/min/moment.min.js"></script>
        <script src="assets/libs/chance/chance.min.js"></script>

        <script src="assets/libs/tui-calendar/tui-calendar.min.js"></script>

        <script src="assets/js/pages/calendars.js"></script>
        <script src="assets/js/pages/schedules.js"></script>
        <!--script src="assets/js/pages/calendar.init.js"></script-->
		
		
		<!-- Summernote js -->
        <script src="assets/libs/summernote/summernote-bs4.min.js"></script>
		
		<!-- form repeater js -->
        <script src="assets/libs/jquery.repeater/jquery.repeater.min.js"></script>

        <script src="assets/js/pages/form-repeater.int.js"></script>
		
		<!-- init js -->
        <script src="assets/js/pages/form-editor.init.js"></script>
        

        <script src="assets/js/app.js"></script>
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

		 <!-- Chart JS -->
        <script src="assets/libs/chart.js/Chart.bundle.min.js"></script>
        <script src="assets/js/pages/chartjs.init.js"></script> 

       <script>	
            $(document).ready(function() {
                $('#trip_list').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                } );
            } );

			function user_login(id1)
			 {
			  //if(confirm("Are You Sure You Want To Login"))
			  
			  $.ajax({
			   
					 url:'excess/session_login.php',
					 method: "GET",
                     dataType: "json",
					  
					 data:{'id':id1},
					 success: function(data)
					 {
						 
                            location.reload();
                         
					 }
				});	
			 }			
			</script>
		  
    </body>



</html>
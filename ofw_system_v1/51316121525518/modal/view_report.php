
<div class="modal fade" id="view_report<?php echo $report_id; ?>" hidden="true" role="dialog">
	        <div class="modal-dialog">
	            <div class="modal-content">
	              	<div class="modal-header">
	                	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                  		<span aria-hidden="true">&times;</span>
	                  	</button>
	                  	<center>
	                		<h4 class="modal-title text-center"><b>VIEW MONTHLY REPORT</b></h4>
	                	</center>
	             	</div>
	              	<div class="modal-body">
	              		<?php

	              			$get_flights = "SELECT * FROM tbl_reports WHERE report_id = '$report_id'";

	              			$run_get = mysqli_query($con,$get_flights);

	              			$row_get = mysqli_fetch_array($run_get);

	              			$applicant_id = $row_get['applicant_id'];

	              			$monthly_salary = $row_get['monthly_salary'];

	              			$monthly_report = $row_get['monthly_report'];
	              			
	              			$date_created = $row_get['date_created'];
	              			

	              		?>
	              		<form class="form-horizontal" action="" method="post">
	    					<div class="form-group"><!-- form-group Starts -->
								<div class="col-md-6">
									<input type="hidden" name="applicant_id" class="form-control" value="<?php echo $applicant_id; ?>">
								</div>
							</div><!-- form-group Ends -->
							<div class="form-group"><!-- form-group Starts -->
								<label class="col-md-3 control-label">
									Report Date
								</label>
								<div class="col-md-6">
									<input type="text" disabled name="date_created" class="form-control"  value="<?php echo $date_created; ?>">
								</div>
							</div><!-- form-group Ends -->
							
							<div class="form-group"><!-- form-group Starts -->
								<label class="col-md-3 control-label">
									Receive Monthly Salary ?
								</label>
								<div class="col-md-6">
									<input type="text" disabled name="monthly_salary" class="form-control" value="<?php echo $monthly_salary; ?>">
								</div>
							</div><!-- form-group Ends -->
							<div class="form-group"><!-- form-group Starts -->
								<label class="col-md-3 control-label">
									Monthly Report
								</label>
								<div class="col-md-6">
									<textarea class="form-control" rows="4" disabled name="monthly_report"><?php echo $monthly_report; ?></textarea>
								</div>
							</div>
							
	    				</form>
	              	</div>
	            </div>
	            <!-- /.modal-content -->
	        </div>
	        <!-- /.modal-dialog -->
	    </div>
	    <script type="application/javascript">

    function isNumericKey(evt){

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;

        return true;
    }

    </script>
	    

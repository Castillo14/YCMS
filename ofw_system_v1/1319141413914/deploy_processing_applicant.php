<?php

				if(!isset($_SESSION['username'])){

					echo "
						<script>
							window.open('../login.php','_self')
						</script>
					";

				}else{

			?>
			<?php
				if(isset($_GET['deploy_processing_applicant'])){
					$delete_id = $_GET['deploy_processing_applicant'];
					$delete_waiting = "SELECT * FROM tbl_applicants WHERE applicant_id = '$delete_id' AND application_status = '2' AND removed = 'No'";
					$run_delete = mysqli_query($con,$delete_waiting);
					$row_edit = mysqli_fetch_array($run_delete);
					$d_id = $row_edit['applicant_id'];
					$d_fname = $row_edit['first_name'];
					$d_mname = $row_edit['middle_name'];
					$d_lname = $row_edit['last_name'];
					$d_position = $row_edit['position_selected'];
					$d_bdate = $row_edit['birth_date'];
					$d_gender = $row_edit['gender'];
					$d_contact_number = $row_edit['contact_number'];
					$d_email_address = $row_edit['email_address'];
					$d_address = $row_edit['address'];
					$d_passport_number = $row_edit['passport_number'];
					$d_owwa_number = $row_edit['owwa_number'];
					$d_iqama = $row_edit['iqama'];
					$d_employer_id = $row_edit['employer_id'];
					$employer_select = "SELECT * FROM tbl_employers WHERE employer_id = '$d_employer_id'";
					$run_employer = mysqli_query($con,$employer_select);
					$row_select = mysqli_fetch_array($run_employer);
					$e_first_name = $row_select['first_name'];
					$e_middle_name = $row_select['middle_name'];
					$e_last_name = $row_select['last_name'];
					$e_contact_number = $row_select['contact_number'];
					$e_email_address = $row_select['email_address'];
					$e_company_name = $row_select['company_name'];
					$e_company_address = $row_select['company_address'];
					$e_national_id = $row_select['national_id'];
					$flight_select = "SELECT * FROM tbl_flights WHERE applicant_id = '$d_id'";
					$run_flight = mysqli_query($con,$flight_select);
					$row_flight = mysqli_fetch_array($run_flight);
					$f_abroad = $row_flight['abroad_agency'];
				}
			?>
			<div class="row"><!-- 1 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<ol class="breadcrumb"><!-- breadcrumb Starts -->
			<li>
				<i class="fa fa-black-tie"></i>
				Applicants / Deploy Applicant
			</li>
		</ol><!-- breadcrumb Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 1 row Ends -->
<div class="row"><!-- 2 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<div class="panel panel-default"><!-- panel panel-default Starts -->
			<div class="panel-heading"><!-- panel-heading Starts -->
				<h3 class="panel-title"><!-- panel-title Starts -->
					<i class="fa fa-folder fa-fw"></i>
					Deploy Applicant
				</h3><!-- panel-title Ends -->
			</div><!-- panel-heading Ends -->
			<div class="panel-body"><!-- panel-body Starts -->
				<form action="" method="post" class="form-horizontal">
	                       		<h3 class="text-center">Are you sure you want to deploy <span style="color: red;"><?php echo $d_lname; ?>, <?php echo $d_fname; ?> <?php echo $d_mname; ?></span>&nbsp;?</h3><br>
	                       		<div class="form-group"><!-- form-group Starts -->
									<label class="col-md-3 control-label">
										
									</label>
									<div class="col-md-6">
										<input type="submit" name="delete" value="Deploy" class="btn btn-primary form-control">
									</div>
								</div><!-- form-group Ends -->
								<div class="form-group"><!-- form-group Starts -->
									<label class="col-md-3 control-label">
										
									</label>
									<div class="col-md-6">
										<a href="index.php?processing_applicants" class="btn btn-danger form-control">
											Cancel
										</a>
									</div>
								</div><!-- form-group Ends -->
	              			</form>
			</div><!-- panel-body Ends -->
		</div><!-- panel panel-default Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->
<?php

            if(isset($_POST['delete'])){

            	
		$delete_ = "UPDATE tbl_applicants SET application_status = '3' WHERE applicant_id = '$d_id' AND removed = 'No'";

		$run_delete = mysqli_query($con,$delete_);
		
		$insert = "INSERT INTO tbl_deployed (deployed_first_name,deployed_middle_name,deployed_last_name,deployed_gender,deployed_contact_number,deployed_email_address,deployed_address,deployed_passport_number,deployed_owwa_number,deployed_iqama_number,deployed_employer_first_name,deployed_employer_middle_name,deployed_employer_last_name,deployed_employer_company_name,deployed_employer_company_address,deployed_employer_contact_number,deployed_employer_email_address,deployed_employer_national_id,deployed_agency,deployed_position,deployed_bdate,deployed_tieup) VALUES ('$d_fname','$d_mname','$d_lname','$d_gender','$d_contact_number','$d_email_address','$d_address','$d_passport_number','$d_owwa_number','$d_iqama','$e_first_name','$e_middle_name','$e_last_name','$e_company_name','$e_company_address','$e_contact_number','$e_email_address','$e_national_id','Yaramay Computer Maintenance Services','$d_position','$d_bdate','$f_abroad')";

		$run_insert = mysqli_query($conn,$insert);

		if($run_delete && $run_insert){

			echo "
                <script>
                    alert('Applicant Has Been Deployed')
                </script>
            ";

            echo "
				<script>
					window.open('index.php?deployed_applicants','_self')
				</script>
			";

		}else{

			echo "
                <script>
                    alert('Error Deploying Applicant')
                </script>
            ";

		}

            	}

    ?>
			<?php

			}

			?>	
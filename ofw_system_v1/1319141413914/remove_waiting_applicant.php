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
				if(isset($_GET['remove_waiting_applicant'])){
					$delete_id = $_GET['remove_waiting_applicant'];
					$delete_waiting = "SELECT * FROM tbl_applicants WHERE applicant_id = '$delete_id' AND application_status = '1' AND removed = 'No'";
					$run_delete = mysqli_query($con,$delete_waiting);
					$row_edit = mysqli_fetch_array($run_delete);
					$d_id = $row_edit['applicant_id'];
					$d_fname = $row_edit['first_name'];
					$d_mname = $row_edit['middle_name'];
					$d_lname = $row_edit['last_name'];
				}
			?>
			<div class="row"><!-- 1 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<ol class="breadcrumb"><!-- breadcrumb Starts -->
			<li>
				<i class="fa fa-users"></i>
				Applicants / Remove Applicant
			</li>
		</ol><!-- breadcrumb Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 1 row Ends -->
<div class="row"><!-- 2 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<div class="panel panel-default"><!-- panel panel-default Starts -->
			<div class="panel-heading"><!-- panel-heading Starts -->
				<h3 class="panel-title"><!-- panel-title Starts -->
					<i class="fa fa-trash-o fa-fw"></i>
					Remove Applicant
				</h3><!-- panel-title Ends -->
			</div><!-- panel-heading Ends -->
			<div class="panel-body"><!-- panel-body Starts -->
				<form action="" method="post" class="form-horizontal">
	                       		<h3 class="text-center">Are you sure you want to remove <span style="color: red;"><?php echo $d_lname; ?>, <?php echo $d_fname; ?> <?php echo $d_mname; ?></span>&nbsp;?</h3><br>
	                       		<div class="form-group"><!-- form-group Starts -->
									<label class="col-md-3 control-label">
										
									</label>
									<div class="col-md-6">
										<input type="submit" name="delete" value="Remove" class="btn btn-primary form-control">
									</div>
								</div><!-- form-group Ends -->
								<div class="form-group"><!-- form-group Starts -->
									<label class="col-md-3 control-label">
										
									</label>
									<div class="col-md-6">
										<a href="index.php?waiting_applicants" class="btn btn-danger form-control">
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

		$delete_ = "UPDATE tbl_applicants SET removed = 'Yes', date_removed = now(), removed_by = '$creator' WHERE applicant_id = '$d_id'";

		$run_delete = mysqli_query($con,$delete_);

		if($run_delete){

			echo "
                <script>
                    alert('Applicant Has Been Removed')
                </script>
            ";

            echo "
				<script>
					window.open('index.php?waiting_applicants','_self')
				</script>
			";

		}else{

			echo "
                <script>
                    alert('Error Removing Applicant')
                </script>
            ";

		}

            	}

    ?>
			<?php

			}

			?>	
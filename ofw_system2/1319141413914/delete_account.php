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
	if(isset($_GET['delete_account'])){
		$delete_id = $_GET['delete_account'];
		$delete_accnt = "SELECT * FROM tbl_accounts WHERE account_id = '$delete_id' AND removed = 'No'";
		$run_delete = mysqli_query($con,$delete_accnt);
		$row_delete = mysqli_fetch_array($run_delete);
		$d_id = $row_delete['account_id'];
		$d_fname = $row_delete['first_name'];
		$d_mname = $row_delete['middle_name'];
		$d_lname = $row_delete['last_name'];
		$d_email_address = $row_delete['email_address'];
		$d_contact_number = $row_delete['contact_number'];
		$d_username = $row_delete['account_username'];
		$d_password = $row_delete['account_password'];
		$d_address = $row_delete['address'];
		$d_job = $row_delete['job'];
		$d_image = $row_delete['image'];
		$d_created_by = $row_delete['created_by'];
		$d_date_created = $row_delete['date_created'];
	}
?>
<div class="row"><!-- 1 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<ol class="breadcrumb"><!-- breadcrumb Starts -->
			<li>
				<i class="fa fa-user-secret"></i>
				Accounts / Delete Account
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
					Delete Account
				</h3><!-- panel-title Ends -->
			</div><!-- panel-heading Ends -->
			<div class="panel-body"><!-- panel-body Starts -->
				<form action="" method="post" class="form-horizontal">
	                       		<h3 class="text-center">Are you sure you want to delete <span style="color: red;"><?php echo $d_lname; ?>, <?php echo $d_fname; ?> <?php echo $d_mname; ?></span>&nbsp;?</h3><br>
	                       		<div class="form-group"><!-- form-group Starts -->
									<label class="col-md-3 control-label">
										
									</label>
									<div class="col-md-6">
										<input type="submit" name="delete" value="Delete" class="btn btn-primary form-control">
									</div>
								</div><!-- form-group Ends -->
								<div class="form-group"><!-- form-group Starts -->
									<label class="col-md-3 control-label">
										
									</label>
									<div class="col-md-6">
										<a href="index.php?accounts" class="btn btn-danger form-control">
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
		
		$delete_ = "UPDATE tbl_accounts SET removed = 'Yes', date_removed = now(), removed_by = '$creator' WHERE account_id = '$delete_id'";

		$run_delete = mysqli_query($con,$delete_);

		if($run_delete){

			echo "
                <script>
                    alert('Account Has Been Deleted')
                </script>
            ";

            echo "
				<script>
					window.open('index.php?accounts','_self')
				</script>
			";

		}else{

			echo "
                <script>
                    alert('Error Deleting Account')
                </script>
            ";

		}
	}
?>
<?php
	}
?>
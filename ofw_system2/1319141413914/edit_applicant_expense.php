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

			$jScript = md5(rand(1,9));
			 $newScript = md5(rand(1,9));
			 $Script = md5(rand(1,9));
			 $getUpdate = md5(rand(1,9));
		   	 $getDelete = md5(rand(1,9));

				if(isset($_GET['edit_applicant_expense'])){

					$edit_id = $_GET['edit_applicant_expense'];

					$edit_document = "select * from tbl_expenses where expenses_id = '$edit_id'";

					$run_edit = mysqli_query($con,$edit_document);

					$row_edit = mysqli_fetch_array($run_edit);

					$e_title = $row_edit['title'];
					$id = $row_edit['applicant_id'];
					
					

					$e_amount = $row_edit['amount'];

				}

			?>
<div class="row"><!-- 1 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<ol class="breadcrumb"><!-- breadcrumb Starts -->
			<li>
				<i class="fa fa-users"></i>
				Agent / Edit Applicant Expense
			</li>
		</ol><!-- breadcrumb Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 1 row Ends -->
<div class="row"><!-- 2 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<div class="panel panel-default"><!-- panel panel-default Starts -->
			<div class="panel-heading"><!-- panel-heading Starts -->
				<h3 class="panel-title"><!-- panel-title Starts -->
					<i class="fa fa-pencil fa-fw"></i>
					Edit Expense
				</h3><!-- panel-title Ends -->
			</div><!-- panel-heading Ends -->
			<div class="panel-body"><!-- panel-body Starts -->
				<form class="form-horizontal" action="" method="post"><!-- form-horizontal Starts -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							Description
						</label>
						<div class="col-md-6">
							<input type="text" name="title" class="form-control" required value="<?php echo $e_title; ?>">
						</div>
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							Amount
						</label>
						<div class="col-md-6">
							<input type="text" name="amount" class="form-control" value="<?php echo $e_amount; ?>" required>
						</div>
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							
						</label>
						<div class="col-md-6">
							<input type="hidden" name="amount2" class="form-control" value="<?php echo $e_amount; ?>" required>
						</div>
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							
						</label>
						<div class="col-md-6">
							<input type="submit" name="update" value="Update Expense" class="btn btn-primary form-control">
						</div>
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							
						</label>
						<div class="col-md-6">
							<a href="index.php?jScript=<?php echo $jScript; ?> && newScript=<?php echo $newScript; ?> && view_expnse=<?php echo $Script; ?> && view_applicant_expense=<?php echo $id; ?> && getView=<?php echo $getUpdate; ?>" class="btn btn-danger form-control">
								Cancel
							</a>
						</div>
					</div><!-- form-group Ends -->
				</form><!-- form-horizontal Ends -->
			</div><!-- panel-body Ends -->
		</div><!-- panel panel-default Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->
<?php

	if(isset($_POST['update'])){

		$title = mysqli_real_escape_string($con,$_POST['title']);

		$amount = mysqli_real_escape_string($con,$_POST['amount']);

		$amount2 = mysqli_real_escape_string($con,$_POST['amount2']);

		$edit_exp = "update tbl_expenses set deducted_amount='0', title = '$title', amount = '$amount', last_amount = '$amount2', date_created = now() where expenses_id = '$edit_id'";

		$run_exp = mysqli_query($con,$edit_exp);

		if($run_exp){

			echo "
				<script>
					alert('Expenses Has Been Updated')
				</script>
			";

			echo "
				<script>
					window.open('index.php?jScript=$jScript && newScript=$newScript && view_expnse=$Script && view_applicant_expense=$id && getView=$getUpdate','_self')
				</script>
			";


		}else{

					echo "
						<script>
							alert('Error Updating Expense')
						</script>
					";

				}

	}

?>
<?php

				}

			?>
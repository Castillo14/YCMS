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

				if(isset($_GET['add_applicant_expense'])){

					$retriv_id = $_GET['add_applicant_expense'];
				}

			?>
<div class="row"><!-- 1 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<ol class="breadcrumb"><!-- breadcrumb Starts -->
			<li>
				<i class="fa fa-users"></i>
				Agents / Add Applicant Expense
			</li>
		</ol><!-- breadcrumb Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 1 row Ends -->
<div class="row"><!-- 2 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<div class="panel panel-default"><!-- panel panel-default Starts -->
			<div class="panel-heading"><!-- panel-heading Starts -->
				<h3 class="panel-title"><!-- panel-title Starts -->
					<i class="fa fa-plus fa-fw"></i>
					Add Expense
				</h3><!-- panel-title Ends -->
			</div><!-- panel-heading Ends -->
			<div class="panel-body"><!-- panel-body Starts -->
				<form class="form-horizontal" action="" method="post"><!-- form-horizontal Starts -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							Description
						</label>
						<div class="col-md-6">
							<input type="text" name="title" class="form-control" required>
						</div>
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							Amount
						</label>
						<div class="col-md-6">
							<input type="text" name="amount" class="form-control" required >
						</div>
					</div><!-- form-group Ends -->
					
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							
						</label>
						<div class="col-md-6">
							<input type="submit" name="submit" value="Insert Expense" class="btn btn-primary form-control">
						</div>
					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
						<label class="col-md-3 control-label">
							
						</label>
						<div class="col-md-6">
							<a href="index.php?jScript=<?php echo $jScript; ?> && newScript=<?php echo $newScript; ?> && view_expnse=<?php echo $Script; ?> && view_applicant_expense=<?php echo $retriv_id; ?> && getView=<?php echo $getUpdate; ?>" class="btn btn-danger form-control">
								Cancel
							</a>
						</div>
					</div><!-- form-group Ends -->
				</form><!-- form-horizontal Ends -->
			</div><!-- panel-body Ends -->
		</div><!-- panel panel-default Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->
<script type="application/javascript">

    function isNumericKey(evt){

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;

        return true;
    }

    </script>
<?php

	if(isset($_POST['submit'])){

		$title = mysqli_real_escape_string($con,$_POST['title']);
		
		$amount = mysqli_real_escape_string($con,$_POST['amount']);
		
		
$insert_exp = "insert into tbl_expenses (applicant_id,title,amount,last_amount,deducted_amount,date_created) values ('$retriv_id','$title','$amount','0','0',now())";
				

				$run_exp = mysqli_query($con,$insert_exp);

				if($run_exp){

					echo "
						<script>
							alert('New Expense Has Been Inserted')
						</script>
					";

					echo "
						<script>
							window.open('index.php?jScript=$jScript && newScript=$newScript && view_expnse=$Script && view_applicant_expense=$retriv_id && getView=$getUpdate','_self')
						</script>
					";

				}else{

					echo "
						<script>
							alert('Do Not Use Other Characters in Some Fields')
						</script>
					";

				}

		
	}

?>
<?php

				}

			?>
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
		   	 $getRetrieve = md5(rand(1,9));

				if(isset($_GET['view_applicant_expense'])){

					$retriv_id = $_GET['view_applicant_expense'];

					$retriv = "select * from tbl_applicants where applicant_id = '$retriv_id' and removed = 'No'";

					$run_retriv = mysqli_query($con,$retriv);

					$row_retriv = mysqli_fetch_array($run_retriv);

					$frst = $row_retriv['first_name'];
					$mdl = $row_retriv['middle_name'];
					$lst = $row_retriv['last_name'];
					$id = $row_retriv['agent_id'];

					$name = ucfirst($frst) . " " . ucfirst($mdl) . " " . ucfirst($lst);

					

				}

			?>
<section class="content-header">
	<h1>
		Expences
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li class="active">Agent</li>
	    <li class="active">View Applicant</li>
	    <li class="active">View Applicant Expenses</li>
	</ol>
</section> 
<section class="content">
	<a class="btn btn-default" href="index.php?jScript=<?php echo $jScript; ?> && newScript=<?php echo $newScript; ?> && view_applicnt=<?php echo $Script; ?> && view_agent_applicant=<?php echo $id; ?> && getView=<?php echo $getUpdate; ?>">
		<i class="fa fa-reply"></i>
		Back
	</a>
	<a class="btn btn-default" href="index.php?jScript=<?php echo $jScript; ?> && newScript=<?php echo $newScript; ?> && add_expp=<?php echo $Script; ?> && add_applicant_expense=<?php echo $retriv_id; ?> && getAdd=<?php echo $getUpdate; ?>">
		<i class="fa fa-plus"></i>
		Add Expense
	</a>
	<a class="btn btn-default" href="../PHPExcel/Examples/agents_view_expences.php?jScript=<?php echo $jScript; ?> && newScript=<?php echo $newScript; ?> && view=<?php echo $Script; ?> && retrieve=<?php echo $retriv_id; ?> && getView=<?php echo $getRetrieve; ?>">
		<i class="fa fa-print"></i>
		Get Excel
	</a>
					<div class="row">
	        			<div class="col-xs-12">
	          				<div class="box box-success">
	            				<div class="box-header">
	              					<h3 class="box-title"><i class="fa fa-user"></i> <?php echo $name; ?>
	              						<span>
	              							<a class="btn-sm btn-primary navbar-btn right" href="#"><!-- btn btn-primary navbar-btn right Starts -->
	            								<?php

	            								$total = "select * from tbl_expenses where applicant_id = '$retriv_id'";

	            								$run_total = mysqli_query($con,$total);

	            								$count_total = mysqli_num_rows($run_total);

	            								echo $count_total;

	            								?>
	        								</a><!-- btn btn-primary navbar-btn right Ends -->
	        							</span>
	    							</h3>
	              					
	            				</div>
	            				<!-- /.box-header -->
	            				<div class="box-body table-responsive no-padding">
	              					<table class="table table-hover" id="ample2">
	              						<thead>
	                					<tr>
	                  						<th>#</th>
	                  						<th>Description</th>
	                  						<th>Amount</th>
	                  						<th>Last Amount</th>
	                  						<th>Amount Deducted</th>
	                  						<th>Date</th>
	                  						<th>Actions</th>
	                					</tr>
	                					</thead>
	                					<tbody>
	                					<?php

	                						$i=0;
	                						$total = 0;

	                						$select_app = "select * from tbl_expenses where applicant_id = '$retriv_id'";

	                						$run_select = mysqli_query($con,$select_app);

	                						while($row=mysqli_fetch_array($run_select)){

							                    $exp_id = $row['expenses_id'];
							                    $title = $row['title'];
							                    $amount = $row['amount'];
							                    $last = $row['last_amount'];
							                    $deducted = $row['deducted_amount'];
							                    $date = $row['date_created'];
							                    $i++;
							                    $total+= $amount;

           								 ?> 
	                					<tr>
	                  						<td><?php echo $i; ?></td>
	                  						<td><?php echo $title; ?></td>
	                  						<td><?php echo $amount; ?></td>
	                  						<td><?php echo $last; ?></td>
	                  						<td><?php echo $deducted; ?></td>
	                  						<td><?php echo $date; ?></td>
	                  						<td>
	                  							<a href="index.php?jScript=<?php echo $jScript; ?> && newScript=<?php echo $newScript; ?> && edit_expp=<?php echo $Script; ?> && edit_applicant_expense=<?php echo $exp_id; ?> && getEdit=<?php echo $getUpdate; ?>" class="btn btn-default btn-small">
													<i class="fa fa-pencil"></i>
												</a>
												<a href="index.php?jScript=<?php echo $jScript; ?> && newScript=<?php echo $newScript; ?> && delete_expp=<?php echo $Script; ?> && delete_applicant_expense=<?php echo $exp_id; ?> && getDelete=<?php echo $getDelete; ?>" class="btn btn-default btn-small">
													<i class="fa fa-remove"></i>
												</a>
												<a href="index.php?jScript=<?php echo $jScript; ?> && newScript=<?php echo $newScript; ?> && deduct_expp=<?php echo $Script; ?> && deduct_applicant_expense=<?php echo $exp_id; ?> && getDeduct=<?php echo $getUpdate; ?>" class="btn btn-default btn-small">
													Deduct
												</a>
	                  						</td>
	                					</tr>
	                					<?php

	                						}

	                					?>
	                					</tbody>
	                					<tfoot>
									            	<tr>
									            		<th colspan='3'>
									            			
									            		</th>
									            		<th>
									            			<i class='fa fa-money'></i> Total Amount 
									            		</th>
									            		<th>
									            			<?php echo $total; ?>
									            		</th>
									            	</tr>
									            </tfoot>
	              					</table>
	            				</div>
	            				<!-- /.box-body -->
	          				</div>
	          				<!-- /.box -->
	        			</div>
	      			</div>
</section>
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	

<script>
  	$(function () {
    $('#ample1').DataTable()
    $('#ample2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : true
    })
  	})
	</script>
<?php

	}

?>
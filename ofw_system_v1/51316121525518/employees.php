<?php

				if(!isset($_SESSION['username'])){

					echo "
						<script>
							window.open('login.php','_self')
						</script>
					";

				}else{

			?>
			<section class="content-header">
	      			<h1>
	        			Processing Employees
	      			</h1>
	      			<ol class="breadcrumb">
	        			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        			<li class="active">Processing Employees</li>
	      			</ol>
	    		</section>
	    		<!-- Main content -->
	    		<section class="content">
	    			<a href="index.php?employees" class="btn btn-default">
	    				<i class="fa fa-refresh"></i>
						Refresh
	    			</a>
					<div class="row">
	        			<div class="col-xs-12">
	          				<div class="box box-success">
	            				<div class="box-header">
	              					<h3 class="box-title"><i class="fa fa-users"></i> Processing Employees 
	              						<span>
	              							<a class="btn-sm btn-primary navbar-btn right" href="#"><!-- btn btn-primary navbar-btn right Starts -->
	            								<?php

	            								$total = "SELECT * FROM tbl_applicants WHERE application_status = '2' AND removed = 'No' AND employer_id = '$account_id'";

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
	                  						<th>Applicant Code</th>
	                  						<th>Applicant Name</th>
	                  						<th>Contact Number</th>
	                  						<th>Email Address</th>
	                  						<th>Date Applied</th>
	                  						<th>Actions</th>
	                					</tr>
	                					</thead>
	                					<tbody>
	                					<?php

	                					$jScript = md5(rand(1,9));
										 $newScript = md5(rand(1,9));
										 $Script = md5(rand(1,9));
										 $getUpdate = md5(rand(1,9));
									   	 $getDelete = md5(rand(1,9));

	                						$i=0;

	                						$select_acc = "SELECT * FROM tbl_applicants WHERE application_status = '2' AND removed = 'No' AND employer_id = '$account_id'";

	                						$run_select = mysqli_query($con,$select_acc);

	                						while($row=mysqli_fetch_array($run_select)){

							                    $applicant_id = $row['applicant_id'];
							                    $fname = $row['first_name'];
							                    $mname = $row['middle_name'];
							                    $lname = $row['last_name'];
							                    $applicant_code = $row['applicant_code'];
							                    $contact_number = $row['contact_number'];
							                    $email_address = $row['email_address'];
							                    $date_added = $row['date_created'];
							                    $name = ucfirst($fname) . " " . ucfirst($mname) . " " . ucfirst($lname);
							                    $i++;

           								 ?> 
	                					<tr>
	                  						<td><?php echo $i; ?></td>
	                  						<td><?php echo $applicant_code; ?></td>
	                  						<td><?php echo $name; ?></td>
	                  						<td><?php echo $contact_number; ?></td>
	                  						<td><?php echo $email_address; ?></td>
	                  						<td><?php echo $date_added; ?></td>
	                  						<td>
	                  							<a href="edit_processing_applicants.php?jScript=<?php echo $jScript; ?> && newScript=<?php echo $newScript; ?> && edit_processing_applicants=<?php echo $applicant_id; ?> && getUpdate=<?php echo $getUpdate; ?>" class="btn btn-default btn-small">
													View
												</a>
	                  						</td>
	                					</tr>
	                					<?php

	                						}

	                					?>
	                					</tbody>
	              					</table>
	            				</div>
	            				<!-- /.box-body -->
	          				</div>
	          				<!-- /.box -->
	        			</div>
	      			</div>
	    		</section>
	    		<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	

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
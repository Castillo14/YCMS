<?php

				if(!isset($_SESSION['username'])){

					echo "
						<script>
							window.open('../login.php','_self')
						</script>
					";

				}else{

			?>
			<section class="content-header">
	      			<h1>
	        			Processing Applicants
	      			</h1>
	      			<ol class="breadcrumb">
	        			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        			<li class="active">Processing Applicants</li>
	      			</ol>
	    		</section>
	    		<!-- Main content -->
	    		<section class="content">
	    			<a href="index.php?add_processing_applicant" class="btn btn-default">
	    				<i class="fa fa-plus"></i>
						Add
	    			</a>
	    			<a href="add_from_waiting.php" class="btn btn-default">
	    				<i class="fa fa-plus"></i>
						Add From Waiting
	    			</a>
					<a class="btn btn-default" href="../TCPDF/User/processing_applicants.php" target="_blank">
						<i class="fa fa-print"></i>
						Get PDF
					</a>
					<a class="btn btn-default" href="../PHPExcel/Examples/processing_applicants.php"
						<i class="fa fa-print"></i>
						Get Excel
					</a>
	    			<a href="index.php?processing_applicants" class="btn btn-default">
	    				<i class="fa fa-refresh"></i>
						Refresh
	    			</a>
					<div class="row">
	        			<div class="col-xs-12">
	          				<div class="box box-success">
	            				<div class="box-header">
	              					<h3 class="box-title"><i class="fa fa-black-tie"></i> Processing Applicants 
	              						<span>
	              							<a class="btn-sm btn-primary navbar-btn right" href="#"><!-- btn btn-primary navbar-btn right Starts -->
	            								<?php

	            								$total = "SELECT * FROM tbl_applicants WHERE application_status = '2' AND removed = 'No'";

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
	                  						<th>Applicant Name</th>
	                  						<th>Contact Number</th>
	                  						<th>Employer</th>
	                  						<th>Application Mode</th>
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

	                						$select_acc = "SELECT * FROM tbl_applicants WHERE application_status = '2' AND removed = 'No'";

	                						$run_select = mysqli_query($con,$select_acc);

	                						while($row=mysqli_fetch_array($run_select)){

							                    $applicant_id = $row['applicant_id'];
							                    $fname = $row['first_name'];
							                    $mname = $row['middle_name'];
							                    $lname = $row['last_name'];
							                    $contact_number = $row['contact_number'];
							                    $employer_id = $row['employer_id'];
							                    $jo_id = $row['jo_id'];
							                    $application_mode = $row['application_mode'];
							                    $name = ucfirst($fname) . " " . ucfirst($mname) . " " . ucfirst($lname);

							                    $e_option = "SELECT * FROM tbl_employers WHERE employer_id = '$employer_id' AND jo_id = '$jo_id'";
												$run_option = mysqli_query($con,$e_option);
												$row_option = mysqli_fetch_array($run_option);
												$fnamee = $row_option['first_name'];
							                    $mnamee = $row_option['middle_name'];
							                    $lnamee = $row_option['last_name'];
							                    $namee = ucfirst($fnamee) . " " . ucfirst($mnamee) . " " . ucfirst($lnamee);
							                    $i++;

           								 ?> 
	                					<tr>
	                  						<td><?php echo $i; ?></td>
	                  						<td><?php echo $name; ?></td>
	                  						<td><?php echo $contact_number; ?></td>
	                  						<td><?php echo $namee; ?></td>
	                  						<td><?php echo $application_mode; ?></td>
	                  						<td>
	                  							<a href="edit_processing_applicant.php?jScript=<?php echo $jScript; ?> && newScript=<?php echo $newScript; ?> && edit_processing_applicant=<?php echo $applicant_id; ?> && getUpdate=<?php echo $getUpdate; ?>" class="btn btn-default btn-small">
													<i class="fa fa-pencil"></i>
												</a>
												<a href="index.php?jScript=<?php echo $jScript; ?> && newScript=<?php echo $newScript; ?> && delete_processing_applicant=<?php echo $applicant_id; ?> && getDelete=<?php echo $getDelete; ?>" class="btn btn-default btn-small">
													<i class="fa fa-remove"></i>
												</a>
												<a href="index.php?jScript=<?php echo $jScript; ?> && newScript=<?php echo $newScript; ?> && employer_processing_applicant=<?php echo $applicant_id; ?> && getEmployer=<?php echo $getDelete; ?>" class="btn btn-default btn-small">
													<i class="fa fa-briefcase"></i>
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
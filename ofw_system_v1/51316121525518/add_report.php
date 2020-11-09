<?php

	    	include("../include/db.php");

	    	$jScript = md5(rand(1,9));
										$newScript = md5(rand(1,9));
										$getUpdate = md5(rand(1,9));
										$real = md5(rand(1,9));

	    		$salary = mysqli_real_escape_string($con,$_POST['salary']);
	    		$monthly = mysqli_real_escape_string($con,$_POST['monthly']);
	    		$applicant_id = mysqli_real_escape_string($con,$_POST['applicant_id']);
	    		$employer_id = mysqli_real_escape_string($con,$_POST['employer_id']);

	    			$run_add = mysqli_query($con,"INSERT INTO tbl_reports (applicant_id,employer_id,monthly_salary,monthly_report,date_created) VALUES ('$applicant_id','$employer_id','$salary','$monthly',now())");

	    		if($run_add){

	    			echo "
						<script>
							alert('Added')
						</script>
					";

					echo "
						<script>
							window.location.href='view_deployed_applicants.php?jScript=$jScript && newScript=$newScript && getUpdate=$getUpdate && view_deployed_applicants=$applicant_id && $real';
						</script>
					";

	    		}else{

	    			echo "
						<script>
							alert('Error Adding Flight')
						</script>
					";

					echo "
						<script>
							window.location.href='view_deployed_applicants.php?jScript=$jScript && newScript=$newScript && getUpdate=$getUpdate && view_deployed_applicants=$applicant_id && $real';
						</script>
					";

	    		}
	    		
	    ?>
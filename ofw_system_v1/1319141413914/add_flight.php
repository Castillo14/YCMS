<?php

	    	include("../include/db.php");

	    	$jScript = md5(rand(1,9));
										$newScript = md5(rand(1,9));
										$getUpdate = md5(rand(1,9));
										$real = md5(rand(1,9));

	    		$contact_person = mysqli_real_escape_string($con,$_POST['contact_person']);
	    		$contact_address = mysqli_real_escape_string($con,$_POST['contact_address']);
	    		$contact_number = mysqli_real_escape_string($con,$_POST['contact_number']);
	    		$details = mysqli_real_escape_string($con,$_POST['details']);
	    		$local = mysqli_real_escape_string($con,$_POST['lagency']);
	    		$abroad = mysqli_real_escape_string($con,$_POST['aagency']);
	    		$applicant_id = mysqli_real_escape_string($con,$_POST['applicant_id']);

	    			$run_add = mysqli_query($con,"INSERT INTO tbl_flights (applicant_id,contact_person,contact_address,contact_number,details,local_agency,abroad_agency) VALUES ('$applicant_id','$contact_person','$contact_address','$contact_number','$details','$local','$abroad')");

	    		if($run_add){

	    			echo "
						<script>
							alert('Added')
						</script>
					";

					echo "
						<script>
							window.location.href='edit_processing_applicant.php?jScript=$jScript && newScript=$newScript && getUpdate=$getUpdate && edit_processing_applicant=$applicant_id && $real';
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
							window.location.href='edit_processing_applicant.php?jScript=$jScript && newScript=$newScript && getUpdate=$getUpdate && edit_processing_applicant=$applicant_id && $real';
						</script>
					";

	    		}
	    		
	    ?>
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
	    		$flight_number = mysqli_real_escape_string($con,$_POST['flight_number']);
	    		$applicant_id = mysqli_real_escape_string($con,$_POST['applicant_id']);

	    	

	    			$run_update = mysqli_query($con,"UPDATE tbl_flights SET contact_person = '$contact_person', contact_address = '$contact_address', contact_number='$contact_number', details = '$details', local_agency = '$local', abroad_agency = '$abroad' WHERE flight_id = '$flight_number'");

	    		if($run_update){

	    			echo "
						<script>
							alert('Updated')
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
							alert('Error Updating')
						</script>
					";

					echo "
						<script>
							window.location.href='edit_processing_applicant.php?jScript=$jScript && newScript=$newScript && getUpdate=$getUpdate && edit_processing_applicant=$applicant_id && $real';
						</script>
					";

	    		}
	    		
	    ?>
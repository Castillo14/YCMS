<?php

	    	include("../include/db.php");

	    	$jScript = md5(rand(1,9));
										$newScript = md5(rand(1,9));
										$getUpdate = md5(rand(1,9));
										$real = md5(rand(1,9));

	    		$flight_number = $_POST['flight_number'];

	    		$applicant_id = $_POST['applicant_id'];

	    		$delete_flight = "DELETE FROM tbl_flights WHERE flight_id = '$flight_number'";

	    		$run_delete = mysqli_query($con,$delete_flight);

	    		if($run_delete){

	    			echo "
						<script>
							alert('Deleted')
						</script>
					";

					echo "
						<script>
							window.location.href='edit_processing_applicant.php?jScript=$jScript && newScript=$newScript && getUpdate=$getUpdate && edit_processing_applicant=$applicant_id && $real';
						</script>
					";

	    		}

	    	

	    ?>
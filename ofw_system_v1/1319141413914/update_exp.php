<?php

	    	include("../include/db.php");

	    	$jScript = md5(rand(1,9));
										$newScript = md5(rand(1,9));
										$getUpdate = md5(rand(1,9));
										$real = md5(rand(1,9));

	    		$sub_id = $_POST['submitted_id'];

	    		$applicant_id = $_POST['applicant_id'];

	    		$payment_status = $_POST['payment_status'];
	    		$amount = $_POST['amount'];

	    		$document_remarks = $_POST['document_remarks'];

	    		$update_docu = "UPDATE tbl_submitted_documents SET payment_status = '$payment_status', document_remarks = '$document_remarks', amount = '$amount' WHERE submitted_id = '$sub_id'";

	    		$run_update = mysqli_query($con,$update_docu);

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

	    		}

	    	

	    ?>
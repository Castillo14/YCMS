<?php

	    	include("../include/db.php");


$jScript = md5(rand(1,9));
										$newScript = md5(rand(1,9));
										$getUpdate = md5(rand(1,9));
										$real = md5(rand(1,9));

	    		$sub_id = $_POST['submitted_id'];

	    		$applicant_id = $_POST['applicant_id'];

	    		$delete_docu = "DELETE FROM tbl_submitted_documents WHERE submitted_id = '$sub_id'";

	    		$run_delete = mysqli_query($con,$delete_docu);

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
<?php

	    	include("../include/db.php");

	    	$jScript = md5(rand(1,9));
			 $newScript = md5(rand(1,9));
			 $Script = md5(rand(1,9));
			 $getUpdate = md5(rand(1,9));
		   	 $getDelete = md5(rand(1,9));


	    	if(empty($_POST['other'])){


	    		$date = $_POST['bio_date'];

	    		$applicant_id = $_POST['applicant_id'];

	    		$run_update = mysqli_query($con,"update tbl_applicants set biometric_sched = '$date' where applicant_id = '$applicant_id'");

	    		if($run_update){

	    			echo "
						<script>
							alert('Updated')
						</script>
					";

					echo "
						<script>
							window.location.href='edit_processing_applicant.php?jScript=$jScript && newScript=$newScript && view_applicnt=$Script && edit_processing_applicant=$applicant_id && getView=$getUpdate';
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
							window.location.href='edit_processing_applicant.php?jScript=$jScript && newScript=$newScript && view_applicnt=$Script && edit_processing_applicant=$applicant_id && getView=$getUpdate';
						</script>
					";

	    		}

	    	}else{

	    		$other = $_POST['other'];

	    		$applicant_idd = $_POST['applicant_id'];


	    		$run_updatee = mysqli_query($con,"update tbl_applicants set biometric_sched = '$other' where applicant_id = '$applicant_idd'");

	    		if($run_updatee){

	    			echo "
						<script>
							alert('Updated')
						</script>
					";

					echo "
						<script>
							window.location.href='edit_processing_applicant.php?jScript=$jScript && newScript=$newScript && view_applicnt=$Script && edit_processing_applicant=$applicant_idd && getView=$getUpdate';
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
							window.location.href='edit_processing_applicant.php?jScript=$jScript && newScript=$newScript && view_applicnt=$Script && edit_processing_applicant=$applicant_idd && getView=$getUpdate';
						</script>
					";

	    		}


	    	}

	    	

	    			
	    		
	    ?>
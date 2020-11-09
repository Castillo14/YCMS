<?php

	    	include("../include/db.php");


	    	 $jScript = md5(rand(1,9));
			 $newScript = md5(rand(1,9));
			 $Script = md5(rand(1,9));
			 $getUpdate = md5(rand(1,9));
		   	 $getDelete = md5(rand(1,9));


	    		$arr = $_POST['arrival'];
	    		$ss = $_POST['signed'];

	    		$applicant_id = $_POST['applicant_id'];

	    		$run_update = mysqli_query($con,"update tbl_applicants set date_signed = '$ss', date_arrival = '$arr' where applicant_id = '$applicant_id'");

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

	    	
	    	

	    			
	    		
	    ?>
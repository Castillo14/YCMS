<?php

	    	include("../include/db.php");

	    	

	    	

	    		$applicant_id = mysqli_real_escape_string($con,$_POST['applicant_identify']);

	    		$add_process = "UPDATE tbl_applicants set application_status = '2' WHERE applicant_id = '$applicant_id'";

	    		$run_add = mysqli_query($con,$add_process);

	    		if($run_add){

	    			echo "
						<script>
							alert('Added')
						</script>
					";

					echo "
						<script>
							window.open('index.php?processing_applicants','_self')
						</script>
					";

	    		}else{

	    			echo "
						<script>
							alert(Error Adding Applicant')
						</script>
					";

					echo "
						<script>
							window.open('add_from_waiting.php','_self')
						</script>
					";

	    		}

	    	

	    ?>
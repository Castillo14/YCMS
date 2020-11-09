<?php

	    	include("../include/db.php");

$jScript = md5(rand(1,9));
										$newScript = md5(rand(1,9));
										$getUpdate = md5(rand(1,9));
										$real = md5(rand(1,9));

	    	$sub_id = $_POST['dn'];

	    		$applicant_id = $_POST['applicant_id'];
	    		$price = $_POST['price'];

	    		$file_name = $_FILES['file_name']['name'];

	    		$temp_name = $_FILES['file_name']['tmp_name'];

	    		move_uploaded_file($temp_name, "../submitted_documents/$file_name");

	    		$run_add_docc = mysqli_query($con,"INSERT INTO tbl_submitted_documents (amount,document_id,applicant_id,remarks,payment_status,document_remarks,file_name,date_submit) values ('$price','$sub_id','$applicant_id','Submitted','Unpaid','Not Checked','$file_name',now())");

        if($run_add_docc){

	    			echo "
						<script>
							alert('Document Added')
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
							alert('Error Addding Document')
						</script>
					";

					echo "
						<script>
							window.open('edit_processing_applicant.php?jScript=<?php echo $jScript; ?> && newScript=<?php echo $newScript; ?> && getUpdate=<?php echo $getUpdate; ?> && edit_processing_applicant=$applicant_id && <?php echo $real; ?>','_self')
						</script>
					";

	    		}
        
    
   

	    	

	    ?>
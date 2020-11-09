<?php

				if(!isset($_SESSION['username'])){

					echo "
						<script>
							window.open('../login.php','_self')
						</script>
					";

				}else{

			?>
			<?php
				if(isset($_GET['employer_processing_applicant'])){
					$edit_id = $_GET['employer_processing_applicant'];
					$edit_waiting = "SELECT * FROM tbl_applicants WHERE applicant_id = '$edit_id' AND application_status = '2' AND removed = 'No'";
					$run_edit = mysqli_query($con,$edit_waiting);
					$row_edit = mysqli_fetch_array($run_edit);
					$e_id = $row_edit['applicant_id'];
					$e_fname = $row_edit['first_name'];
					$e_mname = $row_edit['middle_name'];
					$e_lname = $row_edit['last_name'];
                    $e_applicant = ucfirst($e_fname) . " " . ucfirst($e_mname) . " " . ucfirst($e_lname);
                    $e_jo_id = $row_edit['jo_id'];
					$e_option = "SELECT * FROM tbl_job_order WHERE jo_id = '$e_jo_id'";
					$run_option = mysqli_query($con,$e_option);
					$row_option = mysqli_fetch_array($run_option);
					$opt_name = $row_option['jo_name'];
				}
			?>
			<div class="row"><!-- 1 row Starts -->
    <div class="col-lg-12"><!-- col-lg-12 Starts -->
        <ol class="breadcrumb"><!-- breadcrumb Starts -->
            <li>
                <i class="fa fa-black-tie"></i>
                Processing Applicants / Edit Applicant Employer
            </li>
        </ol><!-- breadcrumb Ends -->
    </div><!-- col-lg-12 Ends -->
</div><!-- 1 row Ends -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><!-- panel-title Starts -->
                    <i class="fa fa-pencil fa-fw"></i>
                    Edit Applicant Employer
                </h3><!-- panel-title Ends -->
            </div>
            <div class="panel-body">
                <form action="" method="post" class="form-horizontal"><!-- form Starts -->
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="first_name">
                                Applicant Name
                            </label>
                            <div class="col-sm-5">
                                <input type="text" disabled class="form-control" name="applicant_name" value="<?php echo $e_applicant; ?>">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="first_name">
                                Job Order
                            </label>
                            <div class="col-sm-5">
                                <input type="text" disabled class="form-control" name="job_order" value="<?php echo $opt_name; ?>">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="employer">
                                Employer
                            </label>
                            <div class="col-sm-5">
                                <select name="employer" class="form-control">
                                    <option selected value="0">
                                        -- Select Your Employer --
                                    </option>
                                    <?php

                                    $get_agent = "SELECT * FROM tbl_employers WHERE jo_id = '$e_jo_id' AND removed = 'No' AND jo_id != '0'";

                                    $run_agent = mysqli_query($con,$get_agent);

                                    while($row_agent = mysqli_fetch_array($run_agent)){

                                        $employer_id = $row_agent['employer_id'];
                                        $fnamee = $row_agent['first_name'];
                                        $mnamee = $row_agent['middle_name'];
                                        $lnamee = $row_agent['last_name'];
                                        $full_namee = ucfirst($fnamee) . " " . ucfirst($mnamee) . " " . ucfirst($lnamee);

                                    ?>
                                    <option name="employer" value="<?php echo $employer_id; ?>">
                                        <?php echo $full_namee; ?>
                                    </option>
                                    <?php

                                        }

                                    ?>
                                </select>
                            </div>  
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-primary">
                             Update
                        </button>
                        <a href="index.php?processing_applicants" class="btn btn-danger">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="application/javascript">

    function isNumericKey(evt){

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;

        return true;
    }

     function isAlphaKey(evt){

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return true;

        return false;
    }

    </script>
    <?php
    	if(isset($_POST['submit'])){
            $employer_ = mysqli_real_escape_string($con,$_POST['employer']);
            $update_applicant = "UPDATE tbl_applicants SET employer_id = '$employer_' WHERE applicant_id = '$e_id'";
            $run_update_applicant = mysqli_query($con,$update_applicant);
	    		if($run_update_applicant){

                    echo "
                        <script>
                            alert('Applicant Has Been Updated')
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
                            alert('Error Updating Applicants')
                        </script>
                    ";

                }
    	}
    ?>
			<?php
				}
			?>
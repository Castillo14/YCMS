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

            include("../../include/db.php");

             ?>
<?php
	if(isset($_GET['rescue_details'])){
		$edit_id = $_GET['rescue_details'];
		$edit_accnt = "SELECT * FROM tbl_rescue WHERE rescue_id = '$edit_id'";
		$run_edit = mysqli_query($con,$edit_accnt);
		$row_edit = mysqli_fetch_array($run_edit);
		$e_id = $row_edit['rescue_id'];
		$e_fullname = $row_edit['full_name'];
		$e_email_address = $row_edit['email_address'];
		$e_contact_number = $row_edit['contact_number'];
		$e_location = $row_edit['location'];
        $e_complain = $row_edit['complain'];
        $e_agency = $row_edit['agency_name'];
        $e_employer = $row_edit['employer_number'];
		$e_code = $row_edit['applicant_code'];
        $e_image1 = $row_edit['image1'];
        $e_image2 = $row_edit['image2'];
        $e_image3 = $row_edit['image3'];
        $e_date = $row_edit['date_created'];
        $e_actual = $row_edit['actual_location'];
        $e_long = $row_edit['a_longitude'];
		$e_lat = $row_edit['a_latitude'];
	}
?>
<div class="row"><!-- 1 row Starts -->
    <div class="col-lg-12"><!-- col-lg-12 Starts -->
        <ol class="breadcrumb"><!-- breadcrumb Starts -->
            <li>
                <i class="fa fa-users"></i>
                Rescue Mission / View Details
            </li>
        </ol><!-- breadcrumb Ends -->
    </div><!-- col-lg-12 Ends -->
</div><!-- 1 row Ends -->
<div class="row"><!-- 2 row Starts -->
    <div class="col-lg-12"><!-- col-lg-12 Starts -->
        <div class="panel panel-default"><!-- panel panel-default Starts -->
            <div class="panel-heading"><!-- panel-heading Starts -->
                <h3 class="panel-title"><!-- panel-title Starts -->
                    <i class="fa fa-pencil fa-fw"></i>
                    View Details
                </h3><!-- panel-title Ends -->
            </div><!-- panel-heading Ends -->
            <div class="panel-body"><!-- panel-body Starts -->
                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Date Submit
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="date_created" disabled class="form-control" value="<?php echo $e_date; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Applicant Code
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="code_appl" disabled class="form-control" value="<?php echo $e_code; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Full Name
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="full_name" disabled class="form-control" value="<?php echo $e_fullname; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Agency Name
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="agency" disabled class="form-control" value="<?php echo $e_agency; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Employer Number / National ID
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="employer" disabled class="form-control" value="<?php echo $e_employer; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                    
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Email Address
                        </label>
                        <div class="col-md-6">
                            <input type="email" name="email_address" disabled class="form-control" maxlength="224" minlength="5" value="<?php echo $e_email_address; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Contact Number
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="contact_number" class="form-control" disabled value="<?php echo $e_contact_number; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->

						<label class="col-md-3 control-label">

							Location

						</label>

						<div class="col-md-6">

							<textarea class="form-control" rows="4" disabled name="location" maxlength="224" minlength="5"><?php echo $e_location; ?></textarea>

						</div>

					</div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Actual location
                        </label>
                        <div class="col-md-6">
                             <a href="https://www.latlong.net/c/?lat=<?php echo $e_lat; ?>&long=<?php echo $e_long; ?>" target="_blank">(Click To View Location)</a>
                        </div>
                    </div><!-- form-group Ends -->
                    
                    <div class="form-group"><!-- form-group Starts -->

                        <label class="col-md-3 control-label">

                            Complain

                        </label>

                        <div class="col-md-6">

                            <textarea class="form-control" rows="4" disabled name="location" maxlength="224" minlength="5"><?php echo $e_complain; ?></textarea>

                        </div>

                    </div><!-- form-group Ends -->
					<div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            File 1
                        </label>
                        <div class="col-md-6">
                            <a download="<?php echo $e_image1; ?>" href="../../rescue_folder/<?php echo $e_image1; ?>"><?php echo $e_image1; ?></a>
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            File 2
                        </label>
                        <div class="col-md-6">
                            <a download="<?php echo $e_image2; ?>" href="../../rescue_folder/<?php echo $e_image2; ?>"><?php echo $e_image2; ?></a>
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            File 3
                        </label>
                        <div class="col-md-6">
                            <a download="<?php echo $e_image3; ?>" href="../../rescue_folder/<?php echo $e_image3; ?>"><?php echo $e_image3; ?></a>
                        </div>
                    </div><!-- form-group Ends -->
               

                       

                
                  
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            
                        </label>
                        <div class="col-md-6">
                           
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            
                        </label>
                        <div class="col-md-6">
                            
                           <a href="index.php?rescue_mission" class="btn btn-danger">
                            Back
                        </a>
                        </div>
                    </div><!-- form-group Ends -->
                </form><!-- form-horizontal Ends -->
            </div><!-- panel-body Ends -->
        </div><!-- panel panel-default Ends -->
    </div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAgwg0kMA7uXVPKHUDzjfOWbnuVckj1gg"></script>

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
	}
?>
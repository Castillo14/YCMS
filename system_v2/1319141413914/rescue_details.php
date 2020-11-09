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
		$edit_accnt = "SELECT * FROM tbl_tabang WHERE tabang_id = '$edit_id'";
		$run_edit = mysqli_query($con,$edit_accnt);
		$row_edit = mysqli_fetch_array($run_edit);
		$e_id = $row_edit['tabang_id'];
        $e_first_name = $row_edit['first_name'];
        $e_middle_name = $row_edit['middle_name'];
        $e_last_name = $row_edit['last_name'];
        $gender = $row_edit['gender'];
        $passport = $row_edit['passport'];
        $iqama = $row_edit['iqama'];
        $e_email_address = $row_edit['email_address'];
		$occupation = $row_edit['occupation'];
        $e_contact_number = $row_edit['contact_number'];
		$e_contact_number2 = $row_edit['contact_number2'];
        $e_location = $row_edit['location_ksa'];
        $employer_name = $row_edit['employer_name'];
        $employer_contact = $row_edit['employer_contact'];
        $saudi_agency = $row_edit['saudi_agency'];
		$agency = $row_edit['agency'];
        $e_complain = $row_edit['complain'];
        $e_image1 = $row_edit['image1'];
        $e_image2 = $row_edit['image2'];
        $e_image3 = $row_edit['image3'];
        $e_date = $row_edit['date_created'];
        $e_long = $row_edit['actual_longitude'];
		$e_lat = $row_edit['actual_langitude'];
         $e_fullname = ucfirst($e_first_name) . " " . ucfirst($e_middle_name) . " " . ucfirst($e_last_name);

	}
?>
<div class="row"><!-- 1 row Starts -->
    <div class="col-lg-12"><!-- col-lg-12 Starts -->
        <ol class="breadcrumb"><!-- breadcrumb Starts -->
            <li>
                <i class="fa fa-users"></i>
                Tabang / View Details
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
                            Full Name
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="full_name" disabled class="form-control" value="<?php echo $e_fullname; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                     <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Gender
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="gender" disabled class="form-control" value="<?php echo $gender; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                     <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Passport
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="passport" disabled class="form-control" value="<?php echo $passport; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                     <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Saudi Residence ID (Iqama)
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="iqama" disabled class="form-control" value="<?php echo $iqama; ?>">
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
                            OCcupation
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="occupation" disabled class="form-control" value="<?php echo $occupation; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Personal Telephone Number
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="contact_number" class="form-control" disabled value="<?php echo $e_contact_number; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Other Telephone Number
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="contact_number2" class="form-control" disabled value="<?php echo $e_contact_number2; ?>">
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
                            Employer Name
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="employer" class="form-control" disabled value="<?php echo $employer_name; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Employer Telephone Number
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="employer_contact" class="form-control" disabled value="<?php echo $employer_contact; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                           Saudi Recruitment Agency
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="saudi_agency" class="form-control" disabled value="<?php echo $saudi_agency; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                     <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                           Philippine Recruitment Agency
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="agency" class="form-control" disabled value="<?php echo $agency; ?>">
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
                            
                           <a href="index.php?tabang" class="btn btn-danger">
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
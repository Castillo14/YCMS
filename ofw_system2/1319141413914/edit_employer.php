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
	if(isset($_GET['edit_employer'])){
		$edit_id = $_GET['edit_employer'];
		$edit_emp = "SELECT * FROM tbl_employers WHERE employer_id = '$edit_id' AND removed = 'No'";
		$run_edit = mysqli_query($con,$edit_emp);
		$row_edit = mysqli_fetch_array($run_edit);
		$e_id = $row_edit['employer_id'];
		$e_employer_number = $row_edit['employer_number'];
		$e_national_id = $row_edit['national_id'];
		$e_fname = $row_edit['first_name'];
		$e_mname = $row_edit['middle_name'];
		$e_lname = $row_edit['last_name'];
		$e_aname = $row_edit['arabic_name'];
		$e_email_address = $row_edit['email_address'];
		$e_contact_number = $row_edit['contact_number'];
		$e_username = $row_edit['employer_username'];
		$e_password = $row_edit['employer_password'];
		$e_company_address = $row_edit['company_address'];
		$e_company_name = $row_edit['company_name'];
		$e_image = $row_edit['image'];
	}
?>
<div class="row"><!-- 1 row Starts -->
    <div class="col-lg-12"><!-- col-lg-12 Starts -->
        <ol class="breadcrumb"><!-- breadcrumb Starts -->
            <li>
                <i class="fa fa-briefcase"></i>
                Employers / Edit Employer
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
                    Edit Employer
                </h3><!-- panel-title Ends -->
            </div><!-- panel-heading Ends -->
            <div class="panel-body"><!-- panel-body Starts -->
                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Employer ID Number
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="employer_number" class="form-control" required maxlength="24" minlength="6" value="<?php echo $e_employer_number; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            National ID
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="national_id" class="form-control" maxlength="24" minlength="6" value="<?php echo $e_national_id; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            First Name
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="first_name" class="form-control" required maxlength="74" minlength="2" onkeypress='return isAlphaKey(event)' value="<?php echo $e_fname; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Middle Name
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="middle_name" class="form-control" maxlength="74" minlength="2" onkeypress='return isAlphaKey(event)' value="<?php echo $e_mname; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Last Name
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="last_name" class="form-control" required maxlength="74" minlength="2" onkeypress='return isAlphaKey(event)' value="<?php echo $e_lname; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Arabic Name
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="arabic_name" class="form-control" maxlength="224" minlength="2" value="<?php echo $e_aname; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Contact Number
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="contact_number" class="form-control" required onkeypress='return isNumericKey(event)' maxlength="15" minlength="5" value="<?php echo $e_contact_number; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Email Address
                        </label>
                        <div class="col-md-6">
                            <input type="email" name="email_address" class="form-control" maxlength="224" minlength="5" value="<?php echo $e_email_address; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Image
                        </label>
                        <div class="col-md-6">
                            <input type="file" name="image" class="form-control" ><br>
                            <img src="../employer_images/<?php echo $e_image; ?>" width="70" height="70">
                        </div>
                    </div><!-- form-group Ends -->
                     <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Company Name
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="company_name" class="form-control" required maxlength="224" minlength="5" value="<?php echo $e_company_name; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->

						<label class="col-md-3 control-label">

							Company Address

						</label>

						<div class="col-md-6">

							<textarea class="form-control" rows="4" required name="company_address" maxlength="224" minlength="5"><?php echo $e_company_address; ?></textarea>

						</div>

					</div><!-- form-group Ends -->
					
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Username
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="username" class="form-control" required maxlength="15" minlength="5" value="<?php echo $e_username; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Password
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="password" class="form-control" required maxlength="15" minlength="5" value="<?php echo $e_password; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            
                        </label>
                        <div class="col-md-6">
                            <input type="submit" name="submit" value="Update Employer" class="btn btn-primary form-control">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            
                        </label>
                        <div class="col-md-6">
                            <a href="index.php?employers" class="btn btn-danger form-control">
                                Cancel
                            </a>
                        </div>
                    </div><!-- form-group Ends -->
                </form><!-- form-horizontal Ends -->
            </div><!-- panel-body Ends -->
        </div><!-- panel panel-default Ends -->
    </div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->
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
    		$employer_number = mysqli_real_escape_string($con,$_POST['employer_number']);
            $national_id = mysqli_real_escape_string($con,$_POST['national_id']);
    		$first_name = mysqli_real_escape_string($con,$_POST['first_name']);
    		$middle_name = mysqli_real_escape_string($con,$_POST['middle_name']);
            $last_name = mysqli_real_escape_string($con,$_POST['last_name']);
    		$arabic_name = mysqli_real_escape_string($con,$_POST['arabic_name']);
    		$email_address = mysqli_real_escape_string($con,$_POST['email_address']);
    		$contact_number = mysqli_real_escape_string($con,$_POST['contact_number']);
            $company_address = mysqli_real_escape_string($con,$_POST['company_address']);
    		$company_name = mysqli_real_escape_string($con,$_POST['company_name']);
    		$username = mysqli_real_escape_string($con,$_POST['username']);
    		$password = mysqli_real_escape_string($con,$_POST['password']);
    		$image = $_FILES['image']['name'];
			$temp_image = $_FILES['image']['tmp_name'];
			move_uploaded_file($temp_image, "../employer_images/$image");

			$update_employer = "UPDATE tbl_employers SET employer_number = '$employer_number', national_id = '$national_id', first_name = '$first_name', middle_name = '$middle_name', last_name = '$last_name', arabic_name = '$arabic_name', contact_number = '$contact_number', email_address = '$email_address', employer_password = '$password', employer_username = '$username', image = '$image', company_name = '$company_name', company_address = '$company_address' WHERE employer_id = '$e_id'";
			$run_update_employer = mysqli_query($con,$update_employer);
	    		if($run_update_employer){

                    echo "
                        <script>
                            alert('Employer Has Been Updated')
                        </script>
                    ";

                    echo "
                        <script>
                            window.open('index.php?employers','_self')
                        </script>
                    ";

                }else{

                    echo "
                        <script>
                            alert('Error Updating Employer')
                        </script>
                    ";

                }
    	}
    ?>
<?php
	}
?>
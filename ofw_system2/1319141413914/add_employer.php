<?php
	if(!isset($_SESSION['username'])){
		echo "
            <script>
                window.open('../login.php','_self')
            </script>
        ";
	}else{
?>
<div class="row"><!-- 1 row Starts -->
    <div class="col-lg-12"><!-- col-lg-12 Starts -->
        <ol class="breadcrumb"><!-- breadcrumb Starts -->
            <li>
                <i class="fa fa-briefcase"></i>
                Employers / Add Employer
            </li>
        </ol><!-- breadcrumb Ends -->
    </div><!-- col-lg-12 Ends -->
</div><!-- 1 row Ends -->
<div class="row"><!-- 2 row Starts -->
    <div class="col-lg-12"><!-- col-lg-12 Starts -->
        <div class="panel panel-default"><!-- panel panel-default Starts -->
            <div class="panel-heading"><!-- panel-heading Starts -->
                <h3 class="panel-title"><!-- panel-title Starts -->
                    <i class="fa fa-plus fa-fw"></i>
                    Add Employer
                </h3><!-- panel-title Ends -->
            </div><!-- panel-heading Ends -->
            <div class="panel-body"><!-- panel-body Starts -->
                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Employer ID Number
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="employer_number" class="form-control" required maxlength="24" minlength="6">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            National ID
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="national_id" class="form-control" maxlength="24" minlength="6">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            First Name
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="first_name" class="form-control" required maxlength="74" minlength="2" onkeypress='return isAlphaKey(event)'>
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Middle Name
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="middle_name" class="form-control" maxlength="74" minlength="2" onkeypress='return isAlphaKey(event)'>
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Last Name
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="last_name" class="form-control" required maxlength="74" minlength="2" onkeypress='return isAlphaKey(event)'>
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Arabic Name
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="arabic_name" class="form-control" maxlength="224" minlength="2">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Contact Number
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="contact_number" class="form-control" required onkeypress='return isNumericKey(event)' maxlength="15" minlength="5">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Email Address
                        </label>
                        <div class="col-md-6">
                            <input type="email" name="email_address" class="form-control" maxlength="224" minlength="5">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Image
                        </label>
                        <div class="col-md-6">
                            <input type="file" name="image" class="form-control" >
                        </div>
                    </div><!-- form-group Ends -->
                     <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Company Name
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="company_name" class="form-control" required maxlength="224" minlength="5">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->

						<label class="col-md-3 control-label">

							Company Address

						</label>

						<div class="col-md-6">

							<textarea class="form-control" rows="4" required name="company_address" maxlength="224" minlength="5"></textarea>

						</div>

					</div><!-- form-group Ends -->
					
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Username
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="username" class="form-control" required maxlength="15" minlength="5">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Password
                        </label>
                        <div class="col-md-6">
                            <input type="password" name="password" class="form-control" required maxlength="15" minlength="5">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            
                        </label>
                        <div class="col-md-6">
                            <input type="submit" name="submit" value="Insert Employer" class="btn btn-primary form-control">
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
			$insert_employer = "INSERT INTO tbl_employers (employer_number,national_id,first_name,middle_name,last_name,arabic_name,email_address,contact_number,employer_username,employer_password,company_address,company_name,image,created_by,date_created,removed,date_removed,removed_by) VALUES ('$employer_number','$national_id','$first_name','$middle_name','$last_name','$arabic_name','$email_address','$contact_number','$username','$password','$company_address','$company_name','$image','$creator',now(),'No','0000-00-00','')";
			$run_insert_employer = mysqli_query($con,$insert_employer);

                if($run_insert_employer){

                    echo "
                        <script>
                            alert('New Employer Has Been Inserted')
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
                            alert('Error Inserting Employer')
                        </script>
                    ";

                }

    	}
    ?>
<?php
	}
?>
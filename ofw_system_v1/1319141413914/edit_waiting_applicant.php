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
				if(isset($_GET['edit_waiting_applicant'])){
					$edit_id = $_GET['edit_waiting_applicant'];
					$edit_waiting = "SELECT * FROM tbl_applicants WHERE applicant_id = '$edit_id' AND application_status = '1' AND removed = 'No'";
					$run_edit = mysqli_query($con,$edit_waiting);
					$row_edit = mysqli_fetch_array($run_edit);
					$e_id = $row_edit['applicant_id'];
					$e_position1 = $row_edit['position1'];
					$e_position2 = $row_edit['position2'];
                    $e_position3 = $row_edit['position3'];
					$e_fname = $row_edit['first_name'];
					$e_mname = $row_edit['middle_name'];
					$e_lname = $row_edit['last_name'];
					$e_age = $row_edit['age'];
					$e_gender = $row_edit['gender'];
					$e_contact_number = $row_edit['contact_number'];
					$e_email_address = $row_edit['email_address'];
					$e_address = $row_edit['address'];
					$e_birth_place = $row_edit['birth_place'];
					$e_birth_date = $row_edit['birth_date'];
					$e_civil_status = $row_edit['civil_status'];
					$e_height = $row_edit['height'];
					$e_weight = $row_edit['weight'];
					$e_blood_type = $row_edit['blood_type'];
					$e_religion = $row_edit['religion'];
					$e_language_spoken = $row_edit['language_spoken'];
					$e_father_name = $row_edit['father_name'];
					$e_mother_name = $row_edit['mother_name'];
					$e_passport_number = $row_edit['passport_number'];
					$e_date_issue = $row_edit['date_issue'];
					$e_place_issue = $row_edit['place_issue'];
					$e_place_issue = $row_edit['place_issue'];
					$e_employer_id = $row_edit['employer_id'];
					$e_option = "SELECT * FROM tbl_employers WHERE employer_id = '$e_employer_id'";
					$run_option = mysqli_query($con,$e_option);
					$row_option = mysqli_fetch_array($run_option);
					$opt_fname = $row_option['first_name'];
					$opt_mname = $row_option['middle_name'];
					$opt_lname = $row_option['last_name'];
					$opt_company_name = $row_option['company_name'];
					$opt_full_name = ucfirst($opt_fname) . " " . ucfirst($opt_mname) . " " . ucfirst($opt_lname);
                    $opt_option = $opt_company_name . " - " . $opt_full_name;
				}
			?>
			<div class="row"><!-- 1 row Starts -->
    <div class="col-lg-12"><!-- col-lg-12 Starts -->
        <ol class="breadcrumb"><!-- breadcrumb Starts -->
            <li>
                <i class="fa fa-users"></i>
                Waiting Applicants / Edit Applicant
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
                    Edit Applicant
                </h3><!-- panel-title Ends -->
            </div>
            <div class="panel-body">
                <form action="" method="post" class="form-horizontal"><!-- form Starts -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="position1">
                                Position 1 <br> وقف 1
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="position1" maxlength="74" minlength="2" onkeypress='return isAlphaKey(event)' required value="<?php echo $e_position1; ?>">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="position2">
                                Position 2 <br> وقف 2
                            </label>
                            <div class="col-sm-8">
                                 <input type="text" class="form-control" name="position2" maxlength="74" minlength="2" onkeypress='return isAlphaKey(event)' value="<?php echo $e_position2; ?>">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="position3">
                                Position 3 <br> وقف 3
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="position3" maxlength="74" minlength="2" onkeypress='return isAlphaKey(event)' value="<?php echo $e_position3; ?>">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="first_name">
                                First Name <br> الأسم الأول
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="first_name" maxlength="74" minlength="2" onkeypress='return isAlphaKey(event)' required value="<?php echo $e_fname; ?>">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4"> 
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="middle_name">
                                Middle Name <br> الأسم الأوسط
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="middle_name" maxlength="74" minlength="2" onkeypress='return isAlphaKey(event)' value="<?php echo $e_mname; ?>">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="last_name">
                                Last Name <br> أسم العائلة
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="last_name" maxlength="74" minlength="2" onkeypress='return isAlphaKey(event)' required value="<?php echo $e_lname; ?>">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="age">
                                Age <br> عمر
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="age" required onkeypress='return isNumericKey(event)' maxlength="2" minlength="2" value="<?php echo $e_age; ?>">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="gender">
                                Gender <br> جنس
                            </label>
                            <div class="col-sm-8">
                                <select name="gender" class="form-control" required>
                                	<option name="gender" selected value="<?php echo $e_gender; ?>" hidden>
                                		 <?php echo $e_gender; ?>
                                	</option>
                                    <option name="gender" value="Male">
                                        Male
                                    </option>
                                    <option name="gender" value="Female">
                                        Female
                                    </option>
                                </select>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="contact_number">
                                Contact Number <br> رقم الاتصال
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="contact_number" required onkeypress='return isNumericKey(event)' maxlength="15" minlength="5" value="<?php echo $e_contact_number; ?>">
                            </div>  
                        </div>
                    </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="email_address">
                                Email Address <br> أيميل
                            </label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" name="email_address" maxlength="224" minlength="5" value="<?php echo $e_email_address; ?>">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="address">
                                Address <br> عنوان المنزل
                            </label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="address" rows="3" maxlength="224" minlength="5" required><?php echo $e_address; ?></textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="birth_place">
                                Birth Place <br> مكان الميلاد
                            </label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="birth_place" rows="3" maxlength="224" minlength="5" required><?php echo $e_birth_place; ?></textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="birth_date">
                                Birth Date <br> تاريخ الميلاد
                            </label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="birth_date" required value="<?php echo $e_birth_date; ?>">
                            </div>  
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="civil_status">
                                Civil Status <br> رقم الأحوال المدنية
                            </label>
                            <div class="col-sm-8">
                                <select name="civil_status" class="form-control">
                                	<option name="civil_status" selected value="<?php echo $e_civil_status; ?>" hidden>
                                		 <?php echo $e_civil_status; ?>
                                	</option>
                                    <option name="civil_status" value="Single">
                                        Single
                                    </option>
                                    <option name="civil_status" value="Married">
                                        Married
                                    </option>
                                    <option name="civil_status" value="Divorced">
                                        Divorced
                                    </option>
                                    <option name="civil_status" value="Widowed">
                                        Widowed
                                    </option>
                                </select>
                            </div>    
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="height">
                                Height <br> ارتفاع
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="height" minlength="2" maxlength="14" value="<?php echo $e_height; ?>">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="weight">
                                Weight <br> وزن
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="weight" minlength="2" maxlength="14" value="<?php echo $e_weight; ?>">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="blood_type">
                                Blood Type <br> فصيلة الدم
                            </label>
                            <div class="col-sm-8">
                                <select name="blood_type" class="form-control">
                                	<option name="blood_type" selected value="<?php echo $e_blood_type; ?>" hidden>
                                		 <?php echo $e_blood_type; ?>
                                	</option>
                                	<option name="blood_type" value="">
                                		
                                	</option>
                                    <option name="blood_type" value="A+">
                                        A+
                                    </option>
                                    <option name="blood_type" value="A-">
                                        A-
                                    </option>
                                    <option name="blood_type" value="B+">
                                        B+
                                    </option>
                                    <option name="blood_type" value="B-">
                                        B-
                                    </option>
                                    <option name="blood_type" value="AB+">
                                        AB+
                                    </option>
                                    <option name="blood_type" value="AB-">
                                        AB-
                                    </option>
                                    <option name="blood_type" value="O+">
                                        O+
                                    </option>
                                    <option name="blood_type" value="O-">
                                        O-
                                    </option>
                                </select>
                            </div>    
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="religion">
                                Religion <br> الدين
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="religion" minlength="2" maxlength="74" value="<?php echo $e_religion; ?>">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-6" for="language_spoken">
                                Language Spoken <br> اللغة المحكية
                            </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="language_spoken" minlength="3" maxlength="224" required value="<?php echo $e_language_spoken; ?>">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="father_name">
                                Father Name <br> أسم الاب
                            </label>
                            <div class="col-sm-8">
                                 <input type="text" class="form-control" name="father_name" minlength="3" maxlength="224" value="<?php echo $e_father_name; ?>">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="mother_name">
                                Mother Name <br> أسم الأم
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="mother_name" minlength="3" maxlength="224" value="<?php echo $e_mother_name; ?>">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="passport_number">
                                Passport Number <br> رقم الجواز
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="passport_number" maxlength="9" minlength="9" value="<?php echo $e_passport_number; ?>">
                            </div>  
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="date_issue">
                                Date Issue <br> تاريخ الاصدار
                            </label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="date_issue" value="<?php echo $e_date_issue; ?>">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="place_issue">
                                Place Issue <br> قضية مكان
                            </label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="place_issue" rows="4" maxlength="224" minlength="5" ><?php echo $e_place_issue; ?></textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="employer">
                                Employer صصاحب العمل
                            </label>
                            <div class="col-sm-6">
                                <select name="employer" class="form-control">
                                	<option name="employer" selected  value="<?php echo $e_employer_id; ?>" hidden>
                                		 <?php echo $opt_option; ?>
                                	</option>
                                	<option name="employer" value="0">
                                		
                                	</option>
                                    <?php

                                    $get_employer = "select * from tbl_employers where removed = 'No'";

                                    $run_employer = mysqli_query($con,$get_employer);

                                    while($row_employer = mysqli_fetch_array($run_employer)){

                                        $employer_id = $row_employer['employer_id'];
                                        
                                        $company_name = $row_employer['company_name'];
                                        $fname = $row_employer['first_name'];
                                        $mname = $row_employer['middle_name'];
                                        $lname = $row_employer['last_name'];
                                        $full_name = ucfirst($fname) . " " . ucfirst($mname) . " " . ucfirst($lname);
                                        $option = $company_name . " - " . $full_name;

                                    ?>
                                    <option name="employer" value="<?php echo $employer_id; ?>">
                                        <?php echo $option; ?>
                                    </option>
                                    <?php

                                        }

                                    ?>
                                </select>
                            </div>  
                        </div>
                    </div>
                    <div class="text-center col-md-12">
                        <button type="submit" name="submit" class="btn btn-primary">
                             Update
                        </button>
                        <a href="index.php?waiting_applicants" class="btn btn-danger">
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
    		$position1 = mysqli_real_escape_string($con,$_POST['position1']);
            $position2 = mysqli_real_escape_string($con,$_POST['position2']);
            $position3 = mysqli_real_escape_string($con,$_POST['position3']);
            $first_name = mysqli_real_escape_string($con,$_POST['first_name']);
            $middle_name = mysqli_real_escape_string($con,$_POST['middle_name']);
            $last_name = mysqli_real_escape_string($con,$_POST['last_name']);
            $age = mysqli_real_escape_string($con,$_POST['age']);
            $gender = mysqli_real_escape_string($con,$_POST['gender']);
            $contact_number = mysqli_real_escape_string($con,$_POST['contact_number']);
            $email_address = mysqli_real_escape_string($con,$_POST['email_address']);
            $address = mysqli_real_escape_string($con,$_POST['address']);
            $birth_place = mysqli_real_escape_string($con,$_POST['birth_place']);
            $birth_date = mysqli_real_escape_string($con,$_POST['birth_date']);
            $civil_status = mysqli_real_escape_string($con,$_POST['civil_status']);
            $height = mysqli_real_escape_string($con,$_POST['height']);
            $weight = mysqli_real_escape_string($con,$_POST['weight']);
            $blood_type = mysqli_real_escape_string($con,$_POST['blood_type']);
            $religion = mysqli_real_escape_string($con,$_POST['religion']);
            $language_spoken = mysqli_real_escape_string($con,$_POST['language_spoken']);
            $father_name = mysqli_real_escape_string($con,$_POST['father_name']);
            $mother_name = mysqli_real_escape_string($con,$_POST['mother_name']);
            $passport_number = mysqli_real_escape_string($con,$_POST['passport_number']);
            $date_issue = mysqli_real_escape_string($con,$_POST['date_issue']);
            $place_issue = mysqli_real_escape_string($con,$_POST['place_issue']);
            $employer_ = mysqli_real_escape_string($con,$_POST['employer']);
            $update_applicant = "UPDATE tbl_applicants SET position1 = '$position1', position2 = '$position2', position3 = '$position3', first_name = '$first_name', middle_name = '$middle_name', last_name = '$last_name', age = '$age', gender = '$gender', contact_number = '$contact_number', email_address = '$email_address', address = '$address', birth_place = '$birth_place', birth_date = '$birth_date', civil_status = '$civil_status', height = '$height', weight = '$weight', blood_type = '$blood_type', religion = '$religion', language_spoken = '$language_spoken', father_name = '$father_name', mother_name = '$mother_name', passport_number = '$passport_number', date_issue = '$date_issue', place_issue = '$place_issue', employer_id = '$employer_' WHERE applicant_id = '$e_id'";
            $run_update_applicant = mysqli_query($con,$update_applicant);
	    		if($run_update_applicant){

                    echo "
                        <script>
                            alert('Applicant Has Been Updated')
                        </script>
                    ";

                    echo "
                        <script>
                            window.open('index.php?waiting_applicants','_self')
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
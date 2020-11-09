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
                    $e_jo_id = $row_edit['jo_id'];
                    $e_agent_id = $row_edit['agent_id'];
					$e_times_abroad = $row_edit['times_abroad'];
					$e_option = "SELECT * FROM tbl_job_order WHERE jo_id = '$e_jo_id'";
					$run_option = mysqli_query($con,$e_option);
					$row_option = mysqli_fetch_array($run_option);
					$opt_name = $row_option['jo_name'];
                    $e_option2 = "SELECT * FROM tbl_agents WHERE agent_id = '$e_agent_id'";
                    $run_option2 = mysqli_query($con,$e_option2);
                    $row_option2 = mysqli_fetch_array($run_option2);
                    $opt_fname2 = $row_option2['first_name'];
                    $opt_mname2 = $row_option2['middle_name'];
                    $opt_lname2 = $row_option2['last_name'];
                    $opt_full_name2 = ucfirst($opt_fname2) . " " . ucfirst($opt_mname2) . " " . ucfirst($opt_lname2);
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
                                Position 1
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="position1" maxlength="74" minlength="2" onkeypress='return isAlphaKey(event)' required value="<?php echo $e_position1; ?>">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="position2">
                                Position 2
                            </label>
                            <div class="col-sm-8">
                                 <input type="text" class="form-control" name="position2" maxlength="74" minlength="2" onkeypress='return isAlphaKey(event)' value="<?php echo $e_position2; ?>">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="position3">
                                Position 3
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="position3" maxlength="74" minlength="2" onkeypress='return isAlphaKey(event)' value="<?php echo $e_position3; ?>">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="first_name">
                                First Name
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="first_name" maxlength="74" minlength="2" onkeypress='return isAlphaKey(event)' required value="<?php echo $e_fname; ?>">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4"> 
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="middle_name">
                                Middle Name
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="middle_name" maxlength="74" minlength="2" onkeypress='return isAlphaKey(event)' value="<?php echo $e_mname; ?>">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="last_name">
                                Last Name
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="last_name" maxlength="74" minlength="2" onkeypress='return isAlphaKey(event)' required value="<?php echo $e_lname; ?>">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="age">
                                Age
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="age" required onkeypress='return isNumericKey(event)' maxlength="2" minlength="2" value="<?php echo $e_age; ?>">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="gender">
                                Gender
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
                                Contact Number
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="contact_number" required onkeypress='return isNumericKey(event)' maxlength="15" minlength="5" value="<?php echo $e_contact_number; ?>">
                            </div>  
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="email_address">
                                Email Address
                            </label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" name="email_address" maxlength="224" minlength="5" value="<?php echo $e_email_address; ?>">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="address">
                                Address
                            </label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="address" rows="4" maxlength="224" minlength="5" required><?php echo $e_address; ?></textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="birth_place">
                                Birth Place
                            </label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="birth_place" rows="3" maxlength="224" minlength="5" required><?php echo $e_birth_place; ?></textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="birth_date">
                                Birth Date
                            </label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="birth_date" required value="<?php echo $e_birth_date; ?>">
                            </div>  
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="civil_status">
                                Civil Status
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
                                Height
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="height" minlength="2" maxlength="14" value="<?php echo $e_height; ?>">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="weight">
                                Weight
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="weight" minlength="2" maxlength="14" value="<?php echo $e_weight; ?>">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="blood_type">
                                Blood Type
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
                                Religion
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="religion" minlength="2" maxlength="74" value="<?php echo $e_religion; ?>">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-6" for="language_spoken">
                                Language Spoken
                            </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="language_spoken" minlength="3" maxlength="224" required value="<?php echo $e_language_spoken; ?>">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="father_name">
                                Father Name
                            </label>
                            <div class="col-sm-8">
                                 <input type="text" class="form-control" name="father_name" minlength="3" maxlength="224" value="<?php echo $e_father_name; ?>">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="mother_name">
                                Mother Name
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="mother_name" minlength="3" maxlength="224" value="<?php echo $e_mother_name; ?>">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="passport_number">
                                Passport Number
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="passport_number" maxlength="9" minlength="9" value="<?php echo $e_passport_number; ?>">
                            </div>  
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="date_issue">
                                Date Issue
                            </label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="date_issue" value="<?php echo $e_date_issue; ?>">
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="place_issue">
                                Place Issue
                            </label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="place_issue" rows="4" maxlength="224" minlength="5" ><?php echo $e_place_issue; ?></textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="times_abroad">
                                Times Abroad
                            </label>
                            <div class="col-sm-6">
                                <select name="times_abroad" class="form-control">
                                    <option name="times_abroad" selected  value="<?php echo $e_times_abroad; ?>" hidden>
                                         <?php echo $e_times_abroad; ?>
                                    </option>
                                    <?php

                                        for($x = 0; $x <= 20; $x++){

                                            echo "

                                            <option name='times_abroad' value='$x'>
                                                $x
                                            </option>

                                            ";

                                        }

                                    ?>
                                </select>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="agent">
                                Agent
                            </label>
                            <div class="col-sm-6">
                                <select name="agent" class="form-control">
                                    <option name="agent" selected  value="<?php echo $e_agent_id; ?>" hidden>
                                         <?php echo $opt_full_name2; ?>
                                    </option>
                                    <option name="agent" value="0">
                                        
                                    </option>
                                    <?php

                                    $get_agent = "select * from tbl_agents where removed = 'No'";

                                    $run_agent = mysqli_query($con,$get_agent);

                                    while($row_agent = mysqli_fetch_array($run_agent)){

                                        $agent_id = $row_agent['agent_id'];
                                        $fnamee = $row_agent['first_name'];
                                        $mnamee = $row_agent['middle_name'];
                                        $lnamee = $row_agent['last_name'];
                                        $full_namee = ucfirst($fnamee) . " " . ucfirst($mnamee) . " " . ucfirst($lnamee);

                                    ?>
                                    <option name="agent" value="<?php echo $agent_id; ?>">
                                        <?php echo $full_namee; ?>
                                    </option>
                                    <?php

                                        }

                                    ?>
                                </select>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="jo">
                                Job Order
                            </label>
                            <div class="col-sm-6">
                                <select name="jo" class="form-control">
                                	<option name="jo" selected  value="<?php echo $e_jo_id; ?>" hidden>
                                		 <?php echo $opt_name; ?>
                                	</option>
                                	<option name="jo" value="0">
                                		
                                	</option>
                                    <?php

                                    $get_employer = "select * from tbl_job_order where removed = 'No'";

                                    $run_employer = mysqli_query($con,$get_employer);

                                    while($row_employer = mysqli_fetch_array($run_employer)){

                                        $jo_id = $row_employer['jo_id'];
                                        
                                        $jo_name = $row_employer['jo_name'];

                                    ?>
                                    <option name="jo" value="<?php echo $jo_id; ?>">
                                        <?php echo $jo_name; ?>
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
            $jo_ = mysqli_real_escape_string($con,$_POST['jo']);
            $agent_ = mysqli_real_escape_string($con,$_POST['agent']);
            $times_abroad = mysqli_real_escape_string($con,$_POST['times_abroad']);
            $update_applicant = "UPDATE tbl_applicants SET position1 = '$position1', position2 = '$position2', position3 = '$position3', first_name = '$first_name', middle_name = '$middle_name', last_name = '$last_name', age = '$age', gender = '$gender', contact_number = '$contact_number', email_address = '$email_address', address = '$address', birth_place = '$birth_place', birth_date = '$birth_date', civil_status = '$civil_status', height = '$height', weight = '$weight', blood_type = '$blood_type', religion = '$religion', language_spoken = '$language_spoken', father_name = '$father_name', mother_name = '$mother_name', passport_number = '$passport_number', date_issue = '$date_issue', place_issue = '$place_issue', jo_id = '$jo_', agent_id = '$agent_', times_abroad = '$times_abroad' WHERE applicant_id = '$e_id'";
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
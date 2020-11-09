<?php

	include("../include/db.php");

	$connect = new PDO("mysql:host=localhost;dbname=u577886912_ofw", "u577886912_ofw", "yaramay2019!");

	if($_POST['query'] != ''){

		$search_array = explode(",", $_POST["query"]);

		$search_text = "'" . implode("', '", $search_array) . "'";

		$query = "SELECT * FROM tbl_applicants WHERE application_status = '1' AND employer_id != '0' AND removed = 'No' AND applicant_id IN (".$search_text.") ";

	}else{

		$query = "";

		echo "
			<form class='form-horizontal' action='' method='post'><!-- form-horizontal Starts -->
				<div class='col-md-6'><!-- col-md-6 Starts -->
                    <div class='form-group'>
                        <label class='control-label col-sm-4'>
                            Position Selected
                        </label>
                        <div class='col-sm-8'>
                            <input type='text' class='form-control' name='' disabled>
                        </div>  
                    </div>
                    <div class='form-group'>
                        <label class='control-label col-sm-4'>
                            Address
                        </label>
                        <div class='col-sm-8'>
                            <textarea class='form-control' name='address' rows='2' disabled></textarea>
                        </div>  
                    </div>
                </div><!-- col-md-6 Ends -->
                <div class='col-md-6'><!-- col-md-6 Starts -->
                    <div class='form-group'>
                        <label class='control-label col-sm-4'>
                            Employer
                        </label>
                        <div class='col-sm-8'>
                            <select class='form-control' name='employer'>
                            	<option name='employer'>
                            		Select Employer
                            	</option>
                            </select>
                        </div>  
                    </div>
                </div><!-- col-md-6 Ends -->
                <br>
                <div class='col-md-12'><!-- col-md-12 Starts -->
                	<ul class='nav nav-tabs'><!-- nav nav-tabs Starts -->
    					<li class='active'>
        					<a href='' id='btn1'  data-toggle='tab'>
            					<i class='fa fa-user'></i> <span>Applicant Information</span>
        					</a>
    					</li>
  					</ul><!-- nav nav-tabs Ends -->
  					<br>
                </div><!-- col-md-12 Ends -->
                <section class='content-header'><!-- content-header Starts -->
                	<div id='applicant_info'><!-- applicant_info Starts -->
	                	<div class='col-md-6'><!-- col-md-6 Starts -->
		                    <div class='form-group'>
		                        <label class='control-label col-sm-4'>
		                            Position Desired
		                        </label>
		                        <div class='col-sm-8'>
		                            <select class='form-control' name='position_desired'>
		                            	<option name='position_desired'>
		                            		Select Position
		                            	</option>
		                            </select>
		                        </div>  
		                    </div>
		                </div><!-- col-md-6 Ends -->
		                <div class='col-md-6'><!-- col-md-6 Starts -->
		                    <div class='form-group'>
		                        <label class='control-label col-sm-4'>
		                            Contact Number
		                        </label>
		                        <div class='col-sm-8'>
		                            <input type='text' class='form-control' name='contact_number' disabled>
		                        </div>  
		                    </div>
		                </div><!-- col-md-6 Ends -->
		                <div class='col-md-6'><!-- col-md-6 Starts -->
		                    <div class='form-group'>
		                        <label class='control-label col-sm-4'>
		                            Gender
		                        </label>
		                        <div class='col-sm-8'>
		                            <select class='form-control' name='gender'>
		                            	<option name='gender'>
		                            		Select Gender
		                            	</option>
		                            </select>
		                        </div>  
		                    </div>
		                </div><!-- col-md-6 Ends -->
		                <div class='col-md-6'><!-- col-md-6 Starts -->
		                    <div class='form-group'>
		                        <label class='control-label col-sm-4'>
		                            Language Spoken
		                        </label>
		                        <div class='col-sm-8'>
		                            <input type='text' class='form-control' name='language_spoken' disabled>
		                        </div>  
		                    </div>
		                </div><!-- col-md-6 Ends -->
		                <div class='col-md-6'><!-- col-md-6 Starts -->
		                    <div class='form-group'>
		                        <label class='control-label col-sm-4'>
		                            Date of Birth
		                        </label>
		                        <div class='col-sm-8'>
		                            <input type='date' class='form-control' name='date_birth' disabled>
		                        </div>  
		                    </div>
		                    <div class='form-group'>
		                        <label class='control-label col-sm-4'>
		                            Place of Birth
		                        </label>
		                        <div class='col-sm-8'>
		                            <textarea class='form-control' name='place_birth' rows='3' disabled></textarea>
		                        </div>  
		                    </div>
		                </div><!-- col-md-6 Ends -->
		                <div class='col-md-6'><!-- col-md-6 Starts -->
		                    <div class='form-group'>
		                        <label class='control-label col-sm-4'>
		                            Email Address
		                        </label>
		                        <div class='col-sm-8'>
		                            <input type='email' class='form-control' name='email_address' disabled>
		                        </div>  
		                    </div>
		                    <div class='form-group'>
		                        <label class='control-label col-sm-4'>
		                            Father Name
		                        </label>
		                        <div class='col-sm-8'>
		                            <input type='text' class='form-control' name='father_name' disabled>
		                        </div>  
		                    </div>
		                    <div class='form-group'>
		                        <label class='control-label col-sm-4'>
		                            Mother Name
		                        </label>
		                        <div class='col-sm-8'>
		                            <input type='text' class='form-control' name='mother_name' disabled>
		                        </div>  
		                    </div>
		                </div><!-- col-md-6 Ends -->
		                <div class='col-md-6'><!-- col-md-6 Starts -->
		                    <div class='form-group'>
		                        <label class='control-label col-sm-4'>
		                            Height & Weight
		                        </label>
		                        <div class='col-sm-4'>
		                            <input type='text' class='form-control' name='height' disabled>
		                        </div>
		                        <div class='col-sm-4'>
		                            <input type='text' class='form-control' name='weight' disabled>
		                        </div>  
		                    </div>
		                </div><!-- col-md-6 Ends -->
		                <div class='col-md-6'><!-- col-md-6 Starts -->
		                    <div class='form-group'>
		                        <label class='control-label col-sm-4'>
		                            Blood Type
		                        </label>
		                        <div class='col-sm-8'>
		                            <select class='form-control' name='blood_type'>
		                            	<option name='blood_type'>
		                            		Select Blood Type
		                            	</option>
		                            </select>
		                        </div>
		                    </div>
		                </div><!-- col-md-6 Ends -->
		                <div class='col-md-6'><!-- col-md-6 Starts -->
		                    <div class='form-group'>
		                        <label class='control-label col-sm-4'>
		                            Civil Status
		                        </label>
		                        <div class='col-sm-8'>
		                            <select class='form-control' name='civil_status'>
		                            	<option name='civil_status'>
		                            		Select Civil Status
		                            	</option>
		                            </select>
		                        </div>
		                    </div>
		                    <div class='form-group'>
		                        <label class='control-label col-sm-4'>
		                            Religion
		                        </label>
		                        <div class='col-sm-8'>
		                            <input type='text' class='form-control' name='religion' disabled>
		                        </div>
		                    </div>
		                    <div class='form-group'>
		                        <label class='control-label col-sm-4'>
		                            Passport Number
		                        </label>
		                        <div class='col-sm-8'>
		                             <input type='text' class='form-control' name='passport_number' disabled>
		                        </div>
		                    </div>
		                </div><!-- col-md-6 Ends -->
		                <div class='col-md-6'><!-- col-md-6 Starts -->
		                    <div class='form-group'>
		                        <label class='control-label col-sm-4'>
		                            Date Issue
		                        </label>
		                        <div class='col-sm-8'>
		                             <input type='text' class='form-control' name='date_issue' disabled>
		                        </div>
		                    </div>
		                    <div class='form-group'>
		                        <label class='control-label col-sm-4'>
		                            Place Issue
		                        </label>
		                        <div class='col-sm-8'>
		                            <textarea class='form-control' name='place_issue' rows='3' disabled></textarea>
		                        </div>
		                    </div>
		                </div><!-- col-md-6 Ends -->
		                <div class='col-md-12'><!-- col-md-12 Starts -->
		                    <div class='form-group'>
		                        <div class='col-xs-6'>
	          						<a href='index.php?processing_applicants' class='btn btn-default pull-left'><i class='fa fa-close'></i> Close</a>
	        					</div>
		                    </div>
		                </div><!-- col-md-12 Ends -->
		    </form><!-- form-horizontal Ends -->
	                </div><!-- applicant_info Ends -->
	        		
			     
                </section><!-- content-header Starts -->
		";

	}

	$statement = $connect->prepare($query);

	$statement->execute();

	$result = $statement->fetchAll();

	$total_row = $statement->rowCount();

	$output = '';

	if($total_row > 0){

		foreach($result as $row){

			$applicantid = $row['applicant_id'];
			
			$address = $row['address'];
			$pos_selected = $row['position_selected'];
			
			$employer_id = $row['employer_id'];
			
			$contact_number = $row['contact_number'];
			
			$gender = $row['gender'];
			
			$language_spoken = $row['language_spoken'];
			
			$date_birth = $row['birth_date'];
			
			$place_birth = $row['birth_place'];
			
			$email_address = $row['email_address'];
			
			$father_name = $row['father_name'];
			
			$mother_name = $row['mother_name'];
			
			$height = $row['height'];
			
			$weight = $row['weight'];
			
			$blood_type = $row['blood_type'];
			
			$civil_status = $row['civil_status'];
			
			$religion = $row['religion'];
			
			$passport_number = $row['passport_number'];
			
			$place_issue = $row['place_issue'];
			$date_issue = $row['date_issue'];
			
			$get_emp = "SELECT * FROM tbl_employers WHERE employer_id = '$employer_id'";
			
			$run_emp = $connect->prepare($get_emp);

			$run_emp->execute();

            $row_emp = $run_emp->fetchAll();

            $total_emp = $run_emp->rowCount();

            if($total_emp > 0){

            	foreach($row_emp as $row_empp){

            		$company = $row_empp['company_name'];
            		$fname = $row_empp['first_name'];
            		$mname = $row_empp['middle_name'];
            		$lname = $row_empp['last_name'];

		            $full_n = ucfirst($lname) . ", " . ucfirst($fname) . " " . ucfirst($mname);

		            $option = $company . " - " . $full_n;

            	}

            }else{
            	$option = '';
            }

			$output .= "
				<form class='form-horizontal' action='add_processing_applcnt.php' method='post'><!-- form-horizontal Starts -->
					<div class='col-md-6'><!-- col-md-6 Starts -->
	                    <div class='form-group'>
	                        <label class='control-label col-sm-4'>
	                            Position Selected
	                        </label>
	                        <div class='col-sm-8'>
	                        	<input type='hidden' class='form-control' name='applicant_identify' value='$applicantid'>
	                            <input type='text' class='form-control' name='pos_selected' value='$pos_selected' disabled>
	                        </div>  
	                    </div>
	                    <div class='form-group'>
	                        <label class='control-label col-sm-4'>
	                            Address
	                        </label>
	                        <div class='col-sm-8'>
	                            <textarea class='form-control' name='address' rows='2' required disabled>$address</textarea>
	                        </div>  
	                    </div>
	                </div><!-- col-md-6 Ends -->
	                <div class='col-md-6'><!-- col-md-6 Starts -->
	                    <div class='form-group'>
	                        <label class='control-label col-sm-4'>
	                            Employer
	                        </label>
	                        <div class='col-sm-8'>
	                        <input type='text' class='form-control' name='employer' value='$option' disabled>
	                        </div>  
	                    </div>
	                </div><!-- col-md-6 Ends -->
	                <br>
	                <div class='col-md-12'><!-- col-md-12 Starts -->
	                	<ul class='nav nav-tabs'><!-- nav nav-tabs Starts -->
	    					<li class='active'>
	        					<a href='' id='btn1'  data-toggle='tab'>
	            					<i class='fa fa-user'></i> <span>Applicant Information</span>
	        					</a>
	    					</li>
	  					</ul><!-- nav nav-tabs Ends -->
	  					<br>
	                </div><!-- col-md-12 Ends -->
	                <section class='content-header'><!-- content-header Starts -->
	                	<div id='applicant_info'><!-- applicant_info Starts -->
		                	<div class='col-md-6'><!-- col-md-6 Starts -->
			                    <div class='form-group'>
			                        <label class='control-label col-sm-4'>
			                            Position Desired
			                        </label>
			                        <div class='col-sm-8'>
			                            <select class='form-control' name='position_desired'>
			                            	";

			                            	$get_position = "SELECT * FROM tbl_applicants WHERE applicant_id = '$applicantid'";

			                            	$run_position = mysqli_query($con,$get_position);

			                            	while($row_position = mysqli_fetch_array($run_position)){

                                                $po1 = $row_position['position1'];
                                                $po2 = $row_position['position2'];
                                                $po3 = $row_position['position3'];

                                                $output .= "
		                                            <option name='position_desired' value='$po1'>
		                                                $po1
		                                            </option>
		                                            <option name='position_desired' value='$po2'>
		                                                $po2
		                                            </option>
		                                            <option name='position_desired' value='$po3'>
		                                                $po3
		                                            </option>
                                            	";
                                            }
			                            	$output .= "
			                            </select>
			                        </div>  
			                    </div>
			                </div><!-- col-md-6 Ends -->
			                <div class='col-md-6'><!-- col-md-6 Starts -->
			                    <div class='form-group'>
			                        <label class='control-label col-sm-4'>
			                            Contact Number
			                        </label>
			                        <div class='col-sm-8'>
			                            <input type='text' class='form-control' name='contact_number' onkeypress='return isNumericKey(event)' maxlength='15' value='$contact_number' required disabled>
			                        </div>  
			                    </div>
			                </div><!-- col-md-6 Ends -->
			                <div class='col-md-6'><!-- col-md-6 Starts -->
			                    <div class='form-group'>
			                        <label class='control-label col-sm-4'>
			                            Gender
			                        </label>
			                        <div class='col-sm-8'>
			                           <input type='text' class='form-control' name='gender' value='$gender' required disabled>
			                        </div>  
			                    </div>
			                </div><!-- col-md-6 Ends -->
			                <div class='col-md-6'><!-- col-md-6 Starts -->
			                    <div class='form-group'>
			                        <label class='control-label col-sm-4'>
			                            Language Spoken
			                        </label>
			                        <div class='col-sm-8'>
			                            <input type='text' class='form-control' name='language_spoken' value='$language_spoken' required disabled>
			                        </div>  
			                    </div>
			                </div><!-- col-md-6 Ends -->
			                <div class='col-md-6'><!-- col-md-6 Starts -->
			                    <div class='form-group'>
			                        <label class='control-label col-sm-4'>
			                            Date of Birth
			                        </label>
			                        <div class='col-sm-8'>
			                            <input type='date' class='form-control' name='date_birth' value='$date_birth' required disabled>
			                        </div>  
			                    </div>
			                    <div class='form-group'>
			                        <label class='control-label col-sm-4'>
			                            Place of Birth
			                        </label>
			                        <div class='col-sm-8'>
			                            <textarea class='form-control' name='place_birth' disabled rows='3' required>$place_birth</textarea>
			                        </div>  
			                    </div>
			                </div><!-- col-md-6 Ends -->
			                <div class='col-md-6'><!-- col-md-6 Starts -->
			                    <div class='form-group'>
			                        <label class='control-label col-sm-4'>
			                            Email Address
			                        </label>
			                        <div class='col-sm-8'>
			                            <input type='email' class='form-control' name='email_address' value='$email_address' disabled>
			                        </div>  
			                    </div>
			                    <div class='form-group'>
			                        <label class='control-label col-sm-4'>
			                            Father Name
			                        </label>
			                        <div class='col-sm-8'>
			                            <input type='text' class='form-control' name='father_name' value='$father_name' disabled>
			                        </div>  
			                    </div>
			                    <div class='form-group'>
			                        <label class='control-label col-sm-4'>
			                            Mother Name
			                        </label>
			                        <div class='col-sm-8'>
			                            <input type='text' class='form-control' name='mother_name' value='$mother_name' disabled>
			                        </div>  
			                    </div>
			                </div><!-- col-md-6 Ends -->
			                <div class='col-md-6'><!-- col-md-6 Starts -->
			                    <div class='form-group'>
			                        <label class='control-label col-sm-4'>
			                            Height & Weight
			                        </label>
			                        <div class='col-sm-4'>
			                            <input type='text' class='form-control' name='height' value='$height'  disabled>
			                        </div>
			                        <div class='col-sm-4'>
			                            <input type='text' class='form-control' name='weight' value='$weight'  disabled>
			                        </div>  
			                    </div>
			                </div><!-- col-md-6 Ends -->
			                <div class='col-md-6'><!-- col-md-6 Starts -->
			                    <div class='form-group'>
			                        <label class='control-label col-sm-4'>
			                            Blood Type
			                        </label>
			                        <div class='col-sm-4'>
			                            <input type='text' class='form-control' name='blood_type' value='$blood_type'  disabled>
			                        </div>
			                    </div>
			                </div><!-- col-md-6 Ends -->
			                <div class='col-md-6'><!-- col-md-6 Starts -->
			                    <div class='form-group'>
			                        <label class='control-label col-sm-4'>
			                            Civil Status
			                        </label>
			                        <div class='col-sm-8'>
			                            <input type='text' class='form-control' name='civil_status' value='$civil_status'  disabled>
			                        </div>
			                    </div>
			                    <div class='form-group'>
			                        <label class='control-label col-sm-4'>
			                            Religion
			                        </label>
			                        <div class='col-sm-8'>
			                            <input type='text' class='form-control' name='religion' value='$religion' disabled>
			                        </div>
			                    </div>
			                    <div class='form-group'>
			                        <label class='control-label col-sm-4'>
			                            Passport Number
			                        </label>
			                        <div class='col-sm-8'>
			                             <input type='text' class='form-control' name='passport_number' value='$passport_number' maxlength='9' minlength='9' disabled>
			                        </div>
			                    </div>
			                </div><!-- col-md-6 Ends -->
			                <div class='col-md-6'><!-- col-md-6 Starts -->
			                    <div class='form-group'>
			                        <label class='control-label col-sm-4'>
			                            Date Issue
			                        </label>
			                        <div class='col-sm-8'>
			                             <input type='text' class='form-control' name='date_issue' value='$date_issue'disabled>
			                        </div>
			                    </div>
			                    <div class='form-group'>
			                        <label class='control-label col-sm-4'>
			                            Place Issue
			                        </label>
			                        <div class='col-sm-8'>
			                            <textarea class='form-control' name='place_issue' rows='3' disabled>$place_issue</textarea>
			                        </div>
			                    </div>
			                </div><!-- col-md-6 Ends -->
			                <div class='col-md-12'><!-- col-md-12 Starts -->
			                    <div class='form-group'>
			                        <div class='col-xs-6'>
		          						<button type='submit' name='save' class='btn btn-success pull-left'><i class='fa fa-file'></i> Save</button>
		          						<a href='index.php?processing_applicants' class='btn btn-default pull-left'><i class='fa fa-close'></i> Close</a>
		        					</div>
			                    </div>
			                </div><!-- col-md-12 Ends -->
		        </form><!-- form-horizontal Ends -->
		         		</div><!-- applicant_info Ends -->
		         		
	                </section><!-- content-header Starts -->
			";

		}

	}

	echo $output;

?>
<script src="../../js/jq.js"></script>

<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	
<script type="application/javascript">

    function isNumericKey(evt){

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;

        return true;
    }

    </script>

<script>
  	$(function () {
    $('#ample1').DataTable()
    $('.ample2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : true
    })
  	})
	</script>
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
	if(isset($_GET['edit_agent'])){
		$edit_id = $_GET['edit_agent'];
		$edit_accnt = "SELECT * FROM tbl_agents WHERE agent_id = '$edit_id' AND removed = 'No'";
		$run_edit = mysqli_query($con,$edit_accnt);
		$row_edit = mysqli_fetch_array($run_edit);
		$e_id = $row_edit['agent_id'];
		$e_fname = $row_edit['first_name'];
		$e_mname = $row_edit['middle_name'];
		$e_lname = $row_edit['last_name'];
		$e_email_address = $row_edit['email_address'];
		$e_contact_number = $row_edit['contact_number'];
	}
?>
<div class="row"><!-- 1 row Starts -->
    <div class="col-lg-12"><!-- col-lg-12 Starts -->
        <ol class="breadcrumb"><!-- breadcrumb Starts -->
            <li>
                <i class="fa fa-users"></i>
                Agents / Edit Agent
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
                    Edit Agent
                </h3><!-- panel-title Ends -->
            </div><!-- panel-heading Ends -->
            <div class="panel-body"><!-- panel-body Starts -->
                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->
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
                            Email Address
                        </label>
                        <div class="col-md-6">
                            <input type="email" name="email_address" class="form-control" maxlength="224" minlength="5" value="<?php echo $e_email_address; ?>">
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
                            
                        </label>
                        <div class="col-md-6">
                            <input type="submit" name="submit" value="Update Agent" class="btn btn-primary form-control">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            
                        </label>
                        <div class="col-md-6">
                            <a href="index.php?agents" class="btn btn-danger form-control">
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

    			$first_name = mysqli_real_escape_string($con,$_POST['first_name']);
	    		$middle_name = mysqli_real_escape_string($con,$_POST['middle_name']);
	    		$last_name = mysqli_real_escape_string($con,$_POST['last_name']);
	    		$email_address = mysqli_real_escape_string($con,$_POST['email_address']);
	    		$contact_number = mysqli_real_escape_string($con,$_POST['contact_number']);
	    		$update_agent = "UPDATE tbl_agents SET first_name = '$first_name', middle_name = '$middle_name', last_name = '$last_name', email_address = '$email_address', contact_number = '$contact_number' WHERE agent_id = '$e_id'";
	    		$run_update_agent = mysqli_query($con,$update_agent);
	    		if($run_update_agent){

                    echo "
                        <script>
                            alert('Agent Has Been Updated')
                        </script>
                    ";

                    echo "
                        <script>
                            window.open('index.php?agents','_self')
                        </script>
                    ";

                }else{

                    echo "
                        <script>
                            alert('Error Updating Agent')
                        </script>
                    ";

                }
    		}
    	
    ?>
<?php
	}
?>
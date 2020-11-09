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
	if(isset($_GET['edit_job_order'])){
		$edit_id = $_GET['edit_job_order'];
		$edit_accnt = "SELECT * FROM tbl_job_order WHERE jo_id = '$edit_id' AND removed = 'No'";
		$run_edit = mysqli_query($con,$edit_accnt);
		$row_edit = mysqli_fetch_array($run_edit);
		$e_id = $row_edit['jo_id'];
		$e_name = $row_edit['jo_name'];
		$e_email_address = $row_edit['email_address'];
        $e_contact_number = $row_edit['contact_number'];
        $e_username = $row_edit['jo_username'];
		$e_password = $row_edit['jo_password'];
	}
?>
<div class="row"><!-- 1 row Starts -->
    <div class="col-lg-12"><!-- col-lg-12 Starts -->
        <ol class="breadcrumb"><!-- breadcrumb Starts -->
            <li>
                <i class="fa fa-briefcase"></i>
                Job Order / Edit Job Order
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
                    Edit Job Order
                </h3><!-- panel-title Ends -->
            </div><!-- panel-heading Ends -->
            <div class="panel-body"><!-- panel-body Starts -->
                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Name
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="jo_name" class="form-control" required maxlength="74" minlength="2" value="<?php echo $e_name; ?>" onkeypress='return isAlphaKey(event)'>
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Email Address
                        </label>
                        <div class="col-md-6">
                            <input type="email" name="email_address" class="form-control" value="<?php echo $e_email_address; ?>" maxlength="224" minlength="5">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Contact Number
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="contact_number" class="form-control" required onkeypress='return isNumericKey(event)' value="<?php echo $e_contact_number; ?>" maxlength="15" minlength="5">
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
                            <input type="submit" name="submit" value="Update Job Order" class="btn btn-primary form-control">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            
                        </label>
                        <div class="col-md-6">
                            <a href="index.php?job_order" class="btn btn-danger form-control">
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

    			$jo_name = mysqli_real_escape_string($con,$_POST['jo_name']);
	    		$email_address = mysqli_real_escape_string($con,$_POST['email_address']);
                $contact_number = mysqli_real_escape_string($con,$_POST['contact_number']);
                $username = mysqli_real_escape_string($con,$_POST['username']);
	    		$password = mysqli_real_escape_string($con,$_POST['password']);
	    		$update_agent = "UPDATE tbl_job_order SET jo_name = '$jo_name', email_address = '$email_address', contact_number = '$contact_number', jo_username = '$username', jo_password = '$password' WHERE jo_id = '$e_id'";
	    		$run_update_agent = mysqli_query($con,$update_agent);
	    		if($run_update_agent){

                    echo "
                        <script>
                            alert('Job Order Has Been Updated')
                        </script>
                    ";

                    echo "
                        <script>
                            window.open('index.php?job_order','_self')
                        </script>
                    ";

                }else{

                    echo "
                        <script>
                            alert('Error Updating Job Order')
                        </script>
                    ";

                }
    		}
    	
    ?>
<?php
	}
?>
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
                <i class="fa fa-users"></i>
                Job Order / Add Job Order
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
                    Add Job Order
                </h3><!-- panel-title Ends -->
            </div><!-- panel-heading Ends -->
            <div class="panel-body"><!-- panel-body Starts -->
                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Name
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="jo_name" class="form-control" required maxlength="74" minlength="2" onkeypress='return isAlphaKey(event)'>
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
                            Contact Number
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="contact_number" class="form-control" required onkeypress='return isNumericKey(event)' maxlength="15" minlength="5">
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
                            <input type="submit" name="submit" value="Insert Job Order" class="btn btn-primary form-control">
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
    		$name = mysqli_real_escape_string($con,$_POST['jo_name']);
    		$email_address = mysqli_real_escape_string($con,$_POST['email_address']);
            $contact_number = mysqli_real_escape_string($con,$_POST['contact_number']);
            $username = mysqli_real_escape_string($con,$_POST['username']);
    		$password = mysqli_real_escape_string($con,$_POST['password']);
			$insert_agent = "INSERT INTO tbl_job_order (jo_name,email_address,contact_number,jo_username,jo_password,created_by,date_created,removed,date_removed,removed_by) VALUES ('$name','$email_address','$contact_number','$username','$password','$creator',now(),'No','0000-00-00','')";
			$run_insert_agent = mysqli_query($con,$insert_agent);

                if($run_insert_agent){

                    echo "
                        <script>
                            alert('New Job Order Has Been Inserted')
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
                            alert('Error Inserting Job Order')
                        </script>
                    ";

                }

    	}
    ?>
<?php
	}
?>
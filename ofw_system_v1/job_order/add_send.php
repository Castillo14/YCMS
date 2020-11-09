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
                <i class="fa fa-user-secret"></i>
                Send Contract / Add Contract
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
                    Add Contract
                </h3><!-- panel-title Ends -->
            </div><!-- panel-heading Ends -->
            <div class="panel-body"><!-- panel-body Starts -->
                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Applicant Name
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="applicant" class="form-control" required maxlength="255" minlength="2">
                        </div>
                    </div><!-- form-group Ends -->
                     <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Employer
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="employer" class="form-control" required maxlength="255" minlength="2">
                        </div>
                    </div><!-- form-group Ends -->
                   
					<div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Scanned Contract
                        </label>
                        <div class="col-md-6">
                            <input type="file" name="image" class="form-control" >
                        </div>
                    </div><!-- form-group Ends -->
                   
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            
                        </label>
                        <div class="col-md-6">
                            <input type="submit" name="submit" value="Insert Contract" class="btn btn-primary form-control">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            
                        </label>
                        <div class="col-md-6">
                            <a href="index.php?send_contract" class="btn btn-danger form-control">
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
    		$applicant = mysqli_real_escape_string($con,$_POST['applicant']);
    		$employer = mysqli_real_escape_string($con,$_POST['employer']);
    		$image = $_FILES['image']['name'];
			$temp_image = $_FILES['image']['tmp_name'];
			move_uploaded_file($temp_image, "contracts/$image");
			$insert_account = "INSERT INTO tbl_send (send_full_name,send_employer,send_filename) VALUES ('$applicant','$employer','$image')";
			$run_insert_account = mysqli_query($con,$insert_account);

                if($run_insert_account){

                    echo "
                        <script>
                            alert('Contract Has Been Inserted')
                        </script>
                    ";

                    echo "
                        <script>
                            window.open('index.php?send_contract','_self')
                        </script>
                    ";

                }else{

                    echo "
                        <script>
                            alert('Error Inserting Contract')
                        </script>
                    ";

                }

    	}
    ?>
<?php
	}
?>
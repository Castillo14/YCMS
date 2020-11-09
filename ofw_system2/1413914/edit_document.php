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
    if(isset($_GET['edit_document'])){
        $edit_id = $_GET['edit_document'];
        $edit_docu = "SELECT * FROM tbl_documents WHERE document_id = '$edit_id' AND removed = 'No'";
        $run_edit = mysqli_query($con,$edit_docu);
        $row_edit = mysqli_fetch_array($run_edit);
        $e_id = $row_edit['document_id'];
        $e_name = $row_edit['document_name'];
        $e_amount = $row_edit['amount'];
    }
?>
<div class="row"><!-- 1 row Starts -->
    <div class="col-lg-12"><!-- col-lg-12 Starts -->
        <ol class="breadcrumb"><!-- breadcrumb Starts -->
            <li>
                <i class="fa fa-file-text-o"></i>
                Documents / Edit Documents
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
                    Edit Documents
                </h3><!-- panel-title Ends -->
            </div><!-- panel-heading Ends -->
            <div class="panel-body"><!-- panel-body Starts -->
                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Document Name
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="document_name" class="form-control" required maxlength="74" minlength="2" onkeypress='return isAlphaKey(event)' value="<?php echo $e_name; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            Amount
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="amount" class="form-control" value="<?php echo $e_amount; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            
                        </label>
                        <div class="col-md-6">
                            <input type="submit" name="submit" value="Update Document" class="btn btn-primary form-control">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">
                            
                        </label>
                        <div class="col-md-6">
                            <a href="index.php?documents" class="btn btn-danger form-control">
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

                $document_name = mysqli_real_escape_string($con,$_POST['document_name']);
                $amount = mysqli_real_escape_string($con,$_POST['amount']);
                $update_document = "UPDATE tbl_documents SET document_name = '$document_name', amount = '$amount' WHERE document_id = '$e_id'";
                $run_update_document = mysqli_query($con,$update_document);
                if($run_update_document){

                    echo "
                        <script>
                            alert('Document Has Been Updated')
                        </script>
                    ";

                    echo "
                        <script>
                            window.open('index.php?documents','_self')
                        </script>
                    ";

                }else{

                    echo "
                        <script>
                            alert('Error Updating Document')
                        </script>
                    ";

                }
            }
        
    ?>
<?php
    }
?>
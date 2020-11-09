<?php
	session_start();
	include("../include/db.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="icon" type="image/x-icon" href="../../img/yaramay.ico">
	<title>Login Page - YARAMAY Computer Maintenance Services</title>
  	<link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  	<link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  	<link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  	<link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  	<link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
	<div style="background-image: url('../images/bg.PNG'); background-repeat: no-repeat; background-size: 100%;">
	<div class="login-box" style="opacity: .9;">
	  	<div class="login-box-body">
	  		<div class="login-logo">
    			<a href="#"><img src="../images/logo-2.PNG"></a>
	  		</div>
	  		<!-- /.login-logo -->
	    	<p class="login-box-msg">
	    		<i class="fa fa-lock"></i>
	    		Authentication required. Please enter your Username and Password below to proceed.
	    	</p>

	    	<form action="" method="post">
	      		<div class="form-group has-feedback">
	        		<input type="text" class="form-control" name="username" placeholder="Username" required>
	        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
	      		</div>
	      		<div class="form-group has-feedback">
	        		<input type="password" class="form-control" name="password" placeholder="Password" required>
	        		<span class="glyphicon glyphicon-lock form-control-feedback"></span>
	      		</div>
	     		<div class="row">
	        		<div class="col-xs-6">
	          			<a href="../index.php" class="btn btn-danger pull-left"><i class="fa fa-sign-out"></i> Cancel</a>
	        		</div>
	        		<!-- /.col -->
	        		<div class="col-xs-6">
	          			<button type="submit" name="acct_login" class="btn btn-primary pull-right"><i class="fa fa-sign-in"></i> Login</button>
	        		</div>
	        		<!-- /.col -->
	      		</div>
	    	</form>
			<br><br>
	    	<p class="login-box-msg">
	    		Copyright <i class="fa fa-copyright"></i> <?php date_default_timezone_set("Asia/Manila");
                                            $year_now = date("Y");
                                            echo "$year_now"; ?> YARAMAY Computer Maintenance Services <br>
	    		All Rights Reserved.
	    	</p>

	  	</div>
	  	<!-- /.login-box-body -->
	</div>
</div>
</body>
</html>
<?php

	if(isset($_POST['acct_login'])){

		$username = mysqli_real_escape_string($con,$_POST['username']);

		$password = mysqli_real_escape_string($con,$_POST['password']);

		$get_account = "SELECT * FROM tbl_job_order WHERE job_order_username = '$username' AND job_order_password = '$password'";

		$run_account = mysqli_query($con,$get_account);

		$count = mysqli_num_rows($run_account);

		$row_account = mysqli_fetch_array($run_account);

		if($count==1){

			

				$_SESSION['username']=$username;

				echo "
					<script>
						alert('You are Logged In')
					</script>
				";

				echo "
					<script>
						window.open('index.php?dashboard','_self')
					</script>
				";

		}else{

			echo "
				<script>
					alert('Username or Password is Wrong')
				</script>
			";

		}

	}

?>
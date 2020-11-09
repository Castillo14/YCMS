<?php
	session_start();
	include("../include/db.php");
	if(!isset($_SESSION['username'])){
		echo "
			<script>
				window.open('../login.php','_self')
			</script>
		";
	}else{
?>
<?php
	$account_session = $_SESSION['username'];
	$get_account = "SELECT * FROM tbl_accounts WHERE account_username = '$account_session' AND removed = 'No'";
	$run_account = mysqli_query($con,$get_account);
	$row_account = mysqli_fetch_array($run_account);
	$account_id = $row_account['account_id'];
	$first_name = $row_account['first_name'];
	$middle_name = $row_account['middle_name'];
	$last_name = $row_account['last_name'];
	$account_name = ucfirst($first_name) . " " . ucfirst($last_name);
	$creator = ucfirst($first_name) . " " . ucfirst($middle_name) . " " . ucfirst($last_name);
	$image = $row_account['image'];
	$job = $row_account['job'];
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="icon" type="image/x-icon" href="../../img/yaramay.ico">
		<title>YARAMAY Computer Maintenance Services</title>
		<link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
	    <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
	    <link rel="stylesheet" href="../../bower_components/jvectormap/jquery-jvectormap.css">
	    <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
	    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
	    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
	  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	  	<script src="../../js/jquery.min.js"></script>
        <script src="../../js/bootstrap.min.js"></script>	  	
	</head>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
	  		<header class="main-header">
	    		<a href="index.php" class="logo">
	      			<span class="logo-mini">YCMS</span>
	      			<span class="logo-lg"><b>YARAMAY</b></span>
	    		</a>
	    		<nav class="navbar navbar-static-top">
	      			<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
	        			<span class="sr-only">Toggle navigation</span>
	      			</a>
	      			<div class="navbar-custom-menu">
	        			<ul class="nav navbar-nav">
	          				<li class="dropdown user user-menu">
	            				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
	              					<img src="../account_images/<?php echo $image; ?>" class="user-image" alt="User Image">
	              					<span class="hidden-xs"><?php echo $account_name; ?></span>
	           					</a> 
	            				<ul class="dropdown-menu">
	              					<li class="user-header">
	                					<img src="../account_images/<?php echo $image; ?>" class="img-circle" alt="User Image">
	                					<p>
	                 						<?php echo $account_name; ?>
	                  						<small><?php echo $job; ?></small>
	                					</p>
	              					</li>
	              					<li class="user-footer">
	                					<div class="pull-right">
	                  						<a href="../logout.php" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Logout</a>
	               	 					</div>
	              					</li>
	            				</ul>
	          				</li> 
	        			</ul>
	      			</div>
	    		</nav>
	  		</header>
	  		<?php
	  			include("sidebar.php");
	  		?>
	  		<div class="content-wrapper">
	    		
	    		<?php
		    		if(isset($_GET['tabang'])){
	                    include("tabang.php");
	                }
	    		?>
	    		<?php
		    		if(isset($_GET['rescue_details'])){
	                    include("rescue_details.php");
	                }
	    		?>
	    		<?php
		    		if(isset($_GET['rescue_details2'])){
	                    include("rescue_details2.php");
	                }
	    		?>
	  		</div>
	  		<footer class="main-footer">	
	    		<strong>Copyright &copy;
	    			<?php
	    				date_default_timezone_set("Asia/Manila");
                        $year_now = date("Y");
                        echo "$year_now";
                    ?>
                <a href="#">YARAMAY Computer Maintenance Services</a>.</strong> All Rights Reserved
	  		</footer>
	  		<div class="control-sidebar-bg"></div>
		</div>

		<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
		<script src="../../dist/js/adminlte.min.js"></script>
		<script src="../../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
		<script src="../../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
		<script src="../../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
		<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
		<script src="../../bower_components/Chart.js/Chart.js"></script>
		<script src="../../dist/js/pages/dashboard2.js"></script>
		<script src="../../dist/js/demo.js"></script>
		<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
		<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	</body>
</html>
<?php
	}
?>
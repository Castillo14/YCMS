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
	 $jScript = md5(rand(1,9));
	 $newScript = md5(rand(1,9));
	 $Script = md5(rand(1,9));
	 $getProfile = md5(rand(1,9));
?>
<aside class="main-sidebar">
	<section class="sidebar">
		<div class="user-panel">
			<div class="pull-left image">
				<img src="../account_images/<?php echo $image; ?>" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p><?php echo $account_name; ?></p>
			</div>
		</div>
		<ul class="sidebar-menu" data-widget="tree">
			
 			<li class="<?php if(isset($_GET['tabang'])){ echo "active"; } ?><?php if(isset($_GET['rescue_details'])){ echo "active"; } ?>">
        		<a href="index.php?tabang">
            		<i class="fa fa-users"></i><span>Tabang</span>
            		<span class="pull-right-container"></span>
        		</a>
 			</li>
    		<li>
       			<a href="../logout.php">
           			<i class="fa fa-sign-out"></i><span>Logout</span>
           			<span class="pull-right-container"></span>
       			</a> 
    		</li> 
		</ul>
	</section>
</aside>
<?php
	}
?>
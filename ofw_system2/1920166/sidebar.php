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
			<li class="<?php if(isset($_GET['dashboard'])){ echo "active"; } ?>">
        		<a href="index.php?dashboard">
            		<i class="fa fa-dashboard"></i><span>Dashboard</span>
            		<span class="pull-right-container"></span>
        		</a>
 			</li>
			<li class="treeview <?php if(isset($_GET['waiting_applicants'])){ echo "active"; } ?><?php if(isset($_GET['add_waiting_applicant'])){ echo "active"; } ?><?php if(isset($_GET['edit_waiting_applicant'])){ echo "active"; } ?><?php if(isset($_GET['delete_waiting_applicant'])){ echo "active"; } ?><?php if(isset($_GET['processing_applicants'])){ echo "active"; } ?><?php if(isset($_GET['add_processing_applicant'])){ echo "active"; } ?><?php if(isset($_GET['edit_processing_applicant'])){ echo "active"; } ?><?php if(isset($_GET['delete_processing_applicant'])){ echo "active"; } ?>">
				<a href="">
					<i class="fa fa-folder-open-o"></i> <span>Applicants</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li class="<?php if(isset($_GET['waiting_applicants'])){ echo "active"; } ?><?php if(isset($_GET['add_waiting_applicant'])){ echo "active"; } ?><?php if(isset($_GET['edit_waiting_applicant'])){ echo "active"; } ?><?php if(isset($_GET['delete_waiting_applicant'])){ echo "active"; } ?>">
						<a href="index.php?waiting_applicants"><i class="fa fa-users"></i>
							Waiting Applicants
						</a>
					</li>
					<li class="<?php if(isset($_GET['processing_applicants'])){ echo "active"; } ?><?php if(isset($_GET['add_processing_applicant'])){ echo "active"; } ?><?php if(isset($_GET['edit_processing_applicant'])){ echo "active"; } ?><?php if(isset($_GET['delete_processing_applicant'])){ echo "active"; } ?>">
						<a href="index.php?processing_applicants"><i class="fa fa-black-tie"></i> Processing Applicants</a>
					</li>
				</ul>
			</li>
			<li class="<?php if(isset($_GET['employers'])){ echo "active"; } ?><?php if(isset($_GET['add_employer'])){ echo "active"; } ?><?php if(isset($_GET['edit_employer'])){ echo "active"; } ?><?php if(isset($_GET['delete_employer'])){ echo "active"; } ?>">
        		<a href="index.php?employers">
            		<i class="fa fa-briefcase"></i><span>Employers</span>
            		<span class="pull-right-container"></span>
        		</a>
    		</li>
    		<li class="<?php if(isset($_GET['documents'])){ echo "active"; } ?><?php if(isset($_GET['add_document'])){ echo "active"; } ?><?php if(isset($_GET['edit_document'])){ echo "active"; } ?><?php if(isset($_GET['delete_document'])){ echo "active"; } ?>">
        		<a href="index.php?documents">
            		<i class="fa fa-file-text-o"></i><span>Documents</span>
            		<span class="pull-right-container"></span>
        		</a>
    		</li>
    		<li class="<?php if(isset($_GET['profile'])){ echo "active"; } ?>">
        		<a href="index.php?jScript=<?php echo $jScript; ?> && newScript=<?php echo $newScript; ?> && profile=<?php echo $account_id; ?> && editProfile=<?php echo $getProfile; ?>">
            		<i class="fa fa-gear"></i><span>Edit Profile</span>
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
<?php
	if(!isset($_SESSION['username'])){
		echo "
			<script>
				window.open('login.php','_self')
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
	    		<!-- sidebar: style can be found in sidebar.less -->
	    		<section class="sidebar">
	      			<!-- Sidebar user panel -->
	      			<div class="user-panel">
	        			<div class="pull-left image">
	          				<img src="../employer_images/<?php echo $image; ?>" class="img-circle" alt="User Image">
	        			</div>
	        			<div class="pull-left info">
	          				<p><?php echo $account_name; ?></p>
	          				
	        			</div>
	      			</div>
	      			<!-- search form -->
	      			
	      			<!-- /.search form -->
	      			<!-- sidebar menu: : style can be found in sidebar.less -->
	      			<ul class="sidebar-menu" data-widget="tree">
	      				<li class="<?php if(isset($_GET['dashboard'])){ echo "active"; } ?>">
			        		<a href="index.php?dashboard">
			            		<i class="fa fa-dashboard"></i><span>Dashboard</span>
			            		<span class="pull-right-container"></span>
			        		</a>
			 			</li>
	        			
		          				
		          				<li class="<?php if(isset($_GET['employees'])){ echo "active"; } ?>">
					                <a href="index.php?employees">
					                    <i class="fa fa-users"></i><span>Processing Employees</span>
					                    <span class="pull-right-container"></span>
					                </a>
					            
					            </li>
					            <li class="<?php if(isset($_GET['deployed_employees'])){ echo "active"; } ?>">
					                <a href="index.php?deployed_employees">
					                    <i class="fa fa-users"></i><span>Deployed Employees</span>
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
					               <a href="logout.php">
					                   <i class="fa fa-sign-out"></i><span>Logout</span>
					                   <span class="pull-right-container"></span>
					               </a> 
					            </li> 
	        		
	      			</ul>
	    		</section>
	    	<!-- /.sidebar -->
	  		</aside>
	  		<?php
	  	}

	  		?>
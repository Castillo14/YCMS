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
	          				<img src="" class="img-circle" alt="User Image">
	        			</div>
	        			<div class="pull-left info">
	          				<p>Agency</p>
	          				
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
	        			
		          				
		          				<li class="<?php if(isset($_GET['send_contract'])){ echo "active"; } ?> <?php if(isset($_GET['add_send'])){ echo "active"; } ?>">
					                <a href="index.php?send_contract">
					                    <i class="fa fa-users"></i><span>Send Contract</span>
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
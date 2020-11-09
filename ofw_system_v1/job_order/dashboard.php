 <?php

				if(!isset($_SESSION['username'])){

					echo "
						<script>
							window.open('login.php','_self')
						</script>
					";

				}else{

			?>
			<section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        
        
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
	
			<?php

				}

			?>
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
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $count_total_applicants; ?></h3>

              <p>Total Employees</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="index.php?waiting_applicants" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
	
			<?php

				}

			?>
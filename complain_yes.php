<?php

    include("include/db.php");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="img/yaramay.ico">
    <title>Yaramay Computer Maintenance Services</title>
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css2/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css2/animate.css">
    <link rel="stylesheet" href="css2/owl.carousel.min.css">
    <link rel="stylesheet" href="css2/owl.theme.default.min.css">
    <link rel="stylesheet" href="css2/magnific-popup.css">
    <link rel="stylesheet" href="css2/aos.css">
    <link rel="stylesheet" href="css2/ionicons.min.css">
    <link rel="stylesheet" href="css2/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css2/jquery.timepicker.css">
    <link rel="stylesheet" href="css2/flaticon.css">
    <link rel="stylesheet" href="css2/icomoon.css">
    <link rel="stylesheet" href="css2/style.css">
</head>

<body onload="getLocation()">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" data-aos="fade-down" data-aos-delay="500">
      <div class="container">
        <a class="navbar-brand" href="index.php">Y A R A M A Y</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
            <li class="nav-item"><a href="packages.php" class="nav-link">Packages</a></li>
            <li class="nav-item"><a href="team.php" class="nav-link">Team</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item active"><a href="tabang.php" class="nav-link">Tabang</a></li>
            <li class="nav-item"><a href="ofw_system_v1/index.php" class="nav-link">System V1</a></li>
            <li class="nav-item"><a href="system_v2/login.php" class="nav-link">System V1.1</a></li>
            <li class="nav-item"><a href="ofw_system2/login.php" class="nav-link">System V2</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <section class="ftco-cover" style="background-image: url(img/bg_1.jpg);" id="section-home" data-aos="fade"  data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center ftco-vh-75">
          <div class="col-md-7">
            <h1 class="ftco-heading mb-3" data-aos="fade-up" data-aos-delay="500">May Reklamo Ka Ba ?</h1>
            <h2 class="h5 ftco-subheading mb-5" data-aos="fade-up"  data-aos-delay="600">Mag fill up lamang sa ibaba ng iyong pangalan, lokasyon, at ang iyong mga reklamo. Pakilakip kung merong picures, videos, o anumang ebidensya na nagpapatunay.</h2>    
            <!-- <p data-aos="fade-up"  data-aos-delay="700"><a href="https://free-template.co/" target="_blank" class="btn btn-outline-white px-4 py-3" data-toggle="modal" data-target="#reservationModal">Go Get This Template</a></p> -->
          </div>
        </div>
      </div>
    </section>

    <div class="ftco-section contact-section">
    <div class="container">
      <div class="row block-9">
        <div class="col-md-12 pr-md-5">
          <form action="complain_list.php" method="POST" enctype="multipart/form-data">
            
            <div class="form-group">
              <label for="passport">
                Passport Number (If Known) / Numero ng Pasaporte (Kung Alam) :
              </label>
              <input type="text" class="form-control" name="passport">
            </div>
            <div class="form-group">
              <label for="iqama">
                Saudi Residence ID (Iqama) Number (If Available) / Number ng Saudi Residence ID o Iqama (Kung Meron) :
              </label>
              <input type="text" class="form-control" name="iqama">
            </div>
            
     
            <div class="form-group">
              <input type="submit" name="submit" value="Search" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        
        </div>
        

      </div>

    </div>
    
  </div>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-8">
          <div class="ftco-footer-widget mb-4">
            <ul class="ftco-footer-social list-unstyled float-md-right float-lft">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-google"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <h6>
Copyright &copy;<script>document.write(new Date().getFullYear());</script><span style="color: blue;"> YARAMAY Computer Maintenance Services.</span> All rights reserved</h6>
        </div>
      </div>
    </div>
  </footer>




    <script src="js2/jquery.min.js"></script>
    <script src="js2/jquery-migrate-3.0.1.min.js"></script>
    <script src="js2/popper.min.js"></script>
    <script src="js2/bootstrap.min.js"></script>
    <script src="js2/jquery.easing.1.3.js"></script>
    <script src="js2/jquery.waypoints.min.js"></script>
    <script src="js2/jquery.stellar.min.js"></script>
    <script src="js2/owl.carousel.min.js"></script>
    <script src="js2/jquery.magnific-popup.min.js"></script>
    <script src="js2/aos.js"></script>
    <script src="js2/jquery.animateNumber.min.js"></script>
    <script src="js2/main.js"></script>
</body>
</html>
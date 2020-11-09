<?php

    include("include/db.php");

?>
<?php


  if(isset($_GET['data'])){

    $edit_id = $_GET['data'];
    $edit_accnt = "SELECT * FROM tbl_tabang WHERE tabang_id = '$edit_id'";
    $run_edit = mysqli_query($con,$edit_accnt);
    $row_edit = mysqli_fetch_array($run_edit);
    $e_id = $row_edit['tabang_id'];
    $e_fname = $row_edit['first_name'];
    $e_mname = $row_edit['middle_name'];
    $e_lname = $row_edit['last_name'];
    $e_gender = $row_edit['gender'];
    $e_passport = $row_edit['passport'];
    $e_iqama = $row_edit['iqama'];
    $e_email_address = $row_edit['email_address'];
    $e_occupation = $row_edit['occupation'];
        $e_contact_number = $row_edit['contact_number'];
        $e_contact_number2 = $row_edit['contact_number2'];
    $e_location = $row_edit['location_ksa'];
    $e_employer = $row_edit['employer_name'];
    $e_employer_contact = $row_edit['employer_contact'];
    $e_saudi = $row_edit['saudi_agency'];
    $e_agency = $row_edit['agency'];
    $e_complain = $row_edit['complain'];
  }

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
            <h2 class="h5 ftco-subheading mb-5" data-aos="fade-up"  data-aos-delay="600">Pwede nyo mapalitan ang iyong numero, email at lokasyon</h2>    
            <!-- <p data-aos="fade-up"  data-aos-delay="700"><a href="https://free-template.co/" target="_blank" class="btn btn-outline-white px-4 py-3" data-toggle="modal" data-target="#reservationModal">Go Get This Template</a></p> -->
          </div>
        </div>
      </div>
    </section>

    <div class="ftco-section contact-section">
    <div class="container">
      <div class="row block-9">
        <div class="col-md-12 pr-md-5">
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="first_name">
                First Name / Pangalan * :
              </label>
              <input type="text" class="form-control" name="first_name" onkeypress='return isAlphaKey(event)' required value="<?php echo $e_fname; ?>" >
            </div>
            <div class="form-group">
              <label for="middle_name">
                Middle Name / Panggitnang Apelyido :
              </label>
              <input type="text" class="form-control" onkeypress='return isAlphaKey(event)' name="middle_name" value="<?php echo $e_mname; ?>" >
            </div>
            <div class="form-group">
              <label for="last_name">
                Last Name / Apelyido * :
              </label>
              <input type="text" class="form-control" onkeypress='return isAlphaKey(event)' name="last_name" required value="<?php echo $e_lname; ?>" >
            </div>
           <div class="form-group">
              <label for="gender">
                Gender / Kasarian * :
              </label>
              <select name="gender" class="form-control">
                <option name="gender" value="<?php echo $e_gender; ?>"><?php echo $e_gender; ?></option>
               
              </select>
            </div>
            <div class="form-group">
              <label for="passport">
                Passport Number (If Known) / Numero ng Pasaporte (Kung Alam) :
              </label>
              <input type="text" class="form-control" name="passport" value="<?php echo $e_passport; ?>" >
            </div>
            <div class="form-group">
              <label for="iqama">
                Saudi Residence ID (Iqama) Number (If Available) / Number ng Saudi Residence ID o Iqama (Kung Meron) :
              </label>
              <input type="text" class="form-control" name="iqama" value="<?php echo $e_iqama; ?>" >
            </div>
            <div class="form-group">
              <label for="email_address">
                Email or Facebook Name / Email o Pangalan sa Facebook :
              </label>
              <input type="text" class="form-control" name="email_address" value="<?php echo $e_email_address; ?>" >
            </div>
            <div class="form-group">
              <label for="occupation">
                Occupation / Trabaho * :
              </label>
              <select name="occupation" class="form-control">
                <option name="occupation" value="<?php echo $e_occupation; ?>"><?php echo $e_occupation; ?></option>
                
              </select>
            </div>
            <div class="form-group">
              <label for="contact_number">
                Personal Telephone Number (If Any) / Sariling Telepono (Kung Meron) :
              </label>
              <input type="text" class="form-control" name="contact_number" onkeypress='return isNumericKey(event)' value="<?php echo $e_contact_number2; ?>">
            </div>
            <div class="form-group">
              <label for="contact_number2">
                Other Telephone Numbers To Contact (If Any) / Ibang Telepono (Kung Meron) :
              </label>
              <input type="text" class="form-control" name="contact_number2" onkeypress='return isNumericKey(event)' value="<?php echo $e_contact_number2; ?>" >
            </div>
            <div class="form-group">
              <label for="location">
               Location in KSA / Lokasyon sa Saudi * :
              </label>
              <textarea name="location" id="" required cols="30" rows="7" class="form-control" required><?php echo $e_location; ?></textarea>
            </div>
            <div class="form-group">
              <label for="employer">
                Name of Employer / Pangalan ng Employer :
              </label>
              <input type="text" class="form-control" name="employer"value="<?php echo $e_employer; ?>" >
            </div>
            <div class="form-group">
              <label for="employer_contact">
                Telephone Number of Employer (If Known) / Telepono ng Amo (Kung Alam) :
              </label>
              <input type="text" class="form-control" name="employer_contact" onkeypress='return isNumericKey(event)'value="<?php echo $e_employer_contact; ?>">
            </div>
            <div class="form-group">
              <label for="saudi_agency">
                Name of Saudi Recruitment Agency (If Known) / Pangalan ng Recruitment Agency sa Saudi (Kung Alam) :
              </label>
              <input type="text" class="form-control" name="saudi_agency" value="<?php echo $e_saudi; ?>" >
            </div>
            <div class="form-group">
              <label for="agency">
                Name of Recruitment Agency in the Philippines (If Known) / Pangalan ng Recruitment Agency sa Pilipinas (Kung Alam) :
              </label>
              <input type="text" class="form-control" name="agency" value="<?php echo $e_agency; ?>" >
            </div>
            <div class="form-group">
              <label for="complain">
                Complaint / Reklamo * :
              </label>
              <textarea name="complain" id="" required cols="30" rows="7" class="form-control"><?php echo $e_complain; ?></textarea>
            </div>
           
           <div class="form-group">
      <label for="latitude">
                Latitude :
              </label>
                <input type="text" class="form-control" name="latitude" disabled id="lat" >
           
                
            </div>
      <div class="form-group">
      <label for="longitude">
                Longitude :
              </label>
                
                 <input type="text" class="form-control" name="longitude" disabled id="lng" >
              
            </div>
      <div class="form-group">
      
                  <input type="text" class="form-control" name="lat" hidden id="latt" required>
                 <input type="text" class="form-control" name="lng" hidden id="lngg" required>
            </div>
            <div class="form-group">
                <p id="demo"></p>
            </div>
            <div class="form-group">
             <input type="submit" name="submit" value="Send" class="btn btn-primary py-3 px-5">
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

   <?php

            if(isset($_POST['submit'])){

    
        
            $first_name = mysqli_real_escape_string($con,$_POST['first_name']);
            $middle_name = mysqli_real_escape_string($con,$_POST['middle_name']);
            $last_name = mysqli_real_escape_string($con,$_POST['last_name']);
            $gender = mysqli_real_escape_string($con,$_POST['gender']);
            $passport = mysqli_real_escape_string($con,$_POST['passport']);
            $iqama = mysqli_real_escape_string($con,$_POST['iqama']);
            $email_address = mysqli_real_escape_string($con,$_POST['email_address']);
            $occupation = mysqli_real_escape_string($con,$_POST['occupation']);
            $contact_number = mysqli_real_escape_string($con,$_POST['contact_number']);
            $contact_number2 = mysqli_real_escape_string($con,$_POST['contact_number2']);
            $location = mysqli_real_escape_string($con,$_POST['location']);
            $employer = mysqli_real_escape_string($con,$_POST['employer']);
            $employer_contact = mysqli_real_escape_string($con,$_POST['employer_contact']);
            $saudi_agency = mysqli_real_escape_string($con,$_POST['saudi_agency']);
            $agency = mysqli_real_escape_string($con,$_POST['agency']);
            $complain = mysqli_real_escape_string($con,$_POST['complain']);
     
            $fullname = ucfirst($first_name) . " " . ucfirst($middle_name) . " " . ucfirst($last_name);
             $latitude = mysqli_real_escape_string($con,$_POST['lat']);
            $longitude = mysqli_real_escape_string($con,$_POST['lng']);

            $message = "Name : " . $fullname . ", Contact Number : " . $contact_number . ", Location : " . $location . ", Complain : " . $complain;
            $contact = "09087474842";

            function itexmo($contact,$message,$apicode){
              $url = 'https://www.itexmo.com/php_api/api.php';

              $apicode = "TR-WOOPI678371_KE8WU";

              $itexmo = array('1' => $contact, '2' => $message, '3' => $apicode);
              $param = array(
                'http' => array(
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($itexmo),
              ),
            );

            $context = stream_context_create($param);
            return file_get_contents($url, false, $context);
}
            $result = itexmo("$contact","$message","API_CODE");
            if($result == ""){
              
            }else{
              if($result == 0){
                echo "Message Sent";


$to = "sab_princes@yahoo.com, yaramaycms2018@gmail.com";
          //$to = "avilafrncs19@gmail.com";
  $subject = "Sample mailing";
  $message = "Name : " . $fullname . ", Contact Number : " . $contact_number . ", Location : " . $location . ", Complain : " . $complain;
  $headers = "From: avilafrncs19@gmail.com";

  if(mail($to, $subject, $message, $headers)) {
    echo "Mail Send Successfuly";




               $insert_rescue = "INSERT INTO tbl_tabang (first_name,middle_name,last_name,gender,passport,iqama,email_address,occupation,contact_number,contact_number2,location_ksa,employer_name,employer_contact,saudi_agency,agency,complain,actual_langitude,actual_longitude,date_created) VALUES ('$first_name','$middle_name','$last_name','$gender','$passport','$iqama','$email_address','$occupation','$contact_number','$contact_number2','$location','$employer','$employer_contact','$saudi_agency','$agency','$complain','$latitude','$longitude',now())";

            $run_insert_rescue = mysqli_query($con,$insert_rescue);

            if($run_insert_rescue){

                echo "
                    <script>
                        alert('Complain Has Been Submitted | Reklamo Ay Naipadala')
                    </script>
                ";

                echo "
                    <script>
                        window.open('index.php','_self')
                    </script>
                ";

            }else{

                    echo "
                        <script>
                            alert('Error Submitting Complain')
                        </script>
                    ";

                }

              }
            }

           }
            
}


    ?>

 <script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {


    document.getElementById("lat").value = position.coords.latitude ;
   document.getElementById("lng").value = position.coords.longitude ;
   document.getElementById("latt").value = position.coords.latitude ;
   document.getElementById("lngg").value = position.coords.longitude ;
     
}


</script>


 
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
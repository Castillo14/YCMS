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

            include("../../include/db.php");

             ?>
<?php
	if(isset($_GET['rescue_details2'])){
		$edit_id = $_GET['rescue_details2'];
		$edit_accnt = "SELECT * FROM tbl_rescue WHERE rescue_id = '$edit_id'";
		$run_edit = mysqli_query($con,$edit_accnt);
		$row_edit = mysqli_fetch_array($run_edit);
		$e_id = $row_edit['rescue_id'];
		
        $e_long = $row_edit['longitude'];
		$e_lat = $row_edit['latitude'];
	}
?>

               

                            <button onclick='my_map_add()'>View Actual Location </button>

           <a href="https://www.latlong.net/c/?lat=<?php echo $e_lat; ?>&long=<?php echo $e_long; ?>" target="_blank">(<?php echo $e_lat; ?>, <?php echo $e_long; ?>)</a>

                     

     
<script type="text/javascript">
function my_map_add() {

var myMapCenter = new google.maps.LatLng(<?php echo $e_lat; ?>, <?php echo $e_long; ?>);
var myMapProp = {center:myMapCenter, zoom:18, scrollwheel:false, draggable:true, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("my_map_addd"),myMapProp);
var marker = new google.maps.Marker({position:myMapCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJN2Y7Qi9o8bSXRbr3q1emjiS78-_yOBw"></script>

<?php
	}
?>
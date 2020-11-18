<?php
	$con = mysqli_connect("localhost","urafnghd_ofw","","urafnghd_ofw");

	if(mysqli_connect_errno()){

		echo "Failed to connect to MYSQL: " . mysqli_connect_error();
		
	}
	$conn = mysqli_connect("localhost","urafnghd_polo","","urafnghd_polo");

	if(mysqli_connect_errno()){

		echo "Failed to connect to MYSQL: " . mysqli_connect_error();
		
	}
?>
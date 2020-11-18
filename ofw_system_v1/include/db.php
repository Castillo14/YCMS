<?php
	$con = mysqli_connect("localhost","urafnghd_root","reniertrenuela9","urafnghd_ofw");

	if(mysqli_connect_errno()){

		echo "Failed to connect to MYSQL: " . mysqli_connect_error();
		
	}
	$conn = mysqli_connect("localhost","urafnghd_root","reniertrenuela9","urafnghd_polo");

	if(mysqli_connect_errno()){

		echo "Failed to connect to MYSQL: " . mysqli_connect_error();
		
	}
?>
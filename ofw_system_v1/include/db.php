<?php
	$con = mysqli_connect("localhost","u577886912_ofw","yaramay2019!","u577886912_ofw");

	if(mysqli_connect_errno()){

		echo "Failed to connect to MYSQL: " . mysqli_connect_error();
		
	}
	$conn = mysqli_connect("localhost","u577886912_polo","polo2019","u577886912_polo");

	if(mysqli_connect_errno()){

		echo "Failed to connect to MYSQL: " . mysqli_connect_error();
		
	}
?>
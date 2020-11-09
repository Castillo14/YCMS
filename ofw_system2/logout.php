<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="icon" type="image/x-icon" href="images/title.ico">
	<title>Logging Out</title>
</head>
<body>
	<br><br><br>
	<h1 align="center">
		<?php
			session_start();
			session_destroy();
			echo "Logging out .... Please wait ...";
			header('Refresh: 3;url=login.php');
			exit();
		?>
	</h1>
</body>
</html>
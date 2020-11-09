<!DOCTYPE html>
<html>
<head>
	<title>Txt</title>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<label>message :</label>
		<input type="text" name="txt">
		<label>number :</label>
		<input type="text" name="number">
		<input type="submit" name="submit" value="Send">
	</form>
	<?php

	if(isset($_POST['submit'])){

		$txt = $_POST['txt'];
            $contact = $_POST['number'];

            $message =  $txt;

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
            		}
           

	}
}


	?>
</body>
</html>
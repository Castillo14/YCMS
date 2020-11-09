<?php 

	$to = "avilafrncs19@gmail.com, josephineavila099@gmail.com, avilafrncs97@gmail.com";
	$subject = "Sample mailing";
	$message = "sending sample";
	$headers = "From: charisejoyescabusa@gmail.com";

	if(mail($to, $subject, $message, $headers)) {
		echo "Mail Send Successfuly";
	}else{
		echo "Cannot send mail";
	}

?>
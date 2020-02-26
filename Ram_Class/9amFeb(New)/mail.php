<?php 
//sending an HTML email

$to="rambabburi@gmail.com";
$subject = "Account Activation";
$message="Hi Ram,<br>Thanks for creating a acocunt with us<br><br><a href=''>Activate Here</a><br><br>Thanks<br>team";

$headers = "Content-Type:text/html";

if(mail($to,$subject,$message,$headers))
{
	echo "Mail sent successfully";
}
else
{
	echo "Sorry! Unable to sent an Email";
}

?>
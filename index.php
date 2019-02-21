<?php
$to = "rahul@example.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: pankaj@example.com, dinesh@example.com";


if(mail($to,$subject,$txt,$headers))
{
	echo "Email sent";
}
?>

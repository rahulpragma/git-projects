<?php
$to = "rahul@example.com";
$subject = "This is my subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: pankaj@example.com, dinesh@example.com, nupendra@example.com";

if(mail($to,$subject,$txt,$headers))
{
	echo "Email sent";
}

mail($to,$subject,$txt,$headers)
echo "Message Sent"

?>

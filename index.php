<?php
$to = "rahul@example.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: pankaj@example.com";

mail($to,$subject,$txt,$headers);
?>
<?php
$to = "rahul@example.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: somebody@example.com";

mail($to,$subject,$txt,$headers);
?>

<?php
$to = "vukovicmiomir@yahoo.com";
$subject = $_POST['subject'];
$txt = "Hello world!";
$message = $_POST['message'];
$headers = "From: Antiqe Shop";

mail($to,$message,"$subject",$headers);
?>

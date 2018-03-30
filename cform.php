<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailfrom = $_POST['email'];
  $message = $_POST['message'];

  $mailTo = "vukovicmiomir@yahoo.com";
  $headers = "From: ".$mailfrom;
  $txt = "You have new mail frooooooom: ".$name.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.php?mailsend");
}

?>

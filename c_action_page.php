<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

$mailTo = "exmaple@mail.com";
$headers = "From: ".$mailFrom;
$txt = "Message From ".$name."\n\n".$message;

mail($mailTo,$subject,$txt,$headers);
echo "<div class='alert alert-primary alert-dismissible'>
      <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  Message Sended Succesfully</div>";
header("Location: contact.php?mailsend");
}
 ?>

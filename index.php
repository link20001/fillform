<?php
  $name = $_POST['FILE'];
  $visitor_email = $_POST['soneyeazla@gmail.com'];
  $message = $_POST['message'];
?>
<?php

$to = "soneyeazla@gmail.com";

$headers = "From: beccaariana16@gmail.com \r\n";

$headers .= "Reply-To: soneyeazla@gmail.com \r\n";

mail($to,$email_subject,$email_body,$headers);

?>
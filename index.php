<?php
  $name = $_POST['FILE'];
  $visitor_email = $_POST['soneyeazla@gmail.com'];
  $message = $_POST['message'];
?>
<?php

$to = "soneyeazla@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

?>
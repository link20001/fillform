<?php
  $name = $_POST['FORM'];
  $visitor_email = $_POST['soneyeazla@gmail.com'];
  $message = $_POST['message'];
?>
<?php

$to = "soneyeazla@gmail.com";

$headers = "From: beccaariana16@gmail.com \r\n";

$headers .= "Reply-To: soneyeazla@gmail.com \r\n";

mail($to,$email_subject,$email_body,$headers);

$formproc->AddFileUploadField('photo','jpg,jpeg,gif,png,bmp',2024);
$formproc->AddFileUploadField('resume','doc,docx,pdf,txt',2024);
$formproc->AddFileUploadField('newupload','',2024);//<<------- New file upload

?>

<?php
  $email_from = 'https://link20001.github.io/fillform/';
  $email_subject = "New Form submission";
  $email_body = "You have received a new message from the user $name.\n".
                          "Here is the message:\n $message"
?>

<?php

  $to = "soneyeazla@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

 ?>
 <?php
function IsInjected($str)
{
    $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );
               
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    
    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}
?>

<?php
if(isset($_POST['name']) && $_POST['name'] != '')
{

  $username = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to = "vattallursrdayurveda@gmail.com";
  $body = "";

  $body .= "From:".$username."\r\n";
  $body .= "Email:".$email."\r\n";
  $body .= "Subject:".$subject."\r\n";
  $body .= "Message:".$message."\r\n";

  $send_email = mail($to,$subject,$body);

  echo ($send_email == true) ? 'success' : 'error';
}
?>

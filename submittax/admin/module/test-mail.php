<?php 
define("EMAIL_USE_SMTP", true);
define("EMAIL_SMTP_HOST", "localhost");
define("EMAIL_SMTP_AUTH", false);
define("EMAIL_SMTP_USERNAME", "hello@submittax.com");
define("EMAIL_SMTP_PASSWORD", "Admin@submittax5286");
define("EMAIL_SMTP_PORT", 25);
define("EMAIL_SMTP_ENCRYPTION", "tsl");

$to_email = 'utkarshsingharvind@gmail.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: hello@submittax.com';
mail($to_email,$subject,$message,$headers);

?>
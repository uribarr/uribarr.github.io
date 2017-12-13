

<?php

    //return "success"; die(); // Remove this line in live site, it is only for testing

if($_REQUEST['name'] == '' || $_REQUEST['email'] == '' || $_REQUEST['subject'] == '' || $_REQUEST['message'] == ''):
  return "error";
endif;

if (filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)):

      // Receiver email address (Change it to your Email ID)
//  $to = 'webmaster@funkyjunkytechies.com';
  $to = 'labudiu@gmail.com';

      // prepare header
$header = 'From: '. $_REQUEST['name'] . ' <'. $_REQUEST['email'] .'>'. "\r\n";
$header .= 'Reply-To:  '. $_REQUEST['name'] . ' <'. $_REQUEST['email'] .'>'. "\r\n";
      // $header .= 'Cc:  ' . 'example@domain.com' . "\r\n";
      // $header .= 'Bcc:  ' . 'example@domain.com' . "\r\n";
$header .= 'X-Mailer: PHP/' . phpversion();

      // Contact Subject
$subject = 'Email from Angles HTML5 Template'; // Subject of your email

      // Contact Message
$message .= 'Name: ' . $_REQUEST['name'] . "\n";
$message .= 'Email: ' . $_REQUEST['email'] . "\n";
$message .= 'Subject: ' . $_REQUEST['subject'] . "\n";
$message .= 'Message: '. $_REQUEST['message'];

      // Send contact information
$mail = mail( $to, $subject , $message, $header );

return $mail ? "success" : "error";
else:
  return "error";
endif;
?>
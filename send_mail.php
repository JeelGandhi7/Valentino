<?php
   require 'PHPmailer-master/PHPMailerAutoload.php';
   
$mail = new PHPMailer();
$mail ->IsSmtp();
$mail ->SMTPDebug = 0;
$mail ->SMTPAuth = true;
$mail ->SMTPSecure = 'ssl';

$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);

   //$mail ->Host = "tls.gmail.com";
   $mail->Host = 'smtp.gmail.com';
   //$mail->Host = 'tls://smtp.gmail.com';
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "patelpreeta3554@gmail.com";
   $mail ->Password = "PatelgmaiL3554";
   $mail ->SetFrom("patelpreeta3554@gmail.com");
   $mail ->Subject = "OTP | Ashoka";
   $mail ->Body = "Your OTP is:-";
   $mail ->AddAddress("usutsav87@gmail.com");

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
	    echo "$mail->ErrorInfo";
   }
   else
   {
       echo "Mail Sent";
	    
   }
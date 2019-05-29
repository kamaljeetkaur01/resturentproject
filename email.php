<?php

include "class.phpmailer.php"; // include the class name			
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 587; // or 587//465
$mail->IsHTML(true);
$mail->Username = "rkaur9705@gmail.com";
$mail->Password = "babbu1babbu";
$mail->SetFrom("rkaur9705@gmail.com");
$mail->Subject = "Your Gmail SMTP Mail subject";
$mail->Body = "your email bosy text";
$mail->AddAddress("dhillon.sarb44@gmail.com");
 if(!$mail->Send()){
	echo "Mailer Error: " . $mail->ErrorInfo;
} 
else
{
	echo "Message has been sent";
}
?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';
require "vendor/autoload.php";
$mail = new PHPMailer(true);
$name= $_POST["name"];
$email= $_POST["email"];
$subject= $_POST["subject"];
$message= $_POST["message"];
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->port = 587;
$mail->Username="sruthynagesh2018@gmail.com";
$mail->password="malu@4910";
$mail->setFrom($email,$name);
$mail->addAddress('sruthynagesh2018@gmail.com');
$mail->subject=$subject;
$mail->Body=$message;
$mail->send();
echo "email send";
?>

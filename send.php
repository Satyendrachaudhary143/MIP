<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'vendor/autoload.php';
// $mail = PHPMailer();
// $mail->SMTPDebug = 2;                   // Enable verbose debug output
// $mail->isSMTP();                        // Set mailer to use SMTP
// $mail->Host       = 'smtp.gfg.com;';    // Specify main SMTP server
// $mail->SMTPAuth   = true;               // Enable SMTP authentication
// $mail->Username   = 'iamhindu.satyendra@gmail.com';     // SMTP username
// $mail->Password   = 'rxwwedcbitxpjdhz';         // SMTP password
// $mail->SMTPSecure = 'tls';              // Enable TLS encryption, 'ssl' also accepted
// $mail->Port       = 587;                // TCP port to connect to




// To Remove unwanted errors
error_reporting(0);

// Add your connection Code
include "connection.php";

// Important Files (Please check your file path according to your folder structure)
require "./PHPMailer-master/src/PHPMailer.php";
require "./PHPMailer-master/src/SMTP.php";
require "./PHPMailer-master/src/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


$username =$_POST['username'];
$email = $_POST['email'];
$num = $_POST['number'];
$subject = $_POST['subject'];
$sms =$_POST['sms'];

function sendMail($name, $emails, $number,$sub,$mess) {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Enter your email ID
    $mail->Username = "iamhindu.satyendra@gmail.com";
    $mail->Password = "rxwwedcbitxpjdhz";

    // Your email ID and Email Title
    $mail->setFrom($emails, "satyendra");

    $mail->addAddress("satyendrachaudhary38@gmail.com");

    // You can change the subject according to your requirement!
    $mail->Subject = $sub;

    // You can change the Body Message according to your requirement!
    $mail->Body = "Hello, {$name}\n mobile number {$number} message is {$mess}";
    $mail->send();
}

sendMail($username, $email, $num,$subject,$sms);

// Message to print email success!
echo "Email Sent Successfully!";
 





?>
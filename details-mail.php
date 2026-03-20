<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// FORM DATA
$name  = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$mail = new PHPMailer(true);

try {
    // SMTP SETTINGS (Hostinger)
    $mail->isSMTP();
    $mail->Host       = 'smtp.hostinger.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'enquiry@insdkolkata.com'; // your email
    $mail->Password   = 'Lc4|UBDu+'; // email password
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // FROM & TO
    $mail->setFrom('enquiry@insdkolkata.com', 'Website Contact');
    $mail->addAddress('enquiry@insdkolkata.com');

    // Reply user
    $mail->addReplyTo($email, $name);

    // MESSAGE
    $message = "
    New Contact Form:

    Name: $name
    Email: $email
    Phone: $phone
    ";

    $mail->isHTML(false);
    $mail->Subject = 'New Contact Form';
    $mail->Body    = $message;

    $mail->send();

    // SUCCESS REDIRECT
    header("Location: thank-you.php");
    exit();

} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
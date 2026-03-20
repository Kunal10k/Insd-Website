<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// FORM DATA
$name   = $_POST['name'];
$email  = $_POST['email'];
$phone  = $_POST['phone'];
$course = $_POST['course'];

$mail = new PHPMailer(true);

try {
    // SMTP SETTINGS (Hostinger)
    $mail->isSMTP();
    $mail->Host       = 'smtp.hostinger.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'enquiry@insdkolkata.com'; // your email
    $mail->Password   = 'Lc4|UBDu+';     // email password
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // FROM & TO
    $mail->setFrom('enquiry@insdkolkata.com', 'Admission Enquiry');
    $mail->addAddress('enquiry@insdkolkata.com');

    // Reply user
    $mail->addReplyTo($email, $name);

    // MESSAGE
    $mail->isHTML(true);
    $mail->Subject = 'New Admission Enquiry';
    $mail->Body = "
        <h3>New Admission Enquiry</h3>
        <p><b>Full Name:</b> $name</p>
        <p><b>Email:</b> $email</p>
        <p><b>Phone:</b> $phone</p>
        <p><b>Course:</b> $course</p>
    ";

    $mail->send();

    // REDIRECT
    header("Location: thank-you.php");
    exit();

} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
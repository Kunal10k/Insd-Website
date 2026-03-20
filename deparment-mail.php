<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){

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
        $mail->Username   = 'enquiry@insdkolkata.com';
        $mail->Password   = 'Lc4|UBDu+'; // <-- change this
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // FROM & TO
        $mail->setFrom('enquiry@insdkolkata.com', 'Admission Enquiry');
        $mail->addAddress('enquiry@insdkolkata.com');

        // Reply user
        $mail->addReplyTo($email, $name);

        // EMAIL CONTENT
        $mail->isHTML(true);
        $mail->Subject = 'New Course Admission Enquiry';
        $mail->Body = "
            <h3>New Admission Enquiry</h3>
            <p><b>Name:</b> $name</p>
            <p><b>Email:</b> $email</p>
            <p><b>Phone:</b> $phone</p>
            <p><b>Selected Course:</b> $course</p>
        ";

        $mail->send();

        header("Location: thank-you.php");
        exit();

    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
}
<?php

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];

    $to = "your@email.com";   // change your email
    $subject = "New Course Inquiry";

    $message = "New Student Inquiry\n\n";
    $message .= "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "Course: $course\n";

    $headers = "From: noreply@yourdomain.com\r\n";
    $headers .= "Reply-To: $email";

    mail($to, $subject, $message, $headers);

    header("Location: thank-you.php");
    exit();
}

<?php

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];

    $to = "your@email.com";   // change to your email
    $subject = "New Course Inquiry";

    $message = "
New Student Inquiry

Name: $name
Email: $email
Phone: $phone
Course: $course
";

    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    header("Location: thank-you.php");
    exit();
}

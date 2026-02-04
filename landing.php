<?php
// landing.php

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submit'])) {

    // 🔹 Collect & sanitize form data
    $name  = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);

    // ✅ Basic validation
    if (empty($name) || empty($email) || empty($phone)) {
        echo "All fields are required!";
        exit;
    }

    // 🔹 RECEIVER EMAIL (YOUR MAIL ID)
    $to = "yourmail@gmail.com"; // 🔴 ekhane nijer mail dao

    $subject = "New Lead From Landing Page";

    $body  = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";

    // 🔹 Email headers
    $headers  = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // ✅ Send mail & redirect
    if (mail($to, $subject, $body, $headers)) {
        header("Location: thankyou.html");
        exit;
    } else {
        echo "Mail sending failed!";
    }
} else {
    // ❌ Direct access not allowed
    header("Location: index.php");
    exit;
}

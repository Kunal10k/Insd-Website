<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name    = trim($_POST['name']);
    $email   = trim($_POST['email']);
    $phone   = trim($_POST['phone']);
    $message = trim($_POST['message']);

    // ✅ Basic validation
    if (!empty($name) && !empty($email) && !empty($phone) && !empty($message)) {

        // 🔹 YOUR EMAIL ID (receiver)
        $to = "kunal.esspesoft@gmail.com";   // 🔴 ekhane nijer mail dao

        $subject = "New Contact Form Submission";

        $body  = "Name: $name\n";
        $body .= "Email: $email\n";
        $body .= "Phone: $phone\n";
        $body .= "Message:\n$message\n";

        // 🔹 Headers
        $headers  = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // ✅ Send mail
        if (mail($to, $subject, $body, $headers)) {
            header("Location: thankyou.html");
            exit();
        } else {
            echo "Mail sending failed!";
        }
    } else {
        echo "All fields are required!";
    }
}

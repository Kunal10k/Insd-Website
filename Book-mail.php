<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){

// 🔐 SANITIZE INPUT
$department     = htmlspecialchars($_POST['department']);
$course         = htmlspecialchars($_POST['course']);
$fullname       = htmlspecialchars($_POST['fullname']);
$dob            = $_POST['dob'];
$email          = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$phone          = htmlspecialchars($_POST['phone']);

$father_name    = htmlspecialchars($_POST['father_name']);
$father_phone   = htmlspecialchars($_POST['father_phone']);
$mother_name    = htmlspecialchars($_POST['mother_name']);
$mother_phone   = htmlspecialchars($_POST['mother_phone']);

$address        = htmlspecialchars($_POST['address']);


// 📁 UPLOAD FOLDER
$uploadDir = "uploads/";
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}


// 📂 FILE UPLOAD FUNCTION (FIXED - UNIQUE NAME)
function uploadFile($file, $uploadDir){
    $allowed = ['pdf','jpg','jpeg'];
    $maxSize = 3 * 1024 * 1024; // 3MB

    if(!empty($file['name'])){
        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

        if(!in_array($ext, $allowed)){
            return "";
        }

        if($file['size'] > $maxSize){
            return "";
        }

        // ✅ UNIQUE NAME FIX (IMPORTANT)
        $fileName = uniqid() . "_" . basename($file['name']);
        $path = $uploadDir . $fileName;

        if(move_uploaded_file($file['tmp_name'], $path)){
            return $path;
        }
    }
    return "";
}


// 📎 UPLOAD FILES
$address_proof  = uploadFile($_FILES['address_proof'], $uploadDir);
$birth_proof    = uploadFile($_FILES['birth_proof'], $uploadDir);
$marksheet_10   = uploadFile($_FILES['marksheet_10'], $uploadDir);
$marksheet_12   = uploadFile($_FILES['marksheet_12'], $uploadDir);
$marksheet_grad = uploadFile($_FILES['marksheet_grad'], $uploadDir);


// ✉️ MAIL SETUP
$mail = new PHPMailer(true);

try {
    // SMTP SETTINGS (Hostinger)
    $mail->isSMTP();
    $mail->Host       = 'smtp.hostinger.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'enquiry@insdkolkata.com';
    $mail->Password   = 'Lc4|UBDu+'; // 🔴 CHANGE THIS
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // FROM / TO
    $mail->setFrom('enquiry@insdkolkata.com', 'INSD Admission 2026');
    $mail->addAddress('enquiry@insdkolkata.com');

    // Reply user
    $mail->addReplyTo($email, $fullname);

    // 📎 ATTACH FILES (ALL WILL ATTACH NOW)
    if($address_proof)  $mail->addAttachment($address_proof);
    if($birth_proof)    $mail->addAttachment($birth_proof);
    if($marksheet_10)   $mail->addAttachment($marksheet_10);
    if($marksheet_12)   $mail->addAttachment($marksheet_12);
    if($marksheet_grad) $mail->addAttachment($marksheet_grad);

    // 📨 EMAIL CONTENT
    $mail->isHTML(true);
    $mail->Subject = 'New Admission Form Submission';

    $mail->Body = "
        <h2>New Admission Form</h2>

        <p><b>Name:</b> $fullname</p>
        <p><b>DOB:</b> $dob</p>
        <p><b>Email:</b> $email</p>
        <p><b>Phone:</b> $phone</p>

        <p><b>Department:</b> $department</p>
        <p><b>Course:</b> $course</p>

        <hr>

        <p><b>Father:</b> $father_name ($father_phone)</p>
        <p><b>Mother:</b> $mother_name ($mother_phone)</p>

        <p><b>Address:</b><br>$address</p>
    ";

    $mail->send();

    // ✅ SUCCESS REDIRECT
    header("Location: thank-you.php");
    exit();

} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}

}
?>
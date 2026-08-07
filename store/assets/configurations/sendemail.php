<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = '4bizdeveloper@gmail.com';
    $mail->Password   = 'ruln cyfp riyf zibz'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
    $mail->Port       = 465;

    $mail->setFrom('4bizdeveloper@gmail.com', 'Theyyampattil Website');
    $mail->addAddress('sales@theyyampattilgcc.com'); 
    $mail->addReplyTo($_POST['email'], $_POST['name']);

    $mail->isHTML(true);
    $mail->Subject = "New Website Inquiry: " . ($_POST['Subject'] ?? 'No Subject');
    
    $name    = strip_tags($_POST['name']);
    $email   = strip_tags($_POST['email']);
    $phone   = strip_tags($_POST['Phone']);
    $subject    = strip_tags($_POST['Subject']);
    $message = nl2br(strip_tags($_POST['message']));

    $mail->Body = "<h3>New Lead from https://theyyampattilgcc.com contact form </h3><p><b>Name:</b> $name</p><p><b>Email:</b> $email</p><p><b>Phone:</b> $phone</p><p><b>Subject:</b> $subject</p><p><b>Message:</b><br>$message</p>";

    $mail->send();
    
    // IMPORTANT: Echo ONLY the word success for ambed.js to work
    echo "success"; 

} catch (Exception $e) {
    // IMPORTANT: Echo ONLY the word error
    echo "error";
}
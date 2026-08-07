<?php
// send-mail.php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set('UTC');

require_once __DIR__ . '/phpmailer/Exception.php';
require_once __DIR__ . '/phpmailer/PHPMailer.php';
require_once __DIR__ . '/phpmailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo "Method not allowed";
    exit;
}

if (!empty($_POST['hp'])) {
    http_response_code(400);
    echo "Spam detected";
    exit;
}

$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$message = trim($_POST['message'] ?? '');

// -----------------------------
// Server-side phone normalization (IMMEDIATE AGGRESSIVE FIX)
// -----------------------------
function normalize_phone($raw) {
    $s = trim((string)$raw);
    if ($s === '') return '';

    // Extract all numbers out of the string entirely
    $digits = preg_replace('/\D+/', '', $s);

    // If it starts with 91 or +91 or is a 10-digit number that likely comes from India
    if (strpos($s, '+91') === 0) {
        return '+' . $digits;
    }
    if (strpos($digits, '91') === 0 && strlen($digits) >= 11) {
        return '+' . $digits;
    }
    
    // Strip leading zeros
    $cleanDigits = preg_replace('/^0/', '', $digits);
    if (strlen($cleanDigits) === 10) {
        // If it's a raw 10 digit local number, assign it to India directly
        return '+91' . $cleanDigits;
    }

    // Handle other explicitly declared country prefixes 
    if (strpos($digits, '971') === 0 && strlen($digits) >= 11) {
        return '+' . $digits;
    }
    if (strpos($digits, '966') === 0 && strlen($digits) >= 11) {
        return '+' . $digits;
    }

    // Default general check for international prefix string parsing
    if (strpos($s, '+') === 0) {
        return '+' . $digits;
    }

    // Final fallback logic defaults to UAE format
    return '+971' . $cleanDigits;
}

$phone = normalize_phone($phone);

if (!$name || !$email || !$phone || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo "Please provide name, valid email and phone.";
    exit;
}

$toEmail = 'sales@theyyampattilgcc.com';
$subject = "New Quote Request from Theyyam Pattil GCC Landing page ✅: " . $name;

$bodyPlain  = "You have received a new quote request from your website Theyyampattil GCC landing page:\n\n";
$bodyPlain .= "Name: $name\n";
$bodyPlain .= "Email: $email\n";
$bodyPlain .= "Phone: $phone\n\n";
$bodyPlain .= "Message:\n$message\n";

$bodyHtml = "
<!doctype html>
<html>
  <head>
    <meta charset='utf-8'>
    <style>
      body { font-family: Arial, Helvetica, sans-serif; color: #111; }
      .container { padding: 12px; }
      .meta { margin-bottom: 12px; }
      .meta strong { display:inline-block; width:90px; }
      .message { white-space: pre-wrap; border-top:1px solid #eee; padding-top:10px; margin-top:10px; }
      a { color: #1a73e8; text-decoration: none; }
    </style>
  </head>
  <body>
    <div class='container'>
      <h2>New Quote Request</h2>
      <p>Source: <strong>Theyyampattil GCC landing page</strong></p>
      <div class='meta'>
        <p><strong>Name:</strong> " . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . "</p>
        <p><strong>Email:</strong> <a href='mailto:" . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "'>" . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "</a></p>
        <p><strong>Phone:</strong> " . htmlspecialchars($phone, ENT_QUOTES, 'UTF-8') . "</p>
      </div>
      <div class='message'>
        <strong>Message:</strong>
        <div>" . nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8')) . "</div>
      </div>
    </div>
  </body>
</html>
";

$smtpHost   = 'smtp.gmail.com';
$smtpPort   = 465;            
$smtpSecure = true;          
$smtpUser   = '4bizdeveloper@gmail.com';
$smtpPass   = 'ruln cyfp riyf zibz'; 
$fromEmail  = '4bizdeveloper@gmail.com'; 
$fromName   = 'Website';

if (empty($smtpUser) || empty($smtpPass)) {
    error_log('Mail configuration error: SMTP_USER or SMTP_PASS not set in send-mail.php');
    http_response_code(500);
    echo "Mail configuration error";
    exit;
}

try {
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = 0;
    $mail->Debugoutput = 'error_log';

    $mail->isSMTP();
    $mail->Host       = $smtpHost;
    $mail->SMTPAuth   = true;
    $mail->Username   = $smtpUser;
    $mail->Password   = $smtpPass;
    $mail->SMTPSecure = $smtpSecure ? PHPMailer::ENCRYPTION_SMTPS : PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = (int)$smtpPort;
    $mail->CharSet    = 'UTF-8';

    $mail->setFrom($fromEmail, $fromName);
    $mail->addAddress($toEmail);
    $mail->addCC('4bizdeveloper@gmail.com');
    $mail->addReplyTo($email, $name);

    $mail->Subject = $subject;
    $mail->isHTML(true);
    $mail->Body    = $bodyHtml;
    $mail->AltBody = $bodyPlain;

    $mail->send();

    header("Location: thank-you.php");
    exit;
} catch (Exception $e) {
    error_log('PHPMailer Exception: ' . $e->getMessage());

    $headers  = "From: $fromEmail\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($toEmail, $subject, $bodyPlain, $headers)) {
        header("Location: thank-you.php");
        exit;
    }

    http_response_code(500);
    echo "Failed to send message. Try again later.";
    exit;
}
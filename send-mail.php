<?php 
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// 1. Path Management: Ensure these files exist in your /PHPMailer/src/ directory
require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

// --- Server-Side Captcha Validation ---
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_captcha = isset($_POST['captcha_input']) ? trim($_POST['captcha_input']) : '';
    $correct_captcha = isset($_SESSION['captcha_answer']) ? $_SESSION['captcha_answer'] : null;

    if ($correct_captcha === null || $user_captcha === '' || (int)$user_captcha !== (int)$correct_captcha) {
        echo "invalid_captcha";
        exit;
    }
}

$mail = new PHPMailer(true);

try {
    // --- Server Settings ---
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    
    // SECURITY NOTE: In production, move these to environment variables
    $mail->Username   = '4bizdeveloper@gmail.com';
    $mail->Password   = 'ruln cyfp riyf zibz'; 
    
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
    $mail->Port       = 465;

    // --- SSL Configuration ---
    // Keep this only for local testing (XAMPP). 
    // Remove the 'SMTPOptions' block entirely when moving to a live Linux server.
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    // --- Recipients ---
    $mail->setFrom('4bizdeveloper@gmail.com', 'Website Contact');
    $mail->addAddress('sales@theyyampattilgcc.com'); 
    // $mail->addCC('4bizdeveloper@gmail.com');
    
    // --- Data Sanitization (Fixing XSS & Injection) ---
    // Mandatory Fields (Name, Email, Phone, Subject)
    $name    = isset($_POST['name']) ? htmlspecialchars(strip_tags(trim($_POST['name']))) : 'No Name';
    $email   = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL) ? $_POST['email'] : 'Invalid Email';
    $phone   = isset($_POST['phone']) ? htmlspecialchars(strip_tags(trim($_POST['phone']))) : 'No Phone';
    
    // Fallback support for subject (Case insensitive check)
    $subject_input = $_POST['Subject'] ?? $_POST['subject'] ?? '';
    $subject = !empty($subject_input) ? htmlspecialchars(strip_tags(trim($subject_input))) : 'New Website Inquiry';
    
    // Optional Field: Message (No error thrown if empty)
    $raw_message = isset($_POST['message']) ? trim($_POST['message']) : '';
    $message = !empty($raw_message) ? htmlspecialchars(strip_tags($raw_message)) : 'N/A';
    
    // Extra tracking parameters captured by intl-tel-input
    $country_code = isset($_POST['country_code']) ? htmlspecialchars(strip_tags(trim($_POST['country_code']))) : '';

    // Mandatory Validation: Don't send if email, name, or phone is invalid/empty
    if ($email === 'Invalid Email') {
        throw new Exception("Please provide a valid email address.");
    }

    if (empty($name) || $name === 'No Name') {
        throw new Exception("Please provide your name.");
    }

    if (empty($phone) || $phone === 'No Phone') {
        throw new Exception("Please provide your phone number.");
    }

    // Set reply-to header so clicking "Reply" responds directly to the user
    $mail->addReplyTo($email, $name);

    // --- Email Content ---
    $mail->isHTML(true);
    $mail->Subject = "New Contact form Inquiry from website theyyampattilgcc.com: " . $subject;
    
    // HTML Email Body
    $mail->Body = "
        <h3>New contact form enquiry from website theyyampattilgcc.com</h3>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone:</strong> {$phone} " . (!empty($country_code) ? "({$country_code})" : "") . "</p>
        <p><strong>Subject:</strong> {$subject}</p>
        <p><strong>Message:</strong><br>" . nl2br($message) . "</p>
    ";
    
    // Plain text version for non-HTML mail clients
    $mail->AltBody = "Name: $name\nEmail: $email\nPhone: $phone " . (!empty($country_code) ? "($country_code)" : "") . "\nSubject: $subject\nMessage: $message";

    $mail->send();
    
    // Clear the evaluated captcha answer out of session memory upon a clean send
    unset($_SESSION['captcha_answer']);
    unset($_SESSION['captcha_num1']);
    unset($_SESSION['captcha_num2']);
    unset($_SESSION['captcha_operator']);
    
    echo "success";

} catch (Exception $e) {
    // Return error response for AJAX handler
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// 1. Path Management
require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Sanitize user inputs safely
    $name = htmlspecialchars(strip_tags(trim($_POST['fullname'])));
    $phone = htmlspecialchars(strip_tags(trim($_POST['full_phone'])));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $furniture_type = htmlspecialchars(strip_tags(trim($_POST['furniture_type'])));
    $requirements = htmlspecialchars(strip_tags(trim($_POST['requirements'])));

    $mail = new PHPMailer(true);

    try {
        // --- Server Settings ---
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        
        // Credentials
        $mail->Username   = '4bizdeveloper@gmail.com';
        $mail->Password   = 'ruln cyfp riyf zibz'; 
        
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
        $mail->Port       = 465;

        // --- Recipients ---
        $mail->setFrom('4bizdeveloper@gmail.com', 'Website Contact');
        $mail->addAddress('sales@theyyampattilgcc.com'); 
        $mail->addCC('4bizdeveloper@gmail.com');

        // --- Content ---
        $mail->isHTML(true);
        $mail->Subject = "New Furniture Inquiry Validation: " . $furniture_type;
        
        // Structured HTML email construction
        $mail->Body    = "
            <h3>New Intent Verified Inquiry Details</h3>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Phone:</strong> {$phone}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Selected Furniture Type:</strong> {$furniture_type}</p>
            <p><strong>Additional Requirements:</strong><br>".nl2br($requirements)."</p>
        ";
        $mail->AltBody = "Name: {$name}\nPhone: {$phone}\nEmail: {$email}\nFurniture Type: {$furniture_type}\nRequirements: {$requirements}";

        $mail->send();

    } catch (Exception $e) {
        // Optional log handling: Silently logging errors to avoid breaking execution stream flow
        // error_log("Mailer Error: {$mail->ErrorInfo}");
    }

    // Execute Client-Side actions regardless of email delivery success
    // This script instantly initializes the native OS level phone dialer and jumps straight back to the landing homepage
    echo "
    <script>
        window.location.href = 'tel:+971559132200';
        setTimeout(function() {
            window.location.href = 'https://theyyampattilgcc.com/';
        }, 500);
    </script>
    ";
    exit;
} else {
    // Graceful routing boundary escape fallback
    header("Location: https://theyyampattilgcc.com/");
    exit;
}
?>
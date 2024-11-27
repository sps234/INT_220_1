<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'sandbox.smtp.mailtrap.io'; // Mailtrap SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = '5a8eff0659dacf'; // Mailtrap username
    $mail->Password = '978d6d82ccacf1'; // Mailtrap password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
    $mail->Port = 587; // TCP port to connect to

    // Recipients   
    $mail->setFrom('saumyapratap234+sender@gmail.com', 'Mailer');       // Add a sender
    $mail->addAddress('saumyapratap234+receiver@gmail.com', 'Saumya Pratap'); // Add a recipient

    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Test email3';
    $mail->Body = '
        <h3>Hi there, this is a test email sent from PHP using SMTP!</h3>
        <p> It is working fine. <p> 
        <p> Regards, <br> Saumya Pratap </p>';

    $mail->send();
    echo 'Mail sent successfully.';

} catch (Exception $e) {
    echo "Failed to send mail. Mailer Error: {$mail->ErrorInfo}";
}
?>
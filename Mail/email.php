<?php
// $to = "saumyapratap234@gmail.com";
// $subject = "Test email3";
// $message = "This is test email for pHp";
// $from = "saumyapratap234@gmail.com";
// $headers = "From:$from";
// mail($to, $subject, $message, $headers);
// echo "Mailsent";



$to = "saumyapratap234@gmail.com";
$subject = "Test email3";
$message = "This is a test email for PHP";
$from = "saumyapratap234@gmail.com";
$headers = "From: $from\r\n";
$headers .= "Reply-To: $from\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo "Mail sent successfully.";
} else {
    echo "Failed to send mail.";
}



?>
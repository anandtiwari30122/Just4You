<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

$mail = new PHPMailer();
$mail->setFrom('noreply@yourwebsite.com', 'Event Planning Dubai');
$mail->addAddress('admin@example.com');
$mail->Subject = "New Event Inquiry";
$mail->Body = "You have a new event inquiry from $name. Check the admin panel for details.";

if (!$mail->send()) {
    echo "Email sending failed.";
}
?>

<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $event_type = $_POST['event_type'];
    $event_date = $_POST['event_date'];
    $message = $_POST['message'];

    $sql = "INSERT INTO inquiries (name, contact, email, event_type, event_date, message) 
            VALUES ('$name', '$contact', '$email', '$event_type', '$event_date', '$message')";

    if ($conn->query($sql) === TRUE) {
        include('mail.php'); // Send email alert
        echo "Thank you! We will contact you soon.";
    } else {
        echo "Error: " . $conn->error;
    }
}
$conn->close();
?>

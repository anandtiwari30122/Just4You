<?php
// Landing Page with Form
// File: index.php

session_start();
include 'db.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $event_type = $_POST['event_type'];
    $message = $_POST['message'];

    $sql = "INSERT INTO inquiries (name, email, phone, event_type, message) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $email, $phone, $event_type, $message);
    $stmt->execute();

    // Send Email Notification
    $to = "admin@example.com";
    $subject = "New Event Inquiry from $name";
    $headers = "From: noreply@example.com" . "\r\n";
    $email_body = "Name: $name\nEmail: $email\nPhone: $phone\nEvent Type: $event_type\nMessage: $message";
    mail($to, $subject, $email_body, $headers);

    $_SESSION['success'] = "Thank you for your inquiry! We will contact you soon.";
    header("Location: index.php");
    exit();
}
?>

<!-- Responsive Landing Page with Bootstrap -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Planning - Dubai</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="bg-dark text-white text-center py-5">
        <h1>Luxury Event Planning in Dubai</h1>
        <p>Make your special moments unforgettable</p>
    </header>

    <div class="container my-5">
        <h2 class="text-center">Get a Free Consultation</h2>
        <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-success"> <?= $_SESSION['success']; unset($_SESSION['success']); ?> </div>
        <?php endif; ?>
        <form action="index.php" method="POST" class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Event Type</label>
                <select name="event_type" class="form-select" required>
                    <option value="Proposal">Proposal</option>
                    <option value="Anniversary">Anniversary</option>
                    <option value="Birthday">Birthday</option>
                </select>
            </div>
            <div class="col-12">
                <label class="form-label">Message</label>
                <textarea name="message" class="form-control" required></textarea>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <footer class="bg-dark text-white text-center py-3">&copy; 2024 Event Planning Dubai</footer>
</body>
</html>


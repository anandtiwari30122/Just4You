<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "event_planning";

$conn = new mysqli("localhost", "root", "", "event_planning");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

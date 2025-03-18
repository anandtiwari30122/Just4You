<?php
session_start();
include('../config.php');

$sql = "SELECT * FROM inquiries ORDER BY created_at DESC";
$result = $conn->query($sql);

echo "<h2>Event Inquiries</h2>";
while ($row = $result->fetch_assoc()) {
    echo "<p><strong>{$row['name']}</strong> - {$row['event_type']} on {$row['event_date']} <br> Contact: {$row['contact']}</p>";
}
?>

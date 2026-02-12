<?php
include 'connect.php';
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: index.html");
    exit();
}

$result = $conn->query("SELECT * FROM applications");

echo "<h2>Applications</h2>";
while ($row = $result->fetch_assoc()) {
    echo "<p><strong>Name:</strong> {$row['name']} | <strong>Email:</strong> {$row['email']} | <strong>Position:</strong> {$row['position']}</p>";
}
$conn->close();
?>

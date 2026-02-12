<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$course = $_POST['course'] ?? '';
$graduated = $_POST['graduated'] ?? '';
$twelfth = $_POST['twelfth_percent'] ?? '';
$tenth = $_POST['tenth_percent'] ?? '';
$position = $_POST['position'] ?? '';

    // Handle resume upload
    $resume = $_FILES['resume']['name'];
    $target = "uploads/" . basename($resume);
    move_uploaded_file($_FILES['resume']['tmp_name'], $target);

    $sql = "INSERT INTO applications (name, email, phone, course, graduated, twelfth_percent, tenth_percent, position, resume)
            VALUES ('$name', '$email', '$phone', '$course', '$graduated', '$twelfth', '$tenth', '$position', '$resume')";

    if ($conn->query($sql) === TRUE) {
        echo "Application submitted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
$conn->close();
?>

<?php
include 'connect.php'; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile_no = mysqli_real_escape_string($conn, $_POST['mobile_no']);
    // You would also handle the file upload for the resume here

    // SQL query to insert data
    $sql = "INSERT INTO applications (name, email, mobile_no) VALUES ('$name', '$email', '$mobile_no')";

    if ($conn->query($sql) === TRUE) {
        echo "New application submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
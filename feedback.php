<?php
$conn = new mysqli("localhost", "root", "", "Zanth");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST["name"];
    $email   = $_POST["email"];
    $message = $_POST["message"];

    // Simple query to insert data
    $sql = "INSERT INTO tbl_feedback (id,name, email, feedback) VALUES (NULL,'$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>Thank you for your feedback!</h2><p><a href='index.html'>HOME</a></p>";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>

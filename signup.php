<?php
$conn = new mysqli("localhost", "root", "", "Zanth");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get  data
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Check if email already exists
$check_email = "SELECT * FROM tbl_register WHERE email='$email'";
$result = $conn->query($check_email);

if ($result->num_rows > 0) {
    echo "Email already registered. Try logging in.";
} else {
    $sql = "INSERT INTO tbl_register (name, email, password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
    
        echo "Signup successful! Redirecting to homepage...";
        echo "<script>
                setTimeout(function() {
                window.location.href = 'index.html';
                }, 3000); // 3 seconds delay
            </script>";
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>

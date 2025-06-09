<?php
$conn = new mysqli("localhost", "root", "", "Zanth");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$email = $_POST['email'];
$password = $_POST['password'];

// Check user in database
$sql = "SELECT * FROM tbl_register WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
    echo "Login successful! Redirecting...";
    echo "<script>
            setTimeout(function() {
              window.location.href = 'index.html';
            }, 2000);
          </script>";
} else {
    echo "Invalid email or password.";
    echo "<script>
            setTimeout(function() {
              window.location.href = 'login.html';
            }, 2000);
          </script>";

}

$conn->close();
?>

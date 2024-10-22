<?php
// Database connection parameters
$servername = "localhost";  // Your database server (usually 'localhost')
$username = "root";         // Your database username (default is 'root' for XAMPP)
$password = "";             // Your database password (default is empty for XAMPP)
$dbname = "logindesigner"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

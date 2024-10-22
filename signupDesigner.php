<?php
include 'db_connect_loginDesigner.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data and sanitize it
    $firstName = $conn->real_escape_string($_POST['fName']);
    $lastName = $conn->real_escape_string($_POST['lName']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $confirmPassword = $conn->real_escape_string($_POST['confirmPassword']);

    // Check if passwords match
    if ($password !== $confirmPassword) {
        echo "Passwords do not match!";
        exit();
    }

    // Hash the password for security
    $Password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO designer (FirstName, LastName, Email, Password, RegistrationDate, Status) VALUES (?, ?, ?, ?, NOW(), 'active')");

    // Bind the parameters
    $stmt->bind_param("ssss", $firstName, $lastName, $email, $password);

    // Execute the statement
    if ($stmt->execute()) {
        echo "User registered successfully!";
        // Optionally redirect to login page
        // header("Location: loginDesigner.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>

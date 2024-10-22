<?php
include 'db_connect_loginClient.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute query
    $stmt = $conn->prepare("SELECT * FROM client WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Login successful!";
        // Redirect to dashboard
    } else {
        echo "Invalid email or password!";
    }
    $stmt->close();
    $conn->close();
}
?>
 
 
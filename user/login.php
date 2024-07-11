<?php
require 'adminconection.php'; // Corrected the file name

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare SQL statement with a placeholder for email
    $stmt = $conn->prepare("SELECT * FROM users WHERE useremail = ?");
    $stmt->bind_param("s", $email); // Bind parameters to the statement
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Verify password
        if (password_verify($password, $user['userpassword'])) {
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['username'] = $user['username'];
            header("Location: ./index.php");
            exit();
        } else {
            echo "Incorrect email or password.";
        }
    } else {
        echo "User does not exist.";
    }

    $stmt->close(); // Close the prepared statement
    $conn->close(); // Close database connection
} else {
    // Redirect to login page if accessed without POST method
    header("Location: ./loginnow.php");
    exit();
}
?>


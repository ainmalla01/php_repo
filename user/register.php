<?php
require_once 'adminconection.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password']; // Note: You should hash the password for security
    $repassword = $_POST['repassword']; // Note: You should hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $defultimg="./defultimg.png";

    // Check if email already exists
    $sql_check_email = "SELECT * FROM users WHERE useremail = '$email'";
    $result_check_email = $conn->query($sql_check_email);
    if ($result_check_email->num_rows > 0) {
        echo "<script> alert ('Email already exists. Please choose a different email address.')</script>";
        header("Location: ./LoginRegister.php");
        exit(); // Stop further execution if email already exists
    }

    // Insert new user
    if (empty($username) || empty($email) || empty($password)) {
        echo "Please fill in all fields.";
        header("Location: ./loginnow.php");
        exit();
    }
    if (strlen($password) < 12) {
        echo "Password must be at least 12 characters long.";
        header("Location: ./loginnow.php");
        exit(); // Stop further execution if password is not valid
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
        header("Location: ./loginnow.php");
        exit(); // Stop further execution if email is not valid
    }
    if ($password != $repassword) {
        echo "Passwords do not match.";
        header("Location: ./loginnow.php");
        exit();
    } else {
        $sql_insert_user = "INSERT INTO users (username, useremail, userpassword, userphone,profile_picture) VALUES ('$username', '$email', '$hashed_password','$phone','$defultimg')";  
        if ($conn->query($sql_insert_user) === TRUE) {
            // User registered successfully
            $user_id = $conn->insert_id;
            // Store user information in session variables
            $_SESSION['user_id'] = $user_id;
            $_SESSION['username'] = $username;
            echo "New record inserted successfully";
            header("Location: ./index.php"); // Redirect to dashboard page after successful registration
            exit();
        } else {
            // Error occurred while registering
            echo "Error: " . $conn->error;
            header("Location: ./LoginRegister.php");
            exit();
        }
    }
    $conn->close();
}
?>



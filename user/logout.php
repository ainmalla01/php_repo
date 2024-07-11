<?php
// Start the session (if not already started)
session_start();

// Check if the user is logged in (by checking if the user_id session variable is set)
if(isset($_SESSION['user_id'])) {
    // Unset or destroy the session variables
    unset($_SESSION['user_id']);
    unset($_SESSION['username']);
    // Or you can destroy the entire session
    session_destroy();

    // Redirect the user to the login page or any other appropriate page
    echo "<script>window.location.href='./index.php';</script>";
    exit();
} else {
    // User is not logged in, handle appropriately (e.g., redirect to login page)
    echo "User is not logged in.";
    // Redirect to login page
    // echo "<script>window.location.href='./login.php';</script>";
    exit();
}
?>


<!-- 
session_start();

// Check if the user is already logged in
if (isset($_SESSION['uname'])) {
    // If the user is logged in, destroy the session
    session_destroy();
    
    // Redirect to the login page after logout
    header("Location: http://localhost/roomnepal/login.php");
    exit(); // Stop further execution of the script
} -->

<?php
session_start();

//check if user is already logged in

if (isset($_SESSION['admin_username'])) {
    header("loction:./adminDashboard.php");
    exit();
}
?>
<?php require 'adminconection.php'; ?>

<?php

$email = $_POST['admin_email'];
$pass = $_POST['admin_pass'];

$data = "SELECT * FROM admin";
$result = $conn->query($data);
$incorrectCredintials = true;
echo"1";

if ($result->num_rows > 0) {
    echo"1";
    while ($row = $result->fetch_assoc()) {
        if (($email == $row["ad_email"]) && ($pass == $row["ad_password"])) {
            session_start(); //start the session after successful authentication
            $_SESSION['admin_username'] = $username;
            $_SESSION['admin_id'] = $row["admin_id"];
            $loggedIn = true;
            break;
        }
    }
}
if (!$loggedIn){
    
$data = "SELECT * FROM subadmin";
$result = $conn->query($data);
$incorrectCredintials = true;
echo"1";

if ($result->num_rows > 0) {
    echo"1";
    while ($row = $result->fetch_assoc()) {
        if (($email == $row["sad_email"]) && ($pass == $row["sad_password"])) {
            session_start(); //start the session after successful authentication
            $_SESSION['subadmin_username'] = $username;
            $_SESSION['subadmin_id'] = $row["sad_id"];
            $loggedIn = true;
            break;
        }
    }

}
}
if ($loggedIn) {
    header("Location:./adminDahboard.php");
    exit();
} else {
    echo '<script>alert("Wrong username or password. Please try again");</script>';
    echo '<script>window.location.href = "index.html";</script>';
}
?>
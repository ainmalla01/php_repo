<?php
session_start();
if (isset($_SESSION['username'])) {
    session_unset();
    session_destroy();
    echo "<script>window.location.href='./index.php';</script>"; // Corrected redirection syntax
    exit();
    echo "Logged out"; // This line will never be reached as it's after the exit() function
} else {
    echo "Already logged out";
}
?>

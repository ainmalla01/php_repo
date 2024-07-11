<?php
session_start();

if (isset($_SESSION['admin_username'])) {
    session_unset();
    session_destroy();
    echo "<script>window.location.href='./index.html';</script>";
    echo "log out";
    exit();
} elseif (isset($_SESSION['subadmin_username'])) {
    session_unset();
    session_destroy();
    echo "<script>window.location.href='./index.html';</script>";
    echo "log out";
    exit();
} else {
    echo "log out already";
}
?>

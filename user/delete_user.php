<?php
 session_start();
require 'adminconection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the delete button is clicked
    if (isset($_POST['delete'])) {
        $delete_id = $_POST['delete'];
        // Perform delete operation based on $delete_id
        $sql = "DELETE FROM users WHERE uid = $delete_id"; // Corrected column name to 'Aid'
        if ($conn->query($sql) === TRUE) {
            $_SESSION['user_id'] = $user_id;
            $_SESSION['username'] = $username;
            session_unset();
            session_destroy();
            header("location:./userinterfacee.php");
            exit();
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } else {
        echo "Error: Delete button not clicked";
    }
}

// Close the database connection
$conn->close();
?>
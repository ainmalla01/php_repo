
<?php
require 'messagecon.php';
session_start();
if (isset($_SESSION['user_id'])) {
    // Session variable is set
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate and sanitize user input
    $message = $_POST['message_cos'];
    $username = $_SESSION['username'];
    $username = $_SESSION['user_id'];
    echo $message;
    echo $username;

    // Retrieve user's profile picture
   

    // Check if the message is empty
    if (empty($message)) {
        echo 'Error: Message is empty';
    } else {
        // Insert message into the database
        $sql = "INSERT INTO messages (message, user_id) VALUES ('$message', {$_SESSION['user_id']})";

        if ($conn->query($sql)) {
            header('location:./userinterfaceFeedback.php');
            exit();
        } else {
            echo 'Error: ' . $conn->error;
        }
    }
}

// Close the database connection
$conn->close();
}
else{
    echo"session is unset";
}?>



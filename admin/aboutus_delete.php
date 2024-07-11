<?php
require 'adminconection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the delete button is clicked
    if (isset($_POST['delete'])) {
        $delete_id = $_POST['delete'];
        // Perform delete operation based on $delete_id
        $sql = "DELETE FROM aboutus WHERE Aid = $delete_id"; // Corrected column name to 'Aid'
        if ($conn->query($sql) === TRUE) {
            header("location:./Adminsetting.php");
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


<?php
require 'adminconection.php';

if(isset($_POST['rooms_delete'])){
    $rooms_id = $_POST['rooms_delete'];
    
    // Start a transaction
    $conn->begin_transaction();
    
    // Delete records from the first table
    $sql1 = "DELETE FROM booking_tbl WHERE roomid = $rooms_id";
    if(!$conn->query($sql1)){
        echo "Error deleting from first table: " . $conn->error;
        $conn->rollback(); // Rollback the transaction if an error occurs
        exit();
    }
    $sql01 = "DELETE FROM approved WHERE product_id = $rooms_id";
    if(!$conn->query($sql01)){
        echo "Error deleting from first table: " . $conn->error;
        $conn->rollback(); // Rollback the transaction if an error occurs
        exit();
    }
    
    // Delete records from the second table
    $sql2 = "DELETE FROM product WHERE product_id = $rooms_id"; // Change 'another_table' to the appropriate table name
    if(!$conn->query($sql2)){
        echo "Error deleting from second table: " . $conn->error;
        $conn->rollback(); // Rollback the transaction if an error occurs
        exit();
    }
    
    // If both deletions are successful, commit the transaction
    $conn->commit();
    
    header("Location: ./adminupdating.php");
    exit();
}
?>

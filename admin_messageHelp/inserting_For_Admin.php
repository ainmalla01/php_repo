<?php require 'connecting.php' ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $help_message=$_POST['help_message'];
    $sql='INSERT INTO AdimMessage ("AMessage") VALUES $help_message';
    if($conn->query($sql)){
        echo 'inserted';
    }
   
}
$conn->close();
?>
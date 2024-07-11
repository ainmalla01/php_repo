<?php session_start()?>
<?php require "./adminconection.php"?>
<?php
if(isset($_POST['message_delete'])){
    $message=$_POST['message_delete'];
    $sql="DELETE FROM messages WHERE id=$message";
    if($conn->query($sql)){
        header("location:./Adminmanagingdata.php");
        exit();
    }
    else{
        echo"error";
    }

}
?>
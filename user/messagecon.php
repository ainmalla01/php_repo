<?php

$serer = "localhost"; //127.0.0.1
$database = "homeadd";
$username="root";
$password ="";
$conn = new mysqli($serer,$username,$password,$database);
if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}


?>

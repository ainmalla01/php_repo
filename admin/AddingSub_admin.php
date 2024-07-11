<?php // Check if profile picture is uploaded
require "adminconection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if ($_FILES['profile_picture']['error'] == UPLOAD_ERR_OK) {
        $target_dir = "../admin_profile/";
        $target_file = $target_dir . basename($_FILES["profile_picture"]["name"]);
        move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file);
        $name=$_POST["name"];
        $email=$_POST["email"];
        $number=$_POST["number"];
        $password=$_POST["password"];
        $sql="INSERT INTO subadmin (sad_name,sad_email,sad_number,sad_password,profile) VALUES('$name','$email','$number','$password','$target_file')";
        if($conn->query($sql)){
            $id=$conn->insert_id;
            $_SESSION['subadmin_id']=$id;
            header("Location: ./Admin_emplyor.php");
            exit();
        }
    }}
    $conn->close();
        ?>
<?php require 'adminconection.php';?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['personimage'])) {
    $aboutimg = $_FILES['personimage']['name'];
    $name = $_POST['Pname'];
    $about_textbox = $_POST['about_textbox'];
    $target_dir = "../Employer/";
    
    $aboutimgs = $target_dir . basename($aboutimg);
    move_uploaded_file($_FILES["personimage"]["tmp_name"], $aboutimgs);
    if($aboutimgs){
    $sql = "INSERT INTO aboutus (ADname, ADimg, ADtext)
    VALUES ('$name', '$aboutimgs', '$about_textbox')";


if ($conn->query($sql)=== TRUE) {
    header('location:./Adminsetting.php');
}
    

}
else{
echo'error';
}
$conn->close();
}
else{
echo'ERROR';
}
    }



?>
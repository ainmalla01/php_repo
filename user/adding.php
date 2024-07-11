<?php require 'adminconection.php';
session_start();
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = $_POST['number'];
    $price = $_POST['price'];
    $location = $_POST['location'];
    $Cimage = $_FILES["cover_page"]["name"];
    $additionalImages = $_FILES["additional_images"]; 
    $additional_inf = $_POST["additional_inf"]; 
    $room_num = $_POST["room_num"]; 
    $room_type = $_POST["roomtype"]; 
    // Fixed variable name

    // Check if any required field is empty
    if (empty($number) || empty($price) || empty($location) || empty($Cimage) || empty($additionalImages)||empty($additional_inf)||empty($room_num)||empty($room_type)) {
        // At least one of the variables is empty
        echo "Please fill in all the required fields.";
    } else {
        // None of the variables are empty, proceed with further processing

        $target_dir = "../room_PIC_coverpage/";
        $cover_page = $target_dir . basename($Cimage);
        move_uploaded_file($_FILES["cover_page"]["tmp_name"], $cover_page);

        // Additional images
        $target_dir_A = "../rooms_pic_additionalimage/";
        $additionalImagesPaths = [];
        foreach ($additionalImages["tmp_name"] as $key => $tmp_name) {
            $additionalImagePath = $target_dir_A . basename($additionalImages["name"][$key]);
            move_uploaded_file($tmp_name, $additionalImagePath);
            $additionalImagesPaths[] = $additionalImagePath;
        }
        $additional_images = implode(",", $additionalImagesPaths);

        // Database insertion
        $sql = "INSERT INTO post_request (
            coverpage,
            location,
            phone_number,
            price,
            other_image,
            room_type,
            room_num,
            other_info,
            user_id
        ) VALUES (
            '$cover_page',
            '$location',
            '$number',
            '$price',
            '$additional_images',
            '$room_type',
            '$room_num',
            '$additional_inf',
            {$_SESSION['user_id']}
        )";
     if ($conn->query($sql) === TRUE) {

        $room_id = $conn->insert_id;
        header("location:./addingNewroom.php");

     } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
}
?>
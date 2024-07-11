<?php
require 'adminconection.php';
session_start();

if(isset($_POST['delete_post'])){
    $request_id = $_POST['delete_post'];

    $sql="SELECT * FROM post_request WHERE request_id=$request_id";
    $result = $conn->query($sql);

if ($result) { // Check if the query executed successfully
    if ($result->num_rows > 0) { // Check if there are rows returned
        while ($row = $result->fetch_assoc()) {
            $coverpage = $row['coverpage'];
            $location = $row['location'];
            $number = $row['phone_number'];
            $price = $row['price'];
            $other_image = $row['other_image'];
            $room_type = $row['room_type'];
            $room_num = $row['room_num'];
            $other_info = $row['other_info'];
            $user_id = $row['user_id'];
        }
    } else {
        // Handle case where no rows were returned
        echo "No records found.";
    }
} else {
    // Handle query execution error
    echo "Error: " . $conn->error;
}
  
    
$sql01="INSERT INTO reject_post (

    coverpage,
    location,
    phone_number,
    price,
    other_image,
    room_type,
    room_num,
    other_info,
    user_id,
    request_id
) VALUES (
    '$coverpage',
    '$location',
    '$number',
    '$price',
    '$other_image',
    '$room_type',
    '$room_num',
    '$other_info',
    '$user_id',
    '$request_id'
)";
 $conn->query($sql01);

$sql1 = "DELETE FROM post_request WHERE request_id = $request_id";
if($conn->query($sql1)){
    echo "insert secussfull";
    header("location:./Admin_userpost.php");
    exit();
}

  ?>
  <?php
  $conn->close();
}?>
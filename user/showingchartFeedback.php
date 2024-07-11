<?php require 'adminconection.php' ?>
<link rel="stylesheet" href="../css/showingfeedback.css">
    <?php
// SQL query to retrieve all data from the products table
// $sql = "SELECT * FROM products ORDER BY id DESC LIMIT 1";
$sql = "SELECT * FROM feedbackm";

$result=$conn->query($sql);
if($result->num_rows>0){
while($row=$result->fetch_assoc()){
    ?>
    <div class="new_feedbacks">
       <div class="profile"></div>  
       <p class="nums_message"><?php echo $row['MESSAGE'];?></p>
    </div>
    <?php
}
}

// Close the database connection
$conn->close();
?>
<link rel="stylesheet" href="../css/interfaceAbout.css">
<?php session_start()?>

<?php
if(isset($_SESSION['username'])) {
    require "./componets/headerlogin.php";
} else {
    require "./componets/header.php";
}
?>
<div class="aboutusinterface">

<h2>About us</h2>

<div class="aboutus_img">
  
<?php require 'adminconection.php' ?>
    <?php
// SQL query to retrieve all data from the products table
// $sql = "SELECT * FROM products ORDER BY id DESC LIMIT 1";
$sql = "SELECT * FROM aboutus";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
?>  

    <div class="persons">
        <div class="imgbox">
            <img src="<?php echo $row['ADimg']?>" alt="" srcset="">
        </div>
        <div class="person_details">
            <h2><?php echo $row['ADname']?></h2>
            <p><?php echo $row['ADtext']?></p>
        </div>
    </div>
   <?php
    }}
    $conn->close();?>
</div>
</div>
<?php require "footer.php"?>
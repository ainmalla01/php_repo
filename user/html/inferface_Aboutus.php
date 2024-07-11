<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../css/interface.css" />
    <link rel="stylesheet" href="../../css/interfaceSection.css">
    
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="shortcut icon" href="Untitled-1.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <title>Document</title>
  </head>
  <body>
  <!-- hearder ........................................................................... -->
    <header>
      <!-- logo ..................................................... -->
      <div class="logo">
      </div>
      <!--  other service .................................................... -->
      <nav>
        <div class="icon"> <ion-icon name="menu-outline"></ion-icon>
        </div>
        <ul class="list_content">
          <li class="LI" id="home"><a href="./interfacee.html">home</a></li>
          <li class="LI" id="service"><a href="./interfaceService.html">service</a></li>
          <li class="LI" id="feedback"><a href="./interfaceFeedback.html">feedback</a></li>
          <li class="LI" id="feedback"><a href="#aboutus">Aboutus</a></li>
        </ul>
        <div class="content">
          <a class="button" href="../loginregister.php" id="btn">
            <ion-icon name="person-outline"></ion-icon>login/register
          </a>
        </div>
      </nav>
      <!-- design for login and register........................................... -->
      
    </header>
<link rel="stylesheet" href="../css/interfaceAbout.css">
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
            <p><?php echo $row['ADname']?></p>
            <p><?php echo $row['ADtext']?></p>
        </div>
    </div>
   <?php
    }}
    $conn->close();?>
</div>
</div>
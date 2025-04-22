
<?php
                require './adminconection.php'; // Include your database connection file

                // Check if admin_id is set in the session
                if (isset( $_SESSION['username'] )) {
                    // SQL query to retrieve admin profile image
                    $sql = "SELECT * FROM users WHERE user_id = {$_SESSION['user_id']}";
                    $result = $conn->query($sql);
                    // Check if there are any rows returned
                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                ?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/userinterface.css" />
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
          <img src="./componets/room.png" alt="" srcset="">
        </div>
        
       
        <!--  other service .................................................... -->
        <nav>
            <div class="icon"> <ion-icon name="menu-outline"></ion-icon>
            </div>
          <ul class="list_content">
          <li class="LI" id="home"><a href="./index.php">home</a></li>
          <li class="LI" id="service"><a href="./userinterfaceService.php">land</a></li>
          <li class="LI" id="feedback"><a href="./userinterfaceFeedback.php">house</a></li>
          <li class="LI" id="feedback"><a href="./inferface_Aboutus.php">contact</a></li>
          <li class="LI" id="feedback"><a href="./addingNewroom.php">POST </a></li>
          </ul>
        </nav>
        <!-- design for login and register........................................... -->
       <div class="user_and_other">
        <a href="./userprofile.php"class="userpf">
          <img src="<?php echo $row["profile_picture"]; ?>" alt="" srcset=""/>
        </a>
           <div class="userotherlist">
             <a href="./userprofile.php">
               <li>userprofile</li>
             </a> 
             <a href="./userlogout.php">
               <li>
                <ion-icon name="log-out-outline"></ion-icon>logout</li>
             </a>
          </div>
        </div>
      </header>
   <?php }}}?>
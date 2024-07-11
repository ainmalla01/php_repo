<?php session_start(); ?>
<?php
                require 'adminconection.php'; // Include your database connection file

                if (isset($_SESSION['admin_id'])) {
                    // SQL query to retrieve admin profile image
                    $sql = "SELECT profile FROM admin WHERE admin_id={$_SESSION['admin_id']}";
                }
                if(isset($_SESSION['subadmin_id'])){
                    $sql = "SELECT profile FROM subadmin WHERE sad_id={$_SESSION['subadmin_id']}"; 
                }
                    $result = $conn->query($sql);

                    // Check if there are any rows returned
                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                ?>
<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Responsive Card Slider</title>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        
      

        <!-- CSS -->
        <link rel="stylesheet" href="../css/adminprofile.css">
                                        
    </head>
    <body>
        <div class="slide-container swiper adminp">
            <button type="button" calss="backbutton"><a href="./adminDahboard.php"><ion-icon name="chevron-back-outline"></a></ion-icon></button>
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            
                            <span class="overlay"></span>
                            
                            <div class="card-image">
                                <!--<img src="images/profile1.jpg" alt="" class="card-img">-->
                                <img src="<?php echo $row["profile"]; ?>"class="card-img" >
                            </div>
                        </div>

                        <div class="card-content">
                        <?php if(isset($_SESSION['subadmin_id'])){
                            $sql1 = "SELECT profile FROM subadmin WHERE sad_id={$_SESSION['subadmin_id']}"; 
                            if ($result->num_rows > 0) {
                                // Output data of each row
                                while ($row = $result->fetch_assoc()) {?>?>
                            <h2 class="name"><?php echo $row["sad_name"]; ?></h2>
                            <span>
                                <button class="button" onclick="functionchange()">change password</button>
                                <button class="button" onclick="functionchange()">change id</button>
                                <button class="button" onclick="functionchange()">change profile pic</button>
                            </span>
                            <?php }}}
                            else{
                                $sql1 = "SELECT profile FROM admin WHERE admin_id={$_SESSION['admin_id']}";
                                $result = $conn->query($sql1);

                                // Check if there are any rows returned
                                if ($result->num_rows > 0) {
                                    // Output data of each row
                                    while ($row = $result->fetch_assoc()) {?>
                            
                            <h2 class="name"><?php echo $row["sad_name"]; ?></h2>
                            <span>
                                <button class="button" onclick="functionchange()">change password</button>
                                <button class="button" onclick="functionchange()">change id</button>
                                <button class="button" onclick="functionchange()">change profile pic</button>
                            </span>
                            <?php }}}
                            ?>
                        </div>
                    </div>
        </div>
        </div>
        </div>     
    </body>
    <?php
              }
                    } else {
                        echo "0 results"; // If no data is found
                    }
               
                
                // Close the database connection
                $conn->close();
                ?>

    <!-- Swiper JS -->

</html>
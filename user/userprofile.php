<?php session_start(); ?>
<?php
                require 'adminconection.php'; // Include your database connection file
                // Check if admin_id is set in the session
                if (isset( $_SESSION['username'] )) {
                    
                    // SQL query to retrieve admin profile image
                    $sql = "SELECT * FROM users WHERE user_id={$_SESSION['user_id']}";
                    $result = $conn->query($sql);

                    // Check if there are any rows returned
                    if ($result->num_rows > 0) {
                        // Output data of each row
                        
                        while ($row = $result->fetch_assoc()) {
                ?>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <!-- CSS -->
        <link rel="stylesheet" href="../css/userprofile.css">
 
        <div class="slide-container swiper">
            <button type="button" calss="backbutton"><a href="./index.php"><ion-icon name="chevron-back-outline"></a></ion-icon></button>
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            
                            <span class="overlay"></span>
                            
                            <div class="card-image">
                                <!--<img src="images/profile1.jpg" alt="" class="card-img">-->
                                <img src="<?php echo $row["profile_picture"]; ?>"class="card-img" >
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name"><?php echo $row["username"]; ?></h2>
                            <span>
                                <a href="./profileediting.php"><button class="button">Edit</button></a>
                                <form action="./delete_user.php" method="post"><button class="button" value="<?php echo $row["user_id"]; ?>" name="delete">delete ACCOUNT</button>
                                </form>
                                <a href="./userviewingbooked.php"><button class="button">BOOKMARK</button></a>
                                <a href="./userviewingPOST.php"><button class="button">POST</button></a>
                            </span>
                        </div>
                    </div>
        </div>
        </div>
        </div>

        
<?php
                        }
                    } else {
                        echo "0 results"; // If no data is found
                    }
                } else {
                    echo "Admin ID not set in session."; // If admin ID is not set in session
                }
                
                // Close the database connection
                $conn->close();
                ?>   
    
    <!-- Swiper JS -->

</html>
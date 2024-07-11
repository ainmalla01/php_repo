<?php session_start(); ?>
<?php
                require 'adminconection.php'; // Include your database connection file

                // Check if admin_id is set in the session
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPage</title>
    <link rel="stylesheet" href="../css/admin01.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</head>
<body>
    <header>
        <nav>
            <div class="mainbar">
            
                <!-- <div class="message"><span class="material-symbols-outlined"> mail </span></div> -->
                <a href="./adminprofile.php" class="profile"><img src="<?php echo $row["profile"]; ?>" class="profilepic" alt="" srcset=""></a>
                <button class="logoutbtn"><a href="./logout_session.php"><ion-icon name="log-out"></ion-icon></a></button>
            </div>
        </nav> 
    </header>
    <!-- side bar -->
    
    <!-- body main body -->
    <main>
        <section class="lists">
            <ul>
                <div class="H1prfile"><div class="profile"><img src="<?php echo $row["profile"]; ?>" class="profilepic" alt="" srcset=""></div><h3>Admin page</h3></div>
             
              
                <li><a href="./adminDahboard.php">Disboard</a></li>
                <li id="Mupdate"><a href="./Adminmanagingdata.php">Message</a></li>
                            <li id="Supdate"><a href="./Adminsetting.php">About us</a></li>
                            <li id="update"><a href="./adminupdating.php">list of rooms</a></li>
                            <?php if (isset($_SESSION['admin_id'])) {
                    // SQL query to retrieve admin profile image
                    ?>
                         <li id="update"><a href="./Admin_emplyor.php">Sub Admin</a></li>
                         <?php } ?>
                         
                         <li id="update"><a href="./Admin_userpost.php">User post</a></li>
                                
            </ul>
        </section>
        <section class="rightbar">
            <div class="mainboxes" id="mainboxes">

            </div>
        </section>
    </main>
    <!-- side bar -->
    <?php
                        }
                    } else {
                        echo "0 results"; // If no data is found
                    }
                
                // Close the database connection
                $conn->close();
                ?>
                  <script src="../js/jquery.js"></script>

                <script>
                      $(document).ready(function(){
    
    // Load content from the specified URL
    $('#mainboxes').load('./dashboard.php');
      
});
                </script>
</body>
</html>

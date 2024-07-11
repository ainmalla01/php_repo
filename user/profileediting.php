<style>

    .editing{
        position: absolute;
        height: 60vh;
        width: 80%;
        padding: 2em 2em;
        background-color: rgb(66, 21, 151);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 1em;
        left: 10%;
        top: 20%;
        border-radius: 40px;

    }
    .one{
        height: 24vh;
        width: 12vw;
        position: relative;
    }
    .one input{
        display: none;
    }
    .one label{
        flex-wrap: wrap;
        position: absolute;
        height: 100%;
        width: 100%;
       
        border-radius: 50%;
    }
    .one label img{
        height: 100%;
        width: 100%;
        border-radius: 50%;
    }
    .updatedata{
        flex-wrap: wrap;
        position: relative;
        height: 30vh;
        width: 30vw;

        display: flex;
        flex-direction: column;
        gap: 0.5em;
    }
    .updatedata span{
        position: relative;
        width: 100%;
        height: 6vh;
        display: flex;
        justify-content: space-between;
        flex-direction: row;
    }
    .updatedata span label{
        color: aliceblue;
        font-size: 18px;
        height: 100%;
        width: 30%;

        display: grid;
        place-items: center;
        flex-wrap: wrap;
    }
    .updatedata span input{
        width: 65%;
        border-radius: 20px;
        outline: none;
        border: none;
        padding: 1em 2em;
        flex-wrap: wrap;
       
    }
    .savebtn{
        height: 7vh;
        width: 10vw;
        background-color: rgb(67, 70, 69);
        border-radius: 5px;
        border: none;
        outline: none;
        color: aliceblue;
    }
</style>
<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection file
    require 'adminconection.php';

    // Retrieve form data
    $username = $_POST['username'];
    $useremail = $_POST['useremail'];
    $phone = $_POST['phone'];

    // Check if profile picture is uploaded
    if ($_FILES['profile_picture']['error'] == UPLOAD_ERR_OK) {
        $target_dir = "../user_pc/";
        $target_file = $target_dir . basename($_FILES["profile_picture"]["name"]);

        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file)) {
            // File uploaded successfully, update profile picture path in database
            $sql = "UPDATE users SET profile_picture = '$target_file' WHERE user_id = {$_SESSION['user_id']}";
            if ($conn->query($sql) === TRUE) {
                echo "Profile picture updated successfully";
            } else {
                echo "Error updating profile picture: " . $conn->error;
            }
        } else {
            echo "Error uploading profile picture";
        }
    }

    // Update username, email, and password in the database
    $sql = "UPDATE users SET username = '$username', useremail = '$useremail', userphone = '$phone' WHERE user_id = {$_SESSION['user_id']}";
    if ($conn->query($sql) === TRUE) {
        echo "User information updated successfully";
        header("location:./userprofile.php");
        exit();
    } else {
        echo "Error updating user information: " . $conn->error;
    }

    // Close database connection
    $conn->close();
}
?>
<?php
                require './adminconection.php'; // Include your database connection file

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
<!DOCTYPE html>

        <form action="./profileediting.php" method="post" enctype="multipart/form-data" class="editing">
            <span class="one">
                <label for="profile_picture" id="user_profile" onclick="imageEventhandling()"><img src="<?php echo $row["profile_picture"]; ?>" alt="" srcset="" class="user_img"></label>
                <input type="file" id="profile_picture" name="profile_picture" accept="image/*" class="img"/>
            </span>
           
                <div class="updatedata">  
                    <span  class="two">     
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" value="<?php echo $row["username"]; ?>"required maxlength="255"/>
            </span>
           
            <span class="two">
                <label for="useremail">Email:</label>
    <input type="email" id="useremail" name="useremail" value="<?php echo $row["useremail"]; ?>"required maxlength="255"/>
            </span>
<span class="two"><label for="contact">contact</label>
    <input type="text" id="contact" name="phone" value="<?php echo $row["userphone"]; ?>"required maxlength="255"/></span>
</div>
    <button type="submit" class="savebtn">save</button>
</form>
  
<?php
     }}}
    $conn->close()?>

    <!-- Swiper JS -->
    <script>
        
        function imageEventhandling() {
    var coverPage = document.getElementById("profile_picture");
    coverPage.removeEventListener('change', insertImage);
    coverPage.addEventListener('change', insertImage);
}

function insertImage() {
    const coverImage = document.querySelector('.user_img');
    var coverPage = document.getElementById("profile_picture");
    if (coverPage.files && coverPage.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            coverImage.src = e.target.result;
            coverImage.style.opacity = 1;
        };
        reader.readAsDataURL(coverPage.files[0]);
    } else {
        console.log('No file selected');
    }
}



    </script>

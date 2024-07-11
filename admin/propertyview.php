<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Details</title>
    <link rel="stylesheet" href="../css/books.css"> 
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <style>
    
</style>
<body>
    <?php session_start()?>
    <?php
        require 'adminconection.php';
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * from post_request WHERE request_id= $id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                ?>
<div class="roomview">
<div class="reoomdetails">
    <div class="coverimg">
        
        <div class="Cover">
        <a href="./Adminmanagingdata.php"><button>back</button></a><img src="<?php echo $row['coverpage'];?>" alt="" srcset="" ></div>
        
        <div class="otherimg_of" id="additionalimg">
    </div>
    </div>
    <div class="otherdetails">
        <div class="additional_message">
            <div class="content">
            <h4>Additional Information</h4>
             <p><?php echo $row['other_info'];?></p>
        </div>
        </div>
        <div class="othercontent">
            <div class="listofcontent">
                <p>price <?php echo $row['price'];?></p>
                <p>location  <?php echo $row['location'];?></p>
                <p>Room Number: <?php echo $row['room_num'];?></p>
                <p>Room Type: <?php echo $row['room_type'];?></p>
            </div>

        </div>
    </div>
</div>
</div>


<script>
    function additionalinfo() {
                        var additionalinfo = "<?php echo $row['additional_images'];?>";
                        var arrayOfData = additionalinfo.split(",");
                        const parentElement = document.getElementById("additionalimg");
                        arrayOfData.forEach(imageSrc => {
                            var imgElement = document.createElement("img");
                            var imgdiv = document.createElement("div");
                            imgdiv.classList.add("allimg");
                            imgElement.src = imageSrc;
                            imgdiv.appendChild(imgElement);
                            parentElement.appendChild(imgdiv);
                        });
                    }
                    additionalinfo();
                </script>
         

                  <?php
            }
        }
        $conn->close();
    ?> 

    </head>
    </body>
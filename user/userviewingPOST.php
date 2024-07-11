<link rel="stylesheet" href="../css/postrooms.css">
<?php session_start()?>

<div class="interface_of">
<h2>posted home</h2>

        <div class="details_rooms">
        
      <?php
        require "./adminconection.php";
        
        $sql = "SELECT  * FROM post_request WHERE user_id={$_SESSION["user_id"]}";

                if($result = $conn->query($sql)){
                // Check if there are any rows returned
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                ?> 
            <div class="content">
                <a class="images">
                    <img src="<?php echo $row['coverpage'];?>" alt="" class='imgs'/>
                </a>
                <div class="otherdetails">
                <p><?php echo $row['location'];?></p>
                    <p>rs.<?php echo $row['price'];?></p>
                    </div>
                    <form action="#" class="other" method="post">
    <button id="book-now-button" name="booked_id" type='submit' value="<?php echo $row['request_id'];?>">
        post
        <ion-icon name="bookmark-outline"></ion-icon>
    </button>
                    </from>

                    </div>
                
             
                <?php
                    }}}
            ?>
            <?php
   $book="SELECT * FROM approved WHERE user_id = {$_SESSION['user_id']}";

    if($result_book = $conn->query($book)){
        // Check if there are any rows returned
        if ($result_book->num_rows > 0) {
            // Output data of each row
            while ($row_book= $result_book->fetch_assoc()) {
             
                echo"<script>console.log('booked');</script>";
                ?>
                

<script>
    function booking() {
        var bookBtns =document.querySelector('#book-now-button');
        Array.prototype.forEach.call(bookBtns, function(btn) {
            console.log(btn.value);
            if (btn.value === '<?php echo $row_book['request_id'];?>') {
              
                btn.style.backgroundColor = 'green';
                btn.textContent = "Accepted";
            }
        });
    }

    booking();
</script>
<?php
            }
        }
    }
?>
<?php
   $book="SELECT * FROM reject_post WHERE user_id = {$_SESSION['user_id']}";

    if($result_book = $conn->query($book)){
        // Check if there are any rows returned
        if ($result_book->num_rows > 0) {
            // Output data of each row
            while ($row_book= $result_book->fetch_assoc()) {
                echo"<script>console.log('booked');</script>";
?>
 <div class="content">
                <a class="images">
                    <img src="<?php echo $row_book['coverpage'];?>" alt="" class='imgs'/>
                </a>
                <div class="otherdetails">
                <p><?php echo $row_book['location'];?></p>
                    <p>rs.<?php echo $row_book['price'];?></p>
                    </div>
                    <div class="other">
                       
    <button id="reject-now-button" name="booked_id" type='submit' value="<?php echo $row_book['reject_id'];?>">
        rejected
        <ion-icon name="bookmark-outline"></ion-icon>
            
    </button>
            </div>
               
                    <?php
            }}?>
                

<?php
    }
    ?>
    </div>
</div>

           

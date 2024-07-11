<link rel="stylesheet" href="../css/bookinrooms.css">
<?php session_start()?>

<div class="interface_of">
<h2>Your booked rooms/flat</h2>

        <div class="details_rooms">
        
      <?php
        require "./adminconection.php";
        $sql = "SELECT  b.*, u.*, p.*
        FROM booking_tbl b
        JOIN users u ON b.userid = u.user_id
        JOIN products p ON b.roomid = p.product_id
        WHERE b.userid = {$_SESSION['user_id']}";

                $result = $conn->query($sql);
                // Check if there are any rows returned
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                ?> 
            <div class="content">
                <a class="images">
                    <img src="<?php echo $row['cover_page'];?>" alt="" class='imgs'/>
                </a>
                <div class="otherdetails">
                <p><?php echo $row['location'];?></p>
                    <p>rs.<?php echo $row['price'];?></p>
                    </div>
                    <form action="./userviewingbooked.php" class="other" method="post">
    <button id="book-now-button" name="booked_id" type='submit' value="<?php echo $row['product_id'];?>">
        cancel
        <ion-icon name="bookmark-outline"></ion-icon>
    </button>
</form>
                    </div>
                
             
                <?php
                    }}
            ?>
           
<?php if(isset($_POST['booked_id'])){
    $book_id=$_POST['booked_id'];
    $sql = "DELETE FROM booking_tbl WHERE userid = {$_SESSION['user_id']} AND roomid = $book_id";
    if($conn->query($sql)){
        header("location:./userviewingbooked.php");
    }
    else{
        echo"error";
    }
}
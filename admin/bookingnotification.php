

<?php
require 'adminconection.php';?>
<div class="fixed_box">
<div class="message_containbox">
<?php
$sql = 'SELECT u.*, b.*, r.*
FROM booking_tbl b
JOIN users u ON b.userid = u.user_id
JOIN products r ON r.product_id = b.roomid;';

$results=$conn->query($sql);
if ($results->num_rows > 0) {
    while($row=$results->fetch_assoc()){
        ?>
           <div class="card " >
              <!-- Apply the message-box class here -->
                  <span> <a href="#">
                       <img src="<?php echo $row['profile_picture']?>" alt="avatar" class="img_msg" >
                   </a>
                   <h3 class=""><?php echo $row['username']?></h3></span>
                 <span>
                    <p><?php echo $row['username']?>, has booked property.</p>
                   <p>Email: <?php echo $row['useremail']?> </p>
                   <p>phone: <?php echo $row['userphone']?> </p>
                   </span>
                   <span class="p">
                   <a class="images" href="./books.php?id=<?php echo $row['product_id'];?>"><button id="book-now-button" name="booked_id" type='submit' value="<?php echo $row['product_id'];?>" class="notification_btn">Property</button></a>
                   <p><?php echo $row['booking_date']?> </p>
                   </span>
                   <span>          
                   </span>
        
                   
               </div>
             
            
        

        <?php
    }
    }

?>
 </div>
</div>

<?php
require 'adminconection.php';?>

<div class="fixed_box">
<div class="message_containbox">
<?php
$sql='SELECT u.*,m.*
FROM messages m
JOIN users u ON m.user_id = u.user_id;
';
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
                   <p>Email: <?php echo $row['useremail']?> </p>
                   <p>phone: <?php echo $row['userphone']?> </p>
                   </span>
                   <span class="p">
                   <p>Messgae: <?php echo $row['message']?> </p>
                   <p><?php echo $row['created_at']?> </p>
                   </span>
                   <span>
                    <form action="./messageDelete.php" method="post" class="messagedelete_btn"><button name="message_delete" value="<?php echo $row["id"]?>">delete</button></form>
                   </span>
                   <?php
                   }?>
               </div>
             
            
        

        <?php
    }

?>
 </div>
</div>
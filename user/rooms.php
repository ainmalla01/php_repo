<div class="content">
                <a class="images" href="./books.php?id=<?php echo $row['product_id'];?>">
                    <img src="<?php echo $row['coverpage'];?>" alt="" class='imgs'/>
                </a>
                <div class="otherdetails">
                <p><?php echo $row['location'];?></p>
                    <p>rs.<?php echo $row['price'];?></p>
                    </div>
                    <form action="./booking.php" class="other" method="post">
    <button id="book-now-button" name="booked_id" type='submit' value="<?php echo $row['product_id'];?>">
        BOOK_NOW
        <ion-icon name="bookmark-outline"></ion-icon>
    </button>
</form>
                </div>


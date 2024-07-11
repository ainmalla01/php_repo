<link rel="stylesheet" href="../css/updating.css">
<a class="adding" href="./addingNewroom.php">
<ion-icon name="add-outline" class="icon"></ion-icon>  
    </a>
    <div class="details">
    </div>

    <?php require 'adminconection.php' ?>
    <?php
// SQL query to retrieve all data from the products table
// $sql = "SELECT * FROM products ORDER BY id DESC LIMIT 1";
$sql = "SELECT * FROM product";

// Execute the query
$result = $conn->query($sql);

// Check if there are any rows returned
if ($result->num_rows >0) {

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
?> 
<div class="parentdiv">
    <div class="imagecover">
        <img src="<?php echo $row["coverpage"];?>" alt="Cover Image">
        <button class="ImangeBtn" onclick="imageview()">Additional Image</button>
    </div>
    <div class="childs1">
        <h1>number</h1>
        <input type="text" readonly value="<?php echo $row["phone_number"];?>">
        <!-- <button class="otherbtn">Additional Information</button> -->
    </div>
    <div class="childs3">
        <h1>price</h1>
        <input type="text" readonly value="<?php echo $row["price"];?>">
    </div>
    <div class="childs3">
        <h1>location</h1>
        <input type="text" readonly value="<?php echo $row["location"];?>">
    </div>
    <div class="childs4">
        <form action="./deleterooms.php" method="post">
            <button type="submit" name="rooms_delete" value="<?php echo $row["product_id"];?>">Remove</button>
        </form>
        <form action="./roomsupdating.php" method="post">
        <button type="submit" name="rooms_update"><a href="./roomsupdating.php?id=<?php echo $row['product_id'];?>">update</a></button>
        </form>
    </div>
</div>

 <script>






function imageview(){
        console.log('click');
    var addingparents = document.getElementsByClassName('details')[0];
    // var parentdiv = document.getElementByClassName('parentdiv');
    var imageviewbox=document.createElement('div');
    imageviewbox.classList.add('imgeViewbox');
    addingparents.style.filter = 'blur(5px)';
    document.body.appendChild(imageviewbox);
    

}
addingforms();

        </script>

<?php
    }
} else {
    echo "0 results"; // If no data is found
}

// Close the database connection
$conn->close();
?>

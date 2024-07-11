<?php
        require 'adminconection.php';
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT a.*, p.*
            FROM additional_info a
            JOIN products p ON a.product_id = p.product_id
            WHERE a.product_id = $id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                ?>
         
              
 <link rel="stylesheet" href="../css/addingNewroom.css">
<button type="button" class="backbutton" ><a href="./adminupdating.php">Back</a></button>
    <div class="divform" id="form1">
        <form class="form1" action="./roomsupdating.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm() " >
            <div class="firstadding_div">
                    <div class="small_inf">
                        
                     <div class=" two"><span class="label1"><label for="number" >Number:</label></span>
                        <span><input type="text" id="number" name="number" placeholder="+977" value="<?php echo $row['number'];?>" /></span></div>
            
                        <div class=" two"><span class="label1"><label for="price" >Price:</label></span>
                        <span><input type="text" id="price" name="price" placeholder="Rs."  value="<?php echo $row['price'];?>"/></span></div>
            
                        <div class=" two"><span class="label1"><label for="location">Location:</label></span>
                        <span><input type="text" id="location" name="location" value="<?php echo $row['location'];?>"/></span></div>
                    </div>
            </div>  
            <div class="secondadding_div">
                <textarea name="additional_inf" id="additional_inf" cols="100" rows="10" ><?php echo $row['other_info'];?></textarea>
            </div>
            <button type="submit" value="<?php echo $id ?>" name="update" class="submitBtn" id='submitBtn'> UPDATE</button>
        </form> 
        <?php }}?>   
        <?php
        if(isset($_POST['update'])){
            $number=$_POST['number'];
            $id=$_POST['update'];
            $price=$_POST['price'];
            $location=$_POST['location'];
            $additional_info=$_POST['additional_inf'];
           
            $sql="Update product SET phone_number=$number,price=$price,location='$location',other_info='$additional_info' WHERE product_id=$id";
            if($conn->query($sql1)){
                header("Location: ./adminupdating.php");
            }
        }

// Close the connection
$conn->close();

?>
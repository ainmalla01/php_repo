<link rel="stylesheet" href="../css/setting.css">
<link rel="stylesheet" href="../css/updating.css">
<div class="Roomnepal_footer">
    <div class="Aboutus">
        <div class="Aboutus_header">
            <h3>Aboutus</h3>
            <div class="btn">
                <button id="addbtn">Add</button>
            </div>
         </div>
       
        
        <div class="aboutus_bodypart">
             <!-- php -->
            <?php require 'adminconection.php' ?>
    <?php
$sql = "SELECT * FROM aboutus";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
?> 
            <section class="content_of_aboutus">
                <div class="imgpart">
                    <label for="about_us_img" class="D_person">
                        <img src="<?php echo $row['ADimg']?>" alt="" id="about_us_img_preview" />
                    </label>
                    <input type="file" name="personimage" id="about_us_img" accept="image/*"  />
                </div>
                <div class="textarra_p">
                    <div class="name"><h3>name</h3> <input type="text" name="Pname" value="<?php echo $row['ADname']?>" readonly/></div>
                    <textarea name="about_textbox" id="about_textbox" placeholder="other details type here...."cols="30" rows="5" readonly><?php echo $row['ADtext']?></textarea>
                </div>
                <div class="btn_edit_delete">
                 <form action="./aboutus_delete.php" method="post">
        <button type="submit" name="delete" value="<?php echo $row['id']; ?>" id="delete">Delete</button>
    </form>
              
    <!-- <form action="./update_aboutus.php" method="post">
        <button type="submit" name="edit" value="Edit</button>
    </form>   -->
</div>
    </section>    

        <!-- ------------------------------------------ -->
        <?php }}
        $conn->close();?>
        </div>
    </div>
</div>
<script src="../js/Jquery.js"></script>
<script>
  document.getElementById('addbtn').addEventListener('click', function() {
    $(".Roomnepal_footer").load("./ABOUTUS_inserting.php");
    document.getElementById('delete').style.display='none';
});


</script>

<script src="../js/aboutus_adding.js">

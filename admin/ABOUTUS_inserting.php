
<link rel="stylesheet" href="../css/setting1.css">
<div class="settings">
    <div class="ABOUTUS">
        <h1>ABOUT US</h1>
        <form class="about_us_form" action="inserting_0f_adoutus.php" enctype="multipart/form-data" method="post">
            <div class="imgpart">
                <label for="about_us_img" class="D_person"onclick="addAboutUSimage()">
                    <img src="rr.jpg" alt="" id="about_us_img_preview" />
                </label>
                <input type="file" name="personimage" id="about_us_img" accept="image/*"  />
            </div>
            <div class="textarra_p">
                <div class="name"><h3>name</h3> <input type="text" name="Pname" placeholder="type name...."/></div>
                <textarea name="about_textbox" id="about_textbox" placeholder="other details type here...."cols="30" rows="5"></textarea>
            </div>
            <input type="submit" class="ABOUTUS_ADD" value="add">
        </form>
    </div>
</div>
<script>

</script>
<script src="./aboutus_adding.js">
    
</script>

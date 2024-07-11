<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/addingNewroom.css">
</head>
<body>
    <button type="button" class="backbutton" ><a href="./adminupdating.php">Back</a></button>
    <div class="divform" id="form1">
        <form class="form1" action="./adding.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm() " >
            <div class="firstadding_div">
                    <div class="form1_div "><span ><label for="cover_page" onclick="imageEventhandling()"><img src="../pc/R.jpg" class="cover_image" alt="" srcset=""/></label></span>
                     <span> <input type="file" id="cover_page" name="cover_page" accept="image/*"/></span></div>
                    <div class="small_inf">
                        <div class="  T_in"><span class="label2"><label for="additional_images" class="IlB" onclick="foradding()">Addtional images</label></span>
                        <span><input type="file" id="additional_images" name="additional_images[]" multiple accept="image/*"/></span></div>
                     <div class=" two"><span class="label1"><label for="number" >Number:</label></span>
                        <span><input type="text" id="number" name="number" placeholder="+977" /></span></div>
            
                        <div class=" two"><span class="label1"><label for="price" >Price:</label></span>
                        <span><input type="text" id="price" name="price" placeholder="Rs." /></span></div>
            
                        <div class=" two"><span class="label1"><label for="location">Location:</label></span>
                        <span><input type="text" id="location" name="location"/></span></div>
                    </div>
            </div> 
            <div class="chosingopt">
                <select name="room_num" id="room_num">
                    <option value="1 room">
                        1 room
                    </option>
                    <option value="2 room">
                        2 room
                    </option>
                    <option value="1 flat">
                        1 flat
                    </option>
                </select>
                <select name="roomtype" id="roomtype">
                    <option value=" home type">
                        for living
                    </option>
                    <option value="office type">
                        for office
                    </option>
                    
                </select>
            </div>  
            <div class="secondadding_div">
                <textarea name="additional_inf" id="additional_inf" cols="100" rows="10"></textarea>
            </div>
            <input type="submit" value="Submit" class="submitBtn" id='submitBtn'/>
        </form> 
        <script src="../js/formOfAdding.js"></script>
</body>
</html>
<style>
  .registration-box {
    position: fixed;
    left:40%;
    top:2%;
width: 300px;
border: 1px solid #ccc;
padding: 20px;
box-shadow: 0px 0px 10px #ccc;
display: flex;
flex-direction: column;
align-items: center;
}

.profile-pic {
width: 100px;
height: 100px;
border-radius: 50%;
object-fit: cover;
margin-bottom: 20px;
}

label {
display: block;
margin-top: 10px;
}

input[type="text"],
input[type="email"],
input[type="password"] {
width: 100%;
padding: 10px;
margin-top: 5px;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
}

input[type="submit"] {
width: 100%;
padding: 10px;
background-color: #4CAF50;
color: white;
border: none;
border-radius: 4px;
cursor: pointer;
margin-top: 20px;
}

</style>
<div class="registration-box">
    <form action="./AddingSub_admin.php" method="post" enctype="multipart/form-data">
      <label for="profile_picture" onclick="imageEventHandling()">
        <img src="../images/pic_3.png" alt="Profile picture" class="profile-pic new_image">
      </label>
      <input type="file" id="profile_picture" name="profile_picture" accept="image/*" style="display:none"><br>
      <label for="name">Name:</label><br>
      <input type="text" id="name" name="name"><br>
      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email"><br>
      <label for="number">Phone_number</label><br>
      <input type="text" id="number" name="number"><br>
      <label for="password">Password:</label><br>
      <input type="password" id="password" name="password"><br>
      <input type="submit" value="Register">
    </form>
  </div>
  
  <script>
  function imageEventHandling() {
    var coverPage = document.getElementById("profile_picture");
    coverPage.removeEventListener('change', insertImage);
    coverPage.addEventListener('change', insertImage);
  }
  
  function insertImage() {
    const coverImage = document.querySelector('.new_image');
    var coverPage = document.getElementById("profile_picture");
    if (coverPage.files && coverPage.files[0]) {
      const reader = new FileReader();
      reader.onload = function(e) {
        coverImage.src = e.target.result;
        coverImage.style.opacity = 1;
      };
      reader.readAsDataURL(coverPage.files[0]);
    } else {
      console.log('No file selected');
    }
  }
  </script>
  
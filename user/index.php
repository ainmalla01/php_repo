<?php session_start();?>
<?php require "adminconection.php"?>

<?php
if(isset($_SESSION['username'])) {
    require "./componets/headerlogin.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $bookid = $_POST['booked_id'];
      $userid = $_SESSION['user_id'];
      $check = "SELECT roomid FROM booking_tbl WHERE userid = {$_SESSION['user_id']}";
      $result = $conn->query($check);

      // Initialize $enter
      $enter = true;

      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              if ($row['roomid'] == $bookid) {
                  $enter = false;
                  break;
              }
          }
      }

      if ($enter) {
          $sql = "INSERT INTO `booking_tbl` (`roomid`, `userid`) values($bookid, $userid)";
          if ($conn->query($sql)) {
              header("location:./index.php");
              exit();
          } 
  }
}
}else{
  require "./componets/header.php";
}
?>

    <!--body --------------------------------- -->
    <link rel="stylesheet" href="../css/interfaceSection.css">
    <link rel="stylesheet" href="../css/search.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/rooms.css">
<main id="page">
  <!-- section 1............................................................. -->
  <div class="bodypart">
    <section class="section1">
      <div class="sec1_content">
        <div class="text">
       <h2>Time to meet your</h2>
       <h1>new Home</h1>
       <p>find the perfect place to all home can be hard Our team of creatives and specialist makes real estate easy.</p>
       </div>
       <div class="img">
        <img src="./componets/homeimg.jpg" alt="" srcset="">
       </div>
      </div>

      <!-- search bar-------------------------------------------------------------------------------- -->
      <!-- <div class="show_search">
        <h1>click</h1>
      </div> -->
      <div class="search">
    <?php require "./componets/search.php"?>
    </div>
      
    </section>
   
<!-- section 2........................................................................... -->
   
</main>
<div class="other_contacting_admin">
  <div class="social_m whatsapps"><img src="../pc/OIP.jpg" alt="" srcset=""></div>
  <div class="social_m facebook"><img src="../pc/OIPFace.jpg" alt="" srcset=""></div>
</div>
<div class="support_message">
<ion-icon name="chatbubble-sharp" ></ion-icon>
<ion-icon name="close-outline" class="n_active"></ion-icon>
</div>
<div class="interface_of">
        <div class="details_rooms">
    <?php
     $sql = "SELECT * FROM product";
     $result = $conn->query($sql);
     // Check if there are any rows returned
     if ($result->num_rows > 0) {
         // Output data of each row
         while ($row = $result->fetch_assoc()) {
     ?> 

<div class="content">
                <a class="images" href="./books.php?id=<?php echo $row['product_id'];?>">
                    <img src="<?php echo $row['coverpage'];?>" alt="" class='imgs'/>
                </a>
                <div class="otherdetails">
                <p><?php echo $row['location'];?></p>
                    <p>rs.<?php echo $row['price'];?></p>
                    </div>
                    <form action="./index.php" class="other" method="post">
    <button id="book-now-button" name="booked_id" type='submit' value="<?php echo $row['product_id'];?>">
        BOOK_NOW
        <ion-icon name="bookmark-outline"></ion-icon>
    </button>
</form>
                </div>

     <?php
         }}
 
 // Close the database connection

 ?>
   </div>
</div>      

<!-- footer................................................................................................................... -->
<?php require "footer.php"?>





    <script src="../js/userHeader.js" ></script>
    <script src="../js/Jquery.js" ></script>
     <script>
      const support=document.querySelector('.support_message');
      const click_for_serch=document.querySelector('.show_search');
      const serch=document.querySelector('.search');
      const admin_help=document.querySelector('.other_contacting_admin');
      const support_child=document.querySelectorAll('.support_message ion-icon');
      support.addEventListener('click',()=>{
        if(support_child[1].classList.contains('n_active')){
        support_child[0].classList.add('n_active');
        support_child[1].classList.remove('n_active');
        support.classList.add('color_support');
        admin_help.style.display='flex';

        }
        else{
          support_child[1].classList.add('n_active');
        support_child[0].classList.remove('n_active');
        support.classList.remove('color_support');
        admin_help.style.display='none';
        }
      });
      click_for_serch.addEventListener('click',()=>{
        serch.style.display='flex';

      })
   
    </script>
    
  </body>
  
</html>

<?php
if (isset($_SESSION['user_id'])) {
    require "bookedsign.php";
}
?>
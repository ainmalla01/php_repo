<?php session_start()?>
<?php if (isset( $_SESSION['username'] )) {
  require "./componets/headerlogin.php";
}
else{
  require "./componets/header.php";
  require './adminconection.php'; 
}


?>

    <!-- <link rel="stylesheet" href="../css/feedback.css"> -->
    <!-- <link rel="stylesheet" href="../css/rooms.css"> -->
    <link rel="stylesheet" href="../css/search1.css">
    <link rel="stylesheet" href="../css/rooms.css">
 

   <? include "searching.php"?>

<?php require "./footer.php"?>

     <script src="../js/Jquery.js"></script>
    
  </body>

  <script>


  </script>
</html>


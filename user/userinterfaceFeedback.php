<?php session_start()?>
<?php if (isset( $_SESSION['username'] )) {
  require "./componets/headerlogin.php";

?>

    <link rel="stylesheet" href="../css/feedback.css">
    <link rel="stylesheet" href="../css/footer.css">
<main id="page" class="fpage">

  <div class="feedbackbox">
    <?php require "./massegesubmit-view.php";?>
    <form class="Msub" action="messages_submit.php"  method="post">
      <textarea class="input_massege" rows="1" cols="100" name="message_cos"></textarea>
      <button type="submit"><ion-icon name="send"></ion-icon></button>
    </form>
  </div>
</main>
<?php require "./footer.php"?>

     <script src="../js/Jquery.js"></script>
    
  </body>

  <script>


  </script>
</html>
<?php }
else{
  header("location:./loginnow.php");
  exist();
}?>

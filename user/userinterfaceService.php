
      <link rel="stylesheet" href="../css/service.css">
    <link rel="stylesheet" href="../css/footer.css">
    <?php session_start()?>

    <?php
if(isset($_SESSION['username'])) {
    require "./componets/headerlogin.php";
} else {
    require "./componets/header.php";
}
?>
<main id="page" class="spage">
    <section class="SERVICE">
      <div class="Service_content">
      <div class="roomservice">
      <div class="myroomservice"><img src="../images/icon-1.png" alt="" srcset=""><h2>Buying Service</h2><p>This category includes services related to purchasing goods or services. For example, online shopping platforms or procurement services.</p></div>
      <div class="myroomservice"><img src="../images/icon-2.png" alt="" srcset=""><h2>Renting Service</h2><p>This category encompasses services where customers can rent items or properties for temporary use. This could include car rental services, equipment rental, or property rental platforms.</p></div>
      <div class="myroomservice"><img src="../images/icon-3.png" alt="" srcset=""><h2>Selling Service</h2><p> category includes services focused on facilitating the sale of goods or services. Examples include e-commerce platforms, auction sites, or classified advertisement services.</p></div>
      <div class="myroomservice"><img src="../images/icon-4.png" alt="" srcset=""><h2>Posting</h2><p>This category might include services that involve posting or sharing content online. This could include social media platforms, forums, or classified ad websites where users can post listings.</p></div>
      <div class="myroomservice"><img src="../images/icon-6.png" alt="" srcset=""><h2>Contacting</h2><p> category could involve services that facilitate communication between parties. For example, messaging apps, email services, or contact forms on websites</p></div>
  </div>
</div>
    </section>
</main>
<?php require "./footer.php"?>
    <script src="userHeader.js" ></script>
    
  </body>

 
</html>

<?php session_start();?>
<?php require "adminconection.php"?>

<?php
if(isset($_SESSION['username'])) {
    require "./componets/headerlogin.php";
   
}else{
  require "./componets/header.php";
}
?>

    <!--body --------------------------------- -->
    <link rel="stylesheet" href="../css/interfaceSection.css">
   
    <link rel="stylesheet" href="../css/footer.css">
  

    <main id="page">
  <section class="video">
    <video autoplay muted loop playsinline>
      <source src="../video/video.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="home_dis">
      <div class="home_details">
        <h1>Find your perfect place</h1>
        <p>A perfect home is a sanctuary where comfort and warmth embrace every corner,<br> offering peace and security to its inhabitants</p>
      </div>
</div>
    <?php require"./componets/search.php" ?>
  </section>
 <?php require"home_section.html" ?>
 <?php require"aboutus.html" ?>
</main>










<!-- contact -------------------------------- -->
<div class="other_contacting_admin">
  <div class="social_m whatsapps"><img src="../pc/OIP.jpg" alt="" srcset=""></div>
  <div class="social_m facebook"><img src="../pc/OIPFace.jpg" alt="" srcset=""></div>
</div>
<div class="support_message">
<ion-icon name="chatbubble-sharp" ></ion-icon>
<ion-icon name="close-outline" class="n_active"></ion-icon>
</div>


<!-- footer................................................................................................................... -->
<?php require "footer.php"?>
    <script src="../js/userHeader.js" ></script>
    <script src="../js/Jquery.js" ></script>

     <script>
      const support=document.querySelector('.support_message');
      // const click_for_serch=document.querySelector('.show_search');
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
   
   
    </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <script>
 gsap.from("header", {
  y: -100,
  opacity: 0,
  duration: 1,
  ease: "back.out"
});
gsap.from(".home_details",{
  x:-100,
  y:-10,
  opacity:0,
  duration:1.5,
  ease:"power2"
})
// Scroll-triggered animations for each section (except the first one)
gsap.utils.toArray("section").forEach((sec, i) => {
  if (i === 0) return; // skip the hero section (index 0)

  gsap.from(sec, {
    scrollTrigger: {
      trigger: sec,
      start: "top 80%", // when section top hits 80% of viewport
      end: "top 30%",   // when section top hits 30% of viewport
      toggleActions: "play none none reverse", // you can tweak this
      markers: true     // show debug markers (optional)
    },
    opacity: 0,
    y: 100,
    duration: 1,
    ease: "power2.out"
  });
});
  </script>
    
  </body>
  
</html>

<?php
if (isset($_SESSION['user_id'])) {
    require "bookedsign.php";
}
?>
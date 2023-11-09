<!-- <div class="position-fixed fixed-top nav-top"> -->
<div class="">
 <style>
  .nav-item .active {
   font-weight: bold;
   opacity: 1 !important;
   color: var(--bs-black) !important;
  }
 </style>

 <div class="container-fluid text-white" style="background-color: #343352;">
  <div class="row align-items-center">
   <div class="col-12 col-lg-6 text-start text-lg-start">
    <nav class="nav justify-content-lg-start justify-content-between ">
     <a class="text-white nav-link px-1" href="tel:919892212044"><i class="fad fa-phone-alt "></i> +91 98922 12044</a>
     <a class="text-white nav-link px-1" href="#">/</a>
     <a class="text-white nav-link px-1" href="tel:919323545995">+91 93235 45995</a>
     <a class="text-white nav-link px-1" href="#">/</a>
     <a class="text-white nav-link px-2" href="https://maps.app.goo.gl/zGXMAjbqQxexrzq39" target="_blank"><i class="fad fa-map-marker-alt"></i> Malwani Malad (West)</a>
     <!-- <a class="text-white nav-link px-2" href="#">Link</a> -->
    </nav>
   </div>
   <div class="col-12 col-lg-6 text-start text-lg-end">
    <nav class="nav justify-content-lg-end justify-content-between">
     <a class="text-white nav-link px-2" href="https://www.instagram.com/holymotherenglish/" target="_blank"><i class="fab fa-instagram "></i></a>
     <a class="text-white nav-link px-2" href="https://wa.me/918655145995"><i class="fab fa-whatsapp "></i></a>
     <a class="text-white nav-link px-2" href="https://www.facebook.com/HolyMotherEnglishSchool" target="_blank"><i class="fab fa-facebook-f "></i></a>
     <a class="text-white nav-link px-2" href="https://www.youtube.com/watch?v=TXMIQ7qemKA" target="_blank"><i class="fab fa-youtube "></i></a>
     <a class="text-white nav-link px-2" href="info@zewt.in" target="_blank"><i class="fas fa-envelope-open-text "></i></a>
     <!-- <a class="text-white nav-link px-2" href="#">Link</a> -->
    </nav>
   </div>
  </div>
 </div>


 <nav class="navbar navbar-expand-lg bg-bg-bg-light py-0 " id="navbar" style="background-color: #817cff;">
  <div class="container-fluid">
   <!-- <a class="navbar-brand fw-bold" href="#"><img src="https://windsapp.com/static/media/logo-icon.1525bf06850008ccab83.png" height="50" alt=""></a> -->
   <a class="navbar-brand fw-bold " style="font-size: 30px !important;" href="./index.php"> <img src="./img/logo/logo.png" height="75px" alt=""> Holy Mother</a>
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mx-auto">
     <?php

     if (basename($_SERVER["SCRIPT_FILENAME"], '.php') == "index" || basename($_SERVER["SCRIPT_FILENAME"], '.php') == "") {
      echo  '
      <li class="nav-item fs-6 mb-0" style="font-size: 22px !important;">
       <a class="nav-link mb-0  active" aria-current="page" href="./index.php">Home</a>
      </li>
      ';
     } else {
      echo  '
      <li class="nav-item fs-6 mb-0" style="font-size: 22px !important;">
       <a class="nav-link mb-0  opacity-75" aria-current="page" href="./index.php">Home</a>
      </li>
      ';
     }



     if (basename($_SERVER["SCRIPT_FILENAME"], '.php') == "gallery") {
      echo  '
      <li class="nav-item fs-6 mb-0" style="font-size: 22px !important;">
       <a class="nav-link mb-0  active" aria-current="page" href="./gallery.php" >Gallery</a>
      </li>
      ';
     } else {
      echo  '
      <li class="nav-item fs-6 mb-0" style="font-size: 22px !important;">
       <a class="nav-link mb-0  opacity-75" aria-current="page" href="./gallery.php">Gallery</a>
      </li>
      ';
     }


     if (basename($_SERVER["SCRIPT_FILENAME"], '.php') == "events") {
      echo  '
      <li class="nav-item fs-6 mb-0" style="font-size: 22px !important;">
       <a class="nav-link mb-0  active" aria-current="page" href="./events.php">Events</a>
      </li>
      ';
     } else {
      echo  '
      <li class="nav-item fs-6 mb-0" style="font-size: 22px !important;">
       <a class="nav-link mb-0  opacity-75" aria-current="page" href="./events.php">Events</a>
      </li>
      ';
     }

     if (basename($_SERVER["SCRIPT_FILENAME"], '.php') == "donations") {
      echo  '
      <li class="nav-item fs-6 mb-0" style="font-size: 22px !important;">
       <a class="nav-link mb-0  active" aria-current="page" href="./donations.php">Donations</a>
      </li>
      ';
     } else {
      echo  '
      <li class="nav-item fs-6 mb-0" style="font-size: 22px !important;">
       <a class="nav-link mb-0  opacity-75" aria-current="page" href="./donations.php">Donations</a>
      </li>
      ';
     }

     if (basename($_SERVER["SCRIPT_FILENAME"], '.php') == "about") {
      echo  '
      <li class="nav-item fs-6 mb-0" style="font-size: 22px !important;">
       <a class="nav-link mb-0  active" aria-current="page" href="./about.php">About us</a>
      </li>
      ';
     } else {
      echo  '
      <li class="nav-item fs-6 mb-0" style="font-size: 22px !important;">
       <a class="nav-link mb-0  opacity-75" aria-current="page" href="./about.php">About us</a>
      </li>
      ';
     }
     if (basename($_SERVER["SCRIPT_FILENAME"], '.php') == "contact") {
      echo  '
      <li class="nav-item fs-6 mb-0" style="font-size: 22px !important;">
       <a class="nav-link mb-0  active" aria-current="page" href="./contact.php">Contacts us</a>
      </li>
      ';
     } else {
      echo  '
      <li class="nav-item fs-6 mb-0" style="font-size: 22px !important;">
       <a class="nav-link mb-0  opacity-75" aria-current="page" href="./contact.php">Contacts us</a>
      </li>
      ';
     }


     ?>
    </ul>


   </div>

  </div>
 </nav>
</div>


<a href="https://clinicia.com/calendar/book?u=49084" target="_blank" class="Inquery-icon text-decoration-none">
 <span>
  Connect us for a cause
 </span>
</a>


<!-- <script>
 (function() {
  // Get the height of the nav element
  var nav = document.getElementById('navbar');
  var navHeight = nav.offsetHeight;

  // Add padding to the body element
  document.body.style.paddingTop = (navHeight) + 'px';
 })();
</script> -->
<!Doctype <!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PG-founder-ABOUT</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        <?php require('include/links.php')?>
        <style>
          .box:hover{
            border-top-color: #2ec1ac !important;
          }
        </style>
        

    </head>
    <body class="bg-light">
    <?php require('include/header.php')?>
    <div class="my-5">
      <h2 class="fw-bold h-font text-center">ABOUT US</h2>
      <div class="h-line bg-dark"></div>
      <p class="text-center mt-3">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit.<br>
        Tenetur, et nostrum distinctio ea soluta cupiditate! Quos.
      </p>
    </div>
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 col-md-5 mb-4 order-lg-1  order-md-1order-2">
          <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Nam debitis dolores quis doloremque! Praesentium, eligendi animi.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Nam debitis dolores quis doloremque! Praesentium, eligendi animi.
          </p>
        </div>
        <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
          <img src="images/about/1.png" class="w-100">
        </div>
      </div>
    </div>
  
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 px-4">
          <div class="bg-white rounded shadow p-4 border-top border-4 text-center  box">
            <img src="images/about/images.png" width="70px">
            <h4 class="mt-3">100+ PGs and Hostels</h4>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
          <div class="bg-white rounded shadow p-4 border-top border-4 text-center  box">
            <img src="images/about/customers.png" width="70px">
            <h4 class="mt-3">200+ Customers</h4>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
          <div class="bg-white rounded shadow p-4 border-top border-4 text-center  box">
            <img src="images/about/rating.png" width="70px">
            <h4 class="mt-3">150+ Reviews</h4>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
          <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
            <img src="images/about/staffs.png" width="70px">
            <h4 class="mt-3">100+StaffS</h4>
          </div>
        </div>
        
      </div>
    </div>

    <h3 class="mt-5 fw-bold h-font text-center">MANAGEENT TEAM</h3>

    <div class="container px-4 h-50 ">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper mb-5 ">
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/1.png" class="w-100">
            <h5 class="mt-2">Random Name</h5>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/1.png" class="w-100">
            <h5 class="mt-2">Random Name</h5>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/1.png" class="w-100">
            <h5 class="mt-2">Random Name</h5>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/1.png" class="w-100">
            <h5 class="mt-2">Random Name</h5>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/1.png" class="w-100">
            <h5 class="mt-2">Random Name</h5>
          </div>
          
      
        </div>
      <div class="swiper-pagination"></div>
  </div>

    </div>

 
  <!--footer-->
  <?php require('include/footer.php')?>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
      slidesPerView :4,
      spaceBetween:40,
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints:{
        320:{
          slidesPerView:1,
        },
        6400:{
          slidesPerView:1,
        },
        768:{
          slidesPerView:2,
        },
        1024:{
          slidesPerView:3,
        },
      }
      });
    </script>
  </body>
</html>
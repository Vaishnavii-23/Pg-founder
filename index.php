<!Doctype <!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PG-founder-Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        <link rel="stylesheet"href="include/common.css"/>
        <?php require('include/links.php')?>
      <style>
            .availability-form{
              margin-top: -200px;
              z-index: 2;
              position: relative;
            }
            @media screen and (max-width:575px){
              .availability-form{
              margin-top: 25px;
              padding: 0 35px;
             }
            }
      </style>
    </head>
  <body class="bg-light">
    <?php require('include/header.php')?>
    

    <!-- carousal -->
    <div class="container-fluid px-lg-4 mt-4 h-60">
      <div class=" swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="images\carousal\1.png" class="w-100 d-block"/>
          </div>
          <div class="swiper-slide">
            <img src="images\carousal\2.png"  class="w-100  d-block"/>
          </div>
          <div class="swiper-slide">
            <img src="images\carousal\3.png"  class="w-100  d-block"/>
          </div>
        </div>
      </div>
    </div>
    <!--check availability form-->
    <div class="container availability-form">
    <div class="row">
      <div class="col-lg12 bg-white shadow p-4 rounded">
        <h5 mb-4>Check booking availability</h5>
        <form >
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight: 500;">Check-in</label>
            <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight: 500;">Check-out</label>
            <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight: 500;">Select-rooms</label>
            <select class="form-select shadow-none">
              <option value="1">Two</option>
              <option value="2">Three</option>
              <option value="3">four</option>
              <option value="4">six</option>
            </select>
            </div>
            <div class="col-lg-2 mb-3">
            <label class="form-label" style="font-weight: 500;">Select-mess</label>
            <select class="form-select shadow-none">
              <option value="1">not required</option>
              <option value="2">veg only</option>
              <option value="3">non-veg and veg </option>
            </select>
            </div>
            <div class="col-lg-1 mb-lg-3 mt-2">
              <button type="submit" class="btn btn-white shadow-none custom-bg">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    </div>

    <!--Our Hostels and PG-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> OUR ROOMS </h2>
      <div class="conatiner">
        <div class="row">
          <div class="col-lg-4 col-md-6 my-3">
        <div class="card boreder-0 shadow" style="max-width: 350px;margin:auto;">
          <img src="images/rooms/1.png" class="card-img-top" alt="room1">
          <div class="card-body">
              <h5>simple room name</h5>
              <h6 class="mb-4">₹ 5000 per month</h6>
              <div class="features mb-4">
               <h6 class="mb-1">Featuress</h6>
               <span class="badge rounded-pill bg-light text-dark text-wrap">
                3-Beds
               </span>
               <span class="badge rounded-pill bg-light text-dark text-wrap">
                Common bathroom
               </span><span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Balcony
               </span>
              </div>
              <div class="facilities mb-4">
                <h6 class="mb-4">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                Wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                AC
                </span><span class="badge rounded-pill bg-light text-dark text-wrap">
                Veg and Non-veg mess
                </span>
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More deatils</a>

              </div>
            </div>
          </div>
          </div>
          <div class="col-lg-4 col-md-6 my-3">
        <div class="card boreder-0 shadow" style="max-width: 350px;margin:auto;">
          <img src="images/rooms/1.png" class="card-img-top" alt="room1">
          <div class="card-body">
              <h5>simple room name</h5>
              <h6 class="mb-4">₹ 5000 per month</h6>
              <div class="features mb-4">
               <h6 class="mb-1">Featuress</h6>
               <span class="badge rounded-pill bg-light text-dark text-wrap">
                3-Beds
               </span>
               <span class="badge rounded-pill bg-light text-dark text-wrap">
                Common bathroom
               </span><span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Balcony
               </span>
              </div>
              <div class="facilities mb-4">
                <h6 class="mb-4">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                Wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                AC
                </span><span class="badge rounded-pill bg-light text-dark text-wrap">
                Veg and Non-veg mess
                </span>
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More deatils</a>

              </div>
            </div>
          </div>
          </div>

          <div class="col-lg-4 col-md-6 my-3">
        <div class="card boreder-0 shadow" style="max-width: 350px;margin:auto;">
          <img src="images/rooms/1.png" class="card-img-top" alt="room1">
          <div class="card-body">
              <h5>simple room name</h5>
              <h6 class="mb-4">₹ 5000 per month</h6>
              <div class="features mb-4">
               <h6 class="mb-1">Featuress</h6>
               <span class="badge rounded-pill bg-light text-dark text-wrap">
                3-Beds
               </span>
               <span class="badge rounded-pill bg-light text-dark text-wrap">
                Common bathroom
               </span><span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Balcony
               </span>
              </div>
              <div class="facilities mb-4">
                <h6 class="mb-4">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                Wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                AC
                </span><span class="badge rounded-pill bg-light text-dark text-wrap">
                Veg and Non-veg mess
                </span>
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More deatils</a>

              </div>
            </div>
          </div>
          </div>

          <div class="col-lg-12 text-center mt-5">
          <a href="#"class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-sm">More Rooms>>></a>
          </div>
        </div>
      </div>
    <!--OUR FACILITIES-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> OUR FACILITIES </h2>
    <div class="container">
      <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-mg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities1/wifi.png"width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-mg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities1/AC.png"width="80px">
          <h5 class="mt-3">AC</h5>
        </div>
        <div class="col-mg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities1/cooler.png"width="80px">
          <h5 class="mt-3">cooler</h5>
        </div>
        <div class="col-mg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities1/fridge.png"width="80px">
          <h5 class="mt-3">Fridge</h5>
        </div>
        <div class="col-mg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities1/Tv.png"width="80px">
          <h5 class="mt-3">TV</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
          <a href="#"class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-sm">More Facilities>>></a>
        </div>
      </div>
    </div>

  <!--Reach-us-->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> REACH-US </h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
      <iframe  class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120073.18649111116!2d75.30520145!3d19.870096249999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdb9815a369bc63%3A0x712d538b29a2a73e!2sChhatrapati%20Sambhaji%20Nagar%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1731234447045!5m2!1sen!2sin"   loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Call Us</h5>
          <a href="tel- +911234567890" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>+911234567890
          </a>
          <br>
          <a href="tel- +911234567890" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>+911234567890
          </a>
          <h5 class="mt-4">Email</h5>
          <a href="mailto : abc@gmail.com">
            abc@gmail.com
          </a>
        </div>
        <div class="bg-white p-4 rounded mb-4">
          <h5>Follow Us</h5>
          <a href="#" class="d-inline-block mb-3 ">
            <span class="badge-bg-light text-dark fs-6 p-2">
            <i class="bi bi-twitter"></i> Twitter 
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block mb-3 ">
            <span class="badge-bg-light text-dark fs-6 p-2">
            <i class="bi bi-facebook"></i> Facebook
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block mb-3 ">
            <span class="badge-bg-light text-dark fs-6 p-2">
            <i class="bi bi-instagram"></i> Instagram
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--footer-->
  <?php require('include/footer.php')?>

  

    <br><br><br>
    <br><br><br>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween:30,
      effect: "fade",
      loop:true,
      Autoplay:{
        Delay:1000,
        disableoninteraction:false,
      },
    });

    var swiper = new Swiper(".Swiper-Testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView :"3",
      loop:true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
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
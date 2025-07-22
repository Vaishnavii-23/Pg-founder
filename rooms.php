<!Doctype <!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PG-founder</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php require('include/links.php')?>


    </head>
    <body class="bg-light">
    <?php require('include/header.php')?>
    <div class="my-5">
      <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
      <div class="h-line bg-dark"></div>
    </div>
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-0">
          <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
            <div class="container-fluid flex-lg-column align-items-stretch">
              <h4 class="mt-2"> Filter</h4>
              <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterdropdown" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse flex-column  align-items-stretch mt-2 " id="filterdropdown">
                <div class="border bg-light p-3 rounded mb-3">
                  <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                  <label class="form-label" >Check-in</label>
                  <input type="date" class="form-control shadow-none mb-3">
                  <label class="form-label" >Check-in</label>
                  <input type="date" class="form-control shadow-none mb-3">
                </div>
                <div class="border bg-light p-3 rounded mb-3">
                  <h5 class="mb-3" style="font-size: 18px;">FACILITIESS</h5>
                  <div class="mb-2">
                  <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                  <label class="check-label" for="f1">Facility one</label>
                  </div>
                  <div class="mb-2">
                  <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                  <label class="check-label" for="f2">Facility two</label>
                  </div>
                  <div class="mb-2">
                  <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                  <label class="check-label" for="f2">Facility three</label>
                  </div>
                
              </div>
            </div>
          </nav>
        </div>

        <div class="col-lg-8 col-md-12 px-4">
          <div class="card mb-4 border-0 shadow" >
            <div class="row g-0 p-3 align-items-center">
              <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-5 mb-lg-0 mb-md-0 mb-3 ">
                    <img src="images/rooms/1.png" class="img-fluid rounded-start">
                  </div>
                  <div class="col-md-5 px-lg-3 px-md-3 px-0 ">
                    <h5 class="mb-3">Simple Room Name</h5>
                    <div class="features mb-3">
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
                    <div class="facilities ">
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
                  </div>
                  <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                  <h6 class="mb-4">₹ 5000 per month</h6>
                  <a href="#" class="btn btn-sm w-100 text-white bg-dark shadow-none mb-2">Book Now</a>
                  <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More deatils</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4 border-0 shadow" >
            <div class="row g-0 p-3 align-items-center">
              <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-5 mb-lg-0 mb-md-0 mb-3 ">
                    <img src="images/rooms/1.png" class="img-fluid rounded-start">
                  </div>
                  <div class="col-md-5 px-lg-3 px-md-3 px-0 ">
                    <h5 class="mb-3">Simple Room Name</h5>
                    <div class="features mb-3">
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
                    <div class="facilities ">
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
                  </div>
                  <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                  <h6 class="mb-4">₹ 5000 per month</h6>
                  <a href="#" class="btn btn-sm w-100 text-white bg-dark shadow-none mb-2">Book Now</a>
                  <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More deatils</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4 border-0 shadow" >
            <div class="row g-0 p-3 align-items-center">
              <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-5 mb-lg-0 mb-md-0 mb-3 ">
                    <img src="images/rooms/1.png" class="img-fluid rounded-start">
                  </div>
                  <div class="col-md-5 px-lg-3 px-md-3 px-0 ">
                    <h5 class="mb-3">Simple Room Name</h5>
                    <div class="features mb-3">
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
                    <div class="facilities ">
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
                  </div>
                  <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                  <h6 class="mb-4">₹ 5000 per month</h6>
                  <a href="#" class="btn btn-sm w-100 text-white bg-dark shadow-none mb-2">Book Now</a>
                  <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More deatils</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
      </div>
    </div>
  
  

  


 
  <!--footer-->
  <?php require('include/footer.php')?>
  </body>
</html>
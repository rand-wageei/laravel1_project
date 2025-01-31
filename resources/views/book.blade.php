<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    
    <style>
        .tours{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
    </style>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">Adventures<span>The perfect place to travel</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="/" class="nav-link">HOME</a></li>
          <li class="nav-item"><a href="categories" class="nav-link">CATEGORIES</a></li>
          <!-- <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> -->
          <li class="nav-item"><a href="about" class="nav-link">ABOUT US</a></li>
          <li class="nav-item"><a href="contact" class="nav-link">CONTACT US</a></li>
          @if(session('name'))
          <li class="nav-item"><a href="{{route('logout')}}" class="nav-link">LOGOUT</a></li>
          <li class="nav-item cta"><a href="book" class="nav-link">BOOK NOW</a></li>
          @else
          <li class="nav-item"><a href="login" class="nav-link">LOGIN</a></li>
          <li class="nav-item"><a href="signup" class="nav-link">REGISTER</a></li>

          @endif
        </ul>
      </div>
    </div>
  </nav>
    
<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-5">
                <div class="search-wrap-1 search-wrap-notop ftco-animate p-4">
                    <form action="{{route('search')}}" method="post" class="search-property-1">
                        @csrf
                        <div class="row">
                            <div class="col-lg align-items-end">
                                <div class="form-group">
                                    <label for="#">Destination</label>
                                    <div class="form-field">
                                        <div class="icon"><span class="ion-ios-search"></span></div>
                                        <input type="text" class="form-control" placeholder="Search place" name="search">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg align-items-end">

                            </div>

                            <div class="col-lg align-self-end">
                                <div class="form-group">
                                    <div class="form-field">
                                        <input type="submit" value="Search" class="form-control btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('./myimg/tourist-visiting-ancient-city-turkey.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h1 class="mb-3 bread">OUR TOURS</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Book now <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <br> <br>    


  <section class="ftco-section ftco-no-pt">
      <div class="container">
          <div class="row justify-content-center pb-4">
        <div class="col-md-12 heading-section text-center ftco-animate">
          <h2 class="mb-4"> OUR TOURS </h2>
        </div>
      </div>
      <div class="row">
          <div class="col-md-4 ftco-animate">
              <div class="project-wrap">
                  <a href="petradetails" class="img" style="background-image: url(myimg/petra.jpg);"></a>
                  <div class="text p-4">
                      <span class="price">10JOD/person</span>
                      <span class="days">1 Day Tour</span>
                      <h3><a href="#">Petra, Ma'an</a></h3>
                      
                      <ul>
                          <li><span class="flaticon-shower"></span>0</li>
                          <li><span class="flaticon-king-size"></span>0</li>
                          <li><span class="flaticon-mountains"></span>Near Mountain</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-md-4 ftco-animate">
              <div class="project-wrap">
                  <a href="wadidetails" class="img" style="background-image: url(myimg/w-rum.jpg);"></a>
                  <div class="text p-4">
                      <span class="price">10JOD/person</span>
                      <span class="days">1 Day Tour</span>
                      <h3><a href="#">Wadi Rum, Aqaba</a></h3>
                          <ul>
                          <li><span class="flaticon-shower"></span>0</li>
                          <li><span class="flaticon-king-size"></span>0</li>
                          <li><span class="flaticon-mountains"></span>Near Mountain</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-md-4 ftco-animate">
              <div class="project-wrap">
                  <a href="aqabadetails" class="img" style="background-image: url(myimg/aqC.jpg);"></a>
                  <div class="text p-4">
                      <span class="price">3JOD/person</span>
                      <span class="days">7hour Tour</span>
                      <h3><a href="#">Red sea, Aqaba</a></h3>
                      <ul>
                          <li><span class="flaticon-shower"></span>1</li>
                          <li><span class="flaticon-king-size"></span>0</li>
                          <li><span class="flaticon-sun-umbrella"></span>Beach</li>
                      </ul>
                  </div>
              </div>
          </div>

          <div class="col-md-4 ftco-animate">
              <div class="project-wrap">
                  <a href="ammandetails" class="img" style="background-image: url(myimg/amman-jordan.jpg);"></a>
                  <div class="text p-4">
                      <span class="price">50JOD/person</span>
                      <span class="days">5 Days Tour</span>
                      <h3><a href="#">Amman, Jordan</a></h3>
                      <ul>
                          <li><span class="flaticon-shower"></span>2</li>
                          <li><span class="flaticon-king-size"></span>3</li>
                          <li><span class="flaticon-mountains"></span>Near Mountain</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-md-4 ftco-animate">
              <div class="project-wrap">
                  <a href="ummdetails" class="img" style="background-image: url(myimg/thumbs_b2_311f22c55a8405b4512844093d34b4f9.jpg);"></a>
                  <div class="text p-4">
                      <span class="price">15JOD/person</span>
                      <span class="days">1 Day Tour</span>
                      <h3><a href="#">Umm Qais, Irbid</a></h3>
                      
                      <ul>
                          <li><span class="flaticon-shower"></span>2</li>
                          <li><span class="flaticon-king-size"></span>3</li>
                          <li><span class="flaticon-mountains"></span>Near Mountain</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-md-4 ftco-animate">
              <div class="project-wrap">
                  <a href="deaddetails" class="img" style="background-image: url(myimg/deadS.jpg);"></a>
                  <div class="text p-4">
                      <span class="price">30JOD/person</span>
                      <span class="days">2 Days Tour</span>
                      <h3><a href="#">Dead sea</a></h3>
                  
                      <ul>
                          <li><span class="flaticon-shower"></span>2</li>
                          <li><span class="flaticon-king-size"></span>2</li>
                          <li><span class="flaticon-sun-umbrella"></span> Beach</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      </div>
      
  </section> --}}

    <div class="tours">
        @foreach ($trips as $trip)
        
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <div class="img" style="background-image: url({{$trip->photo}});"></div>
                    <div class="text p-4">
                        <span class="price">{{$trip->price}}</span>
                        <span class="days">{{$trip->days}}</span>
                        <h3><a href="#">{{$trip->trip_name}}</a></h3>
                        
                        <ul>
                            <li><span class="flaticon-shower"></span>0</li>
                            <li><span class="flaticon-king-size"></span>0</li>
                            <li><span class="flaticon-mountains"><a href="{{route('details' , $trip->id)}}">details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
       
        @endforeach
    
    </div>
  
    <footer class="ftco-footer bg-bottom" style="background-image: url(images/footer-bg.jpg);">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Adventures</h2>
                <p>Explore the world's most beautiful destinations and make every journey an unforgettable
                  experience with us.</p>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
    
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Have a Questions?</h2>
                <div class="block-23 mb-3">
                  <ul>
                    <li><span class="icon icon-map-marker"></span><span class="text">203 Main Street,
                        Tabarbour, Amman, Jordan</span></li>
                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">+03 201 3467
                        </span></a></li>
                    <li><a href="#"><span class="icon icon-envelope"></span><span
                          class="text">Adventure@gmail.com</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
    
    
    
              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>document.write(new Date().getFullYear());</script> Adventures
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>
        </div>
      </footer>
      
    
  
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  
  
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
      
    </body>
  </html>





    

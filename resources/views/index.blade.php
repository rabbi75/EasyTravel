<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="asset/css/style.css">

    <title>Easy-Travel</title>
  </head>
  <body>
    <div class="wrapper">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <!-- <img src="asset/image/travel_logo.jpg" alt="travel_logo"> -->
          <a class="navbar-brand" href="#">EasyTravel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Events</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
              <button type="button" class="btn btn-warning btn-sm"><i class="uil uil-phone"></i> +088 01758 152 475</button>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button type="button" class="btn btn-warning btn-sm"><i class="uil uil-search"></i></button>
            </form>
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <section>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="asset/image/slider3.jpg" class="d-block w-100" alt="image">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="asset/image/slider2.jpg" class="d-block w-100" alt="image">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="asset/image/slider1.jpg" class="d-block w-100" alt="image">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="asset/image/slider4.jpg" class="d-block w-100" alt="image">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
          </div>
      </section>

      <section>
        <div class="container">
          <div class="upcommingevent text-center">
            <h5>Check Our Best Promotional Tour</h5>
            <h2>Upcoming Events</h2>
            <div class="swiper-container swiper2">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                  <a href="eventDetails.html"><img src="asset/image/event-1.jpg" alt="event1"></a>
                  <div class="eventcontent">
                    <p><a href="eventDetails.html">Mega Turky</a></p>
                    <p class="amount">TK: 10000</p>
                  </div>
                  <p><a href="eventDetails.html">12 Jun - 18 Jun</a> = 5 Days</p>
                </div>
                <div class="swiper-slide">
                  <a href="eventDetails.html"><img src="asset/image/event-2.jpg" alt="event1"></a>
                  <div class="eventcontent">
                    <p><a href="eventDetails.html">Mega Turky</a></p>
                    <p class="amount">TK: 10000</p>
                  </div>
                  <p><a href="eventDetails.html">12 Jun - 18 Jun</a> = 5 Days</p>
                </div>
                <div class="swiper-slide">
                  <a href="eventDetails.html"><img src="asset/image/event-3.jpg" alt="event1"></a>
                  <div class="eventcontent">
                    <p><a href="eventDetails.html">Mega Turky</a></p>
                    <p class="amount">TK: 10000</p>
                  </div>
                  <p><a href="eventDetails.html">12 Jun - 18 Jun</a> = 5 Days</p>
                </div>
                <div class="swiper-slide">
                  <a href="eventDetails.html"><img src="asset/image/event-4.jpg" alt="event1"></a>
                  <div class="eventcontent">
                    <p><a href="eventDetails.html">Mega Turky</a></p>
                    <p class="amount">TK: 10000</p>
                  </div>
                  <p><a href="eventDetails.html">12 Jun - 18 Jun</a> = 5 Days</p>
                </div>
              </div>
              <!-- If we need navigation buttons -->
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="container">
          <div class="about-us">
            <div class="row">
              <div class="col-6">
                <img src="asset/image/about-us.png" alt="about-us">
              </div>
              <div class="col-6">
                <div class="about-content">
                  <h6>About Us</h6>
                  <h1>Get ready for real time adventure</h1>
                  <p>Let’s start your journey with us, your dream will come true. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.</p>
                  <p>Let’s start your journey with us, your dream will come true. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.</p>
                  <button type="button" class="btn btn-warning btn-bg">Book Your Destination</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section>
          <div class="testimonial">
              <div class="swiper-container Swiper1">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="testimonialBox">
                      <div class="content">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <div class="details">
                          <div class="imgBox">
                            <img src="asset/image/user2.jpg" alt="user">
                          </div>
                          <h3>Golam Rabbi</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="testimonialBox">
                      <div class="content">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <div class="details">
                          <div class="imgBox">
                            <img src="asset/image/user1.jpg" alt="user">
                          </div>
                          <h3>User Name</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="testimonialBox">
                      <div class="content">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <div class="details">
                          <div class="imgBox">
                            <img src="asset/image/user1.jpg" alt="user">
                          </div>
                          <h3>User Name</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="testimonialBox">
                      <div class="content">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <div class="details">
                          <div class="imgBox">
                            <img src="asset/image/user1.jpg" alt="user">
                          </div>
                          <h3>User Name</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="testimonialBox">
                      <div class="content">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <div class="details">
                          <div class="imgBox">
                            <img src="asset/image/user1.jpg" alt="user">
                          </div>
                          <h3>User Name</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
          </div>
      </section>

      <section>
        <div class="container">
          <div class="pastEventText">
            <h4>Past Event</h4>
            <div class="swiper-container swiper3">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><a href="eventDetails.html"><img src="asset/image/event-1.jpg" alt=""></a><a href="eventDetails.html"><h5>Rangamati</h5></a></div>
                <div class="swiper-slide"><a href="eventDetails.html"><img src="asset/image/event-2.jpg" alt=""></a><a href="eventDetails.html"><h5>Rangamati</h5></a></div>
                <div class="swiper-slide"><a href="eventDetails.html"><img src="asset/image/event-3.jpg" alt=""></a><a href="eventDetails.html"><h5>Rangamati</h5></a></div>
                <div class="swiper-slide"><a href="eventDetails.html"><img src="asset/image/event-4.jpg" alt=""></a><a href="eventDetails.html"><h5>Rangamati</h5></a></div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section>
        <div class="footer text-center">
          <div class="row">
            <div class="col-5">
              <div class="left">
                <h3>EasyTravel</h3>
                <p>Land behold it created good saw after she'd Our set living. Signs midst dominion creepeth morning laboris nisi ufsit aliquip.</p>
                <div class="social">
                  <ul>
                    <li><a href="#"><i class="uil uil-facebook-f"></i></a></li>
                    <li><a href="#"><i class="uil uil-twitter"></i></a></li>
                    <li><a href="#"><i class="uil uil-linkedin"></i></a></li>
                    <li><a href="#"><i class="uil uil-youtube"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-2">
              <div class="middle">
                <h5>Navigation</h5>
                <div class="nav">
                  <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-5">
              <div class="right">
                <h5>Contact Us</h5>
                <div class="contact">
                  <p>Uttara university</p>
                  <p>2182091008@Uttarauniversity.edu.bd</p>
                  <p>+088 01758 152 475</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="footer-bottom">
          <p>Copyright ©2021 All rights reserved by Golam Rabbi</p>
        </div>
      </section>


    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="asset/js/swiper-bundle.min.js"></script>
    <script src="asset/js/main.js"></script>
  </body>
</html>
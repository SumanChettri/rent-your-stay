
<!doctype html>
<html lang="en">

<head>
  <style>
    body{
      background-image: linear-gradient(rgb(79, 183, 218),rgb(197, 175, 51),rgb(220, 109, 109));
    }
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="" />

    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:400,500i,700|Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/vendor/icomoon/style.css">
    <link rel="stylesheet" href="css/vendor/owl.carousel.min.css">
    <link rel="stylesheet" href="css/vendor/aos.css">
    <link rel="stylesheet" href="css/vendor/animate.min.css">
    <link rel="stylesheet" href="css/vendor/bootstrap.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Rent your stay</title>
  </head>
  <body>
    <?php
    // Database configuration
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database";
    
 
    $conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
    // Prepare the SQL query
    $sql = "SELECT * FROM rooms";
    
   
    
    // Display the results in a table
  
    $result = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_assoc($result);
   
?> 
    <div id="untree_co--overlayer"></div>
    <div class="loader">
      <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>

    <nav class="untree_co--site-mobile-menu">
      <div class="close-wrap d-flex">
        <a href="#" class="d-flex ml-auto js-menu-toggle">
          <span class="close-label">Close</span>
          <div class="close-times">
            <span class="bar1"></span>
            <span class="bar2"></span>
          </div>
        </a>
      </div>
      <div class="site-mobile-inner"></div>
    </nav>


    <div class="untree_co--site-wrap">

      <nav class="untree_co--site-nav js-sticky-nav">
        <div class="container d-flex align-items-center">
          <div class="logo-wrap">
          <a href="index.html" class="untree_co--site-logo"><h1 style="text-shadow: 5px 3px rgb(71, 168, 213);font-size: 30px; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-style: oblique; color: rgb(213, 199, 69);">
            Rent-Your-Stay</h1></a>
          </div>
          <div class="site-nav-ul-wrap text-center d-none d-lg-block">
            <ul class="site-nav-ul js-clone-nav">
              <li class="active"><a href="index.html">Home</a></li>
              <li class="has-children">
                <a href="rooms.php">Rooms</a>
                <ul class="dropdown">
                <h3 style="text-align: center;" > <a href="ADMIN/user_dashboard.php">Dashboard</a></h3>
               

                  <li class="has-children">
                    <a href="#">East Sikkim</a>
                    <ul class="dropdown">
                      <li>
                        <a href="ADMIN/room-Details.php">Bardang</a>
                      </li>
                      <li>
                        <a href="ADMIN/room-Details.php">Rangpo</a>
                      </li>
                      <li>
                        <a href="ADMIN/room-Details.php">Singtam</a>
                      </li>
                      <li>
                        <a href="ADMIN/room-Details.php">Majitar</a>
                      </li>
                    
                    </ul>
                  </li>
                  <li class="has-children">
                    <a href="#">South Sikkim</a>
                    <ul class="dropdown">
                      <li>
                        <a href="ADMIN/room-Details.php">Namchi</a>
                      </li>
                      <li>
                        <a href="ADMIN/room-Details.php"> Namthang</a>
                      </li>
                      <li>
                        <a href="ADMIN/room-Details.php">Melli</a>
                      </li>
                    
                    
                    </ul>
                  </li>
                  <li class="has-children">
                    <a href="#">West Sikkim</a>
                    <ul class="dropdown">
                      <li>
                        <a href="ADMIN/room-Details.php">Pelling</a>
                      </li>
                      <li>
                        <a href="ADMIN/room-Details.php"> Yangang</a>
                      </li>
                    
                    </ul>
                  </li>
                  <li class="has-children">
                    <a href="#">North</a>
                    <ul class="dropdown">
                      <li>
                        <a href="ADMIN/room-Details.php">Nathula</a>
                      </li>
                      
                    
                    </ul>
                  </li>
                </ul>
              </li>
            <!-- /* <li><a href="amenities.html">Amenities</a></li>*/ -->
              <!-- <li><a href="gallery.html">Gallery</a></li> -->
              <li><a href="about.html">About Us</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </div>
          <div class="icons-wrap text-md-right">

            <ul class="icons-top d-none d-lg-block">
         

           <button class="lloogg-btn">  <a href="login.php"> Login </button></a>
           
            <button class="sign-btn"><a href="regis.php">Sign up </button></a>
            
            <button class="sign-btn"><a href="ADMIN/admin_login.php">Admin</button></a>
          </ul>

            <!-- Mobile Toggle -->
            <a href="#" class="d-block d-lg-none burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
              <span></span>
            </a>
          </div>
        </div>
      </nav>

      <main class="untree_co--site-main">
        
        <div class="untree_co--site-hero inner-page" style="background-image: url('images/background2.jpg')">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-7 text-center">
                <div class="site-hero-contents" data-aos="fade-up">
                  <h1 class="hero-heading text-white">Our Rooms</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="untree_co--site-section pb-0">
          <div class="container-fluid px-md-0">

            <div class="row justify-content-center text-center site-section pt-0">
              <div class="col-md-6">
                <h2 class="display-4" data-aos="fade-up">Enjoy Your Stay</h2>
                <p data-aos="fade-up" data-aos-delay="100">Rent-Your-Stay is an establishment that provides paid rooms on a short-term or long-term basis. </p>
              </div>
            </div>
            <div class="row no-gutters align-items-stretch room-animate site-section">
              <div class="col-md-7 img-wrap" data-jarallax-element="-100">
                
                <div class="bg-image h-100" style="background-color: #efefef; background-image: url('images/room_1_a.jpg');">
                
                </div>
              </div>
              <div class="col-md-5">
                <div class="row justify-content-center">
                  <div class="col-md-8 py-5">
              <?php    $sql = "SELECT * FROM rooms";
    
   
    
    // Display the results in a table
  
    $result = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_assoc($result);
   
?> 
                    <h3 class="display-4 heading"><?php echo $rows["room_name"];?> </h3>
                    <div class="room-exerpt">
                      <div class="room-price mb-4"><?php echo $rows["price"];?> <span class="per">/month</span></div>
                      <p><?php echo $rows["address"];?>  </p>
                      <p>Small, lower-priced hotels may offer only the most basic guest services and facilities. </p>

                      <div class="row mt-5">
                        <div class="col-12">
                          <h3 class="mb-4">Amenities</h3>
                          <ul class="list-unstyled ul-check">
                            <li>32-inch LCD TV with cable channels and DVD player</li>
                            <li>Handheld and mounted rain shower heads</li>
                            <li>Wi-Fi access</li>
                            <li>Safety deposit box</li>
                            <li>Mini-bar</li>
                          </ul>
                          <a href="ADMIN/room-Details.php"><button class="btn-viewroom">View</a></button>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

              </div>
            </div>
          </div>


          <div class="container-fluid px-md-0">
            <div class="row no-gutters align-items-stretch room-animate site-section">
              <div class="col-md-7 order-md-2 img-wrap" data-jarallax-element="-100">
                
                <div class="bg-image h-100" style="background-color: #efefef; background-image: url('images/slider_2.jpg');"></div>
                
              </div>
              <div class="col-md-5">
                <div class="row justify-content-center">
                  <div class="col-md-8 py-5">
                  <?php
                         $sql = "SELECT * FROM rooms LIMIT 1,1";
                    
                   
                    
                         // Display the results in a table
                       
                         $result = mysqli_query($conn, $sql);
                         $rows = mysqli_fetch_assoc($result);
                         ?>
                    <h3 class="display-4 heading"><?php echo $rows["room_name"];?></h3>
                    <div class="room-exerpt">
                      <div class="room-price mb-4"><?php echo $rows["price"];?><span class="per">/month</span></div>
                      <p><?php echo $rows["address"];?></p>

                      <p>Small, lower-priced hotels may offer only the most basic guest services and facilities. </p>

                      <div class="row mt-5">
                        <div class="col-12">
                          <h3 class="mb-4">Amenities</h3>
                          <ul class="list-unstyled ul-check">
                            <li>32-inch LCD TV with cable channels and DVD player</li>
                            <li>Handheld and mounted rain shower heads</li>
                            <li>Wi-Fi access</li>
                            <li>Safety deposit box</li>
                            <li>Mini-bar</li>
                          </ul>
                          <a href="ADMIN/room-Details.php"><button class="btn-viewroom">View</a></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="container-fluid px-md-0">

            <div class="row no-gutters align-items-stretch room-animate site-section">
              <div class="col-md-7 img-wrap" data-jarallax-element="-100">
                
                <div class="bg-image h-100" style="background-color: #efefef; background-image: url('images/room_1_a.jpg');"></div>
                
              </div>
              <div class="col-md-5">
                <div class="row justify-content-center">
                  <div class="col-md-8 py-5">
                <?php
                  $sql = "SELECT * FROM rooms LIMIT 2,1";
                    
                   
                    
                    // Display the results in a table
                  
                    $result = mysqli_query($conn, $sql);
                    $rows = mysqli_fetch_assoc($result);
                    ?>
                    <h3 class="display-4 heading"><?php echo $rows["room_name"];?></h3>
                    <div class="room-exerpt">
                      <div class="room-price mb-4"><?php echo $rows["price"];?><span class="per">/month</span></div>
                      <p><?php echo $rows["address"];?> </p>
                      <p>Small, lower-priced hotels may offer only the most basic guest services and facilities. </p>

                      <div class="row mt-5">
                        <div class="col-12">
                          <h3 class="mb-4">Amenities</h3>
                          <ul class="list-unstyled ul-check">
                            <li>32-inch LCD TV with cable channels and DVD player</li>
                            <li>Handheld and mounted rain shower heads</li>
                            <li>Wi-Fi access</li>
                            <li>Safety deposit box</li>
                            <li>Mini-bar</li>
                          </ul>
                          <a href="ADMIN/room-Details.php"><button class="btn-viewroom">View</a></button>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

              </div>
            </div>
          </div>


          <div class="container-fluid px-md-0">
            <div class="row no-gutters align-items-stretch room-animate site-section pb-0">
              <div class="col-md-7 order-md-2 img-wrap" data-jarallax-element="-100">
                <div class="bg-image h-100" style="background-color: #efefef; background-image: url('images/slider_2.jpg');"></div>
              </div>
              <div class="col-md-5">
                <div class="row justify-content-center">
                  <div class="col-md-8 py-5">
                  <?php
                  $sql = "SELECT * FROM rooms LIMIT 3,1";
                    
                   
                    
                    // Display the results in a table
                  
                    $result = mysqli_query($conn, $sql);
                    $rows = mysqli_fetch_assoc($result);
                    ?>
                    <h3 class="display-4 heading"><?php echo $rows["room_name"];?></h3>
                    <div class="room-exerpt">
                      <div class="room-price mb-4"><?php echo $rows["price"];?><span class="per">/month</span></div>
                      <p><?php echo $rows["address"];?></p>

                      <p>Small, lower-priced hotels may offer only the most basic guest services and facilities. </p>

                      <div class="row mt-5">
                        <div class="col-12">
                          <h3 class="mb-4">Amenities</h3>
                          <ul class="list-unstyled ul-check">
                            <li>32-inch LCD TV with cable channels and DVD player</li>
                            <li>Handheld and mounted rain shower heads</li>
                            <li>Wi-Fi access</li>
                            <li>Safety deposit box</li>
                            <li>Mini-bar</li>
                          </ul>
                          <a href="ADMIN/room-Details.php"><button class="btn-viewroom">View</a></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

    
        <div class="untree_co--site-section py-5 bg-body-darker cta">
          <div class="container">
            <div class="row">
              <div class="col-12 text-center">
                <h3 class="m-0 p-0">If you have any special requests, please feel free to call us. <a href="9641025910">+91. 9641025910</a></h3>
              </div>
            </div>
          </div>
        </div>


      </div>
      <footer class="untree_co--site-footer">

        <div class="container">
          <div class="row">
            <div class="col-md-4 pr-md-5">
              <h3>About Us</h3>
              <p>Rent-Your-Stay is an establishment that provides paid rooms on a short-term or long-term basis. Facilities provided may range from a modest-quality.</p>
              <p><a href="#" class="readmore">Read more</a></p>
            </div>
            <div class="col-md-8 ml-auto">
              <div class="row">
                <div class="col-md-3">
                  <h3>Navigation</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Rooms</a></li>
                    <li><a href="#">Amenities</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                </div>
                <div class="col-md-9 ml-auto">
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <h3>Address</h3>
                      <address>NH10 Bardang <br> sikkim, India</address>
                    </div>
                    <div class="col-md-6">
                      <h3>Telephone</h3>
                      <p>
                        <a href="#">+91 9641025910</a> <br>
                        <a href="#">+91 9641025910</a>
                      </p>
                    </div>
                  </div>

                  <h3 class="mb-0">Feel free to contact us</h3>
                  <p>Get notify every week</p>
                  <form action="#" method="" class="form-subscribe">
                    <div class="form-group d-flex">
                      <input type="email" class="form-control mr-2" placeholder="Enter your email">
                      <input type="submit" value="Subscribe" class="btn btn-black px-4 text-white">
                    </div>
                  </form>
                </div>
                
              </div>
            </div>
          </div>
          <div class="row mt-5 pt-5 align-items-center">
            <div class="col-md-6 text-md-left">
             
            </div>
            <div class="col-md-6 text-md-right">
              <ul class="icons-top icons-dark">
              <li>
                <a href="#"><span class="icon-facebook"></span></a>
              </li>
              <li>
                <a href="#"><span class="icon-twitter"></span></a>
              </li>
              <li>
                <a href="#"><span class="icon-instagram"></span></a>
              </li>
              <li>
                <a href="#"><span class="icon-tripadvisor"></span></a>
              </li>
            </ul>

            </div>
          </div>
        </div>
        
      </footer>
    </div>
    <!-- Search -->
    <div class="search-wrap">
      <a href="#" class="close-search js-search-toggle">
        <span>Close</span>
      </a>
      <div class="container">
        <div class="row justify-content-center align-items-center text-center">
          <div class="col-md-12">
            <form action="#">
              <input type="search" name="s" id="s" placeholder="Type a keyword and hit enter..."  autocomplete="false">
            </form>    
          </div>
        </div>
      </div>
    </div>

    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/vendor/owl.carousel.min.js"></script>
    
    <script src="js/vendor/jarallax.min.js"></script>
    <script src="js/vendor/jarallax-element.min.js"></script>
    <script src="js/vendor/ofi.min.js"></script>

    <script src="js/vendor/aos.js"></script>

    <script src="js/vendor/jquery.lettering.js"></script>
    <script src="js/vendor/jquery.sticky.js"></script>

    <script src="js/vendor/TweenMax.min.js"></script>
    <script src="js/vendor/ScrollMagic.min.js"></script>
    <script src="js/vendor/scrollmagic.animation.gsap.min.js"></script>
    <script src="js/vendor/debug.addIndicators.min.js"></script>


    <script src="js/main.js"></script>
  </body>
</html>
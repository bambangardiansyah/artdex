@extends('layouts.footer')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8">
    <title>ArtDex</title>

    <!-- ====== Google Fonts ====== -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-GLhlTQ8iK9tWQFvMz/3RnIwmeUUKJZZESt6nquI5qf61OpGA8l5+5S/SFIIJdA2z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="...">



    <!-- ====== ALL CSS ====== -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/more.css">
 
</head>

<body data-spy="scroll" data-target=".navbar-nav">
    <!-- ====== Header ====== -->
    <header id="header" class="header">
        <!-- ====== Navbar ====== -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <!-- Logo -->
                {{-- <a class="navbar-brand logo" href="index.html">
                    <img src="assets/images/artdex.png" alt="logo">
                </a> --}}
                <!-- // Logo -->

                <!-- Mobile Menu -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"><span><i class="fa fa-bars"></i></span></button>
                <!-- Mobile Menu -->

                <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        
                        <li class="nav-item active"><a class="nav-link" href="#home">HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="exguest">EXPLORE</a></li>
                        <li class="nav-item"><a class="nav-link" href="#pricing">PREMIUM</a></li>
                        <li class="nav-item"><a class="nav-link pr0" href="#contact">CONTACT</a></li>
                        <li class="dropdown">
                            <a class="nav-link" href="#" id="btnlanguage">LANGUAGE</a>
                            <div class="dropdown-content">
                                <a href="#" onclick="changeLanguage('id')" data-lang="id">Bahasa <br> Indonesia</a>
                                <a href="#" onclick="changeLanguage('en')"data-lang="en" class="active">English</a>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link pr0" href="login" id="loginLink">MASUK</a></li>
                       
                    </ul>
                </div>
            </div>
        </nav>
        <!-- ====== // Navbar ====== -->
    </header>
    <!-- ====== // Header ====== -->

    <!-- ====== Hero Area ====== -->
    <div class="hero-aria" id="home">
        <!-- Hero Area Content -->
        <div class="container">
            <div class="hero-content h-100">
                <div class="d-table">
                    <div class="d-table-cell">
                        <h2 class="text-uppercase" id="rumahseniman">Art shelter & home</h2>
                        {{-- <h3 id="run" class="text-uppercase"><span class="typed"></span></h3> --}}
                        <!-- <p>Nikmati karya dari seniman ternama atau sebarkan karyamu sendiri</p> -->
                        <a href="exguest" class="button smooth-scroll">Explore Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Hero Area Content -->
        <!-- Hero Area Slider -->
        <div class="hero-area-slids owl-carousel">
            <div class="single-slider">
                <!-- Single Background -->
                <div class="slider-bg" style="background-image: url(assets/images/hero-area/img-1.png)"></div>
                <!-- // Single Background -->
            </div>
            <div class="single-slider">
                <!-- Single Background -->
                <div class="slider-bg" style="background-image: url(assets/images/hero-area/img-2.png)"></div>
                <!-- // Single Background -->
            </div>
            <div class="single-slider">
                <!-- Single Background -->
                <div class="slider-bg" style="background-image: url(assets/images/hero-area/img-4.png)"></div>
                <!-- // Single Background -->
            </div>
        </div>
        <!-- // Hero Area Slider -->
    </div>
    <!-- ====== //Hero Area ====== -->





    <!-- ====== Portfolio Section ====== -->
    <section id="portfolio" class="section-padding pb-85 portfolio-area bg-light">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h2>Explore</h2>
                        <p>Find a piece of art that's like your own character and discover its owner</p>
                    </div>
                </div>
            </div>
              
                <!-- // Single Portfolio -->
    <div class="wrapper">
         <div class="image-item medium">
            <a href="exguest">
            <img src="assets/images/portfolio/kesiji.png" alt="" srcset="">
            </a>
        </div>
         <div class="image-item large">
            <a href="exguest">
            <img src="assets/images/portfolio/keloro.png" alt="" srcset="">
            </a>
        </div>
         <div class="image-item large">
            <a href="exguest">
            <img src="assets/images/portfolio/ketelu.png" alt="" srcset="">
            </a>
        </div>
         <div class="image-item medium">
            <a href="exguest">
            <img src="assets/images/portfolio/kepapat.png" alt="" srcset="">
            </a>
        </div>
         <div class="image-item medium">
            <a href="exguest">
            <img src="assets/images/portfolio/kelimo.png" alt="" srcset="">
            </a>
        </div>
         <div class="image-item medium">
            <a href="exguest">
            <img src="assets/images/portfolio/keenem.png" alt="" srcset="">
            </a>
        </div>
        {{-- <div class="other">
            <div class="other2">
            <a class="button" id="liat" href="home">LIHAT LAINNYA</a>
            </div>
        </div> --}}
      
    </div>     
    <div class="more">
        <a href="grid">View More</a>
        </div>             
        </div>
    </section>

    <a href="exguest" class="exguesthov">
    <div class="discov">
        <div class="item" id="itmg">
            <div class="immg">
             <img id="" src="assets/images/monalisa.png" alt="" srcset="">
            </div>
            <div class="immg">
             <img id="numpuk" src="assets/images/koceng.png" alt="" srcset="">    
            </div>
        </div>
        <div class="item" id="text">
            <h2 style="color: goldenrod">Discover the most popular art among users</h2>
            <div class="gg">
                <div></div>
                <div></div>
            </div>
            <p>Find some paintings that are visited by other visitors and are updated every day.</p>
            <a href="exguest">
                <img id="discov" src="assets/images/discov.png" alt="" srcset="">
            </a>
        </div>

    </div>
    </a>

    <!-- ====== Pricing Area ====== -->
    <section class="section-padding pb-70 pricing-area" id="pricing"> 
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>Improve your access</h2>
                        <p>Upload infinite picture with Premium</p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->
            <div class="row" id="pricingrow">
                <!-- Single Price Box -->
                <div class="col-lg-6 col-md-6">
                    <div class="single-price-box text-center">
                        <div class="price-head">
                            <h2>Basic</h2>
                            <h3 id="rego">Rp.0<span></span></h3>
                        </div>
                        <ul>
                            <li>8x Upload</li>
                            <li>Comment Access</li>
                            <li>Profile Edit</li>
                            <li>Unlimited Explore</li>
                        </ul>
                        <button style="background-color: transparent; border:none;" id="bt" type="button" class="button" data-toggle="modal" data-target="#exampleModalCenter">
                            <a style="color: #fff;" href="">Use Now</a>
                            </button>
                          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" style="text-align: center;  width:100%;" id="exampleModalLongTitle">Access Denied</h5>
                                  {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> --}}
                                    {{-- <span aria-hidden="true">&times;</span> --}}
                                  </button>
                                </div>
                                <div class="modal-body">
                                  Please login first to do this action
                                </div>
                                <div class="modal-footer">
                                    <button style="background-color: goldenrod; border:none; width:100%;" type="button" class="btn btn-primary" id="mod" onclick="triggerLink()"><a id="myLink" style="width:100%; text-decoration: none; color: #fff;" href="login">Login</a></button>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
                <!-- // Single Price Box -->
                <!-- Single Price Box -->
                <div class="col-lg-6 col-md-6">
                    <div class="single-price-box text-center" id="premiumbos">
                        <div class="price-head">
                            <h2>Premium</h2>
                            <h3 id="rego">Rp. 10.000<span></span></h3>
                        </div>
                        <ul>
                            <li>Unlimited Upload</li>
                            <li>Comment Access</li>
                            <li>Profile Edit</li>
                            <li>Unlimited Explore</li>
                        </ul>
                        <button type="button" id="bt" class="button" data-toggle="modal" data-target="#exampleModalCenter">
                            <a id="bt">Upgrade Now</a> 
                           </button>
                          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" style="text-align: center;  width:100%;" id="exampleModalLongTitle">Access Denied</h5>
                                  {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> --}}
                                    {{-- <span aria-hidden="true">&times;</span> --}}
                                  </button>
                                </div>
                                <div class="modal-body">
                                  Please login first to do this action
                                </div>
                                <div class="modal-footer">
                                    <button style="background-color: goldenrod; border:none; width:100%;" type="button" class="btn btn-primary" id="mod" onclick="triggerLink()"><a id="myLink" style="width:100%; text-decoration: none; color: #fff;" href="login">Login</a></button>

                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
                <!-- // Single Price Box -->
                <!-- Single Price Box -->
              
                    </div>
                </div>
                <!-- // Single Price Box -->
            </div>
        </div>
    </section>
    <!-- ====== // Pricing Area ====== -->


    <!-- ====== Contact Area ====== -->
    <section id="contact" class="section-padding contact-section bg-light">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>Contact Us</h2>
                        <p>Write down here if there's anything you want to tell or complain to us</p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->

            <!-- Contact Form -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Form -->
                    <form id="contact-form" action="mail.php" method="post" class="contact-form bg-white">
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <input type="text" class="form-control" name="name" required placeholder="Name">
                            </div>
                            <div class="col-lg-6 form-group">
                                <input type="email" class="form-control" name="email" required placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" required placeholder="Subject">
                        </div>

                        <div class="form-group">
                            <textarea name="message" id="" class="form-control" required placeholder="Message"></textarea>
                        </div>
                        <div class="form-btn text-center">
                            <button type="button" class="button" data-toggle="modal" data-target="#exampleModalCenter">
                                Send Message
                              </button>
                              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" style="text-align: center;  width:100%;" id="exampleModalLongTitle">Access Denied</h5>
                                      {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> --}}
                                        {{-- <span aria-hidden="true">&times;</span> --}}
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      Please login first to do this action
                                    </div>
                                    <div class="modal-footer">
                                      <button style="background-color: goldenrod; border:none; width:100%;" type="button" class="btn btn-primary" id="mod"><a style="text-decoration: none; color: #fff;" href="login">Login</a></button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </form>
                    <!-- // Form -->
                </div>
            </div>
            <!-- // Contact Form -->
        </div>
    </section>
    <!-- ====== // Contact Area ====== -->


    <!-- ====== Footer Area ====== -->
    <!-- <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright-text">
                        <p class="text-white">&copy; 2023 By Team 5</p>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->
    <!-- ====== // Footer Area ====== -->


<script>
     function triggerLink() {
        document.getElementById('myLink').click();
    }   
</script>



     <!-- ====== ALL JS ====== -->
   <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.mixitup.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/typed.js"></script>
    {{-- <script src="assets/js/skill.bar.js"></script> --}}
    {{-- <script src="assets/js/fact.counter.js"></script> --}}
    <script src="assets/js/main.js"></script>
    <script src="home.js"></script>

</body>

</html>

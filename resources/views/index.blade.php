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
                        <li class="nav-item"><a class="nav-link" href="grid">EXPLORE</a></li>
                        <li class="nav-item"><a class="nav-link" href="#pricing">PREMIUM</a></li>
                        <li class="nav-item"><a class="nav-link pr0" href="#contact">CONTACT</a></li>
                        <li class="dropdown">
                            <a class="nav-link" href="#" id="btnlanguage">LANGUAGE</a>
                            <div class="dropdown-content">
                                <a href="#" onclick="changeLanguage('id')" data-lang="id">Bahasa <br> Indonesia</a>
                                <a href="#" onclick="changeLanguage('en')"data-lang="en" class="active">English</a>
                            </div>
                        </li>
                        <li style="" class="nav-item"><a class="nav-link pr0" href="profile" id="profileLink">PROFILE</a></li>
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
                        <h2 class="text-uppercase" id="rumahseniman">Art Shelter & Home</h2>
                        <h3 id="run" class="text-uppercase"><span class="w"></span></h3>
                        <!-- <p>Nikmati karya dari seniman ternama atau sebarkan karyamu sendiri</p> -->
                        <a href="grid" class="button smooth-scroll">Explore Now</a>
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
            <a href="grid">
            <img src="assets/images/portfolio/kesiji.png" alt="" srcset="">
            </a>
        </div>
         <div class="image-item large">
            <a href="grid">
            <img src="assets/images/portfolio/keloro.png" alt="" srcset="">
            </a>
        </div>
         <div class="image-item large">
            <a href="grid">
            <img src="assets/images/portfolio/ketelu.png" alt="" srcset="">
            </a>
        </div>
         <div class="image-item medium">
            <a href="grid">
            <img src="assets/images/portfolio/kepapat.png" alt="" srcset="">
            </a>
        </div>
         <div class="image-item medium">
            <a href="grid">
            <img src="assets/images/portfolio/kelimo.png" alt="" srcset="">
            </a>
        </div>
         <div class="image-item medium">
            <a href="grid">
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
<a href="grid">
    <div class="discov">
        <div class="item" id="itmg">
            <img id="" src="assets/images/monalisa.png" alt="" srcset="">
            <img id="numpuk" src="assets/images/koceng.png" alt="" srcset="">
        </div>
           <div class="item" id="text">
            <h2>Discover the most popular art among users</h2>
            <div class="gg">
                <div></div>
                <div></div>
            </div>
            <p>Find some paintings that are visited by other visitors and are updated every day.</p>
            <a href="grid">
                <img id="discov" src="assets/images/discov.png" alt="" srcset="">
            </a>
        </div>
       
     
    </div>
    <div class="discov" id="discov2">
      
        <div class="item" id="text">
            <h2>Find inspiration in the art field that suits you and build your own exciting portfolio!</h2>
            <div class="gg">
                <div></div>
                <div></div>
            </div>
            {{-- <p>Find some paintings that are visited by other visitors and are updated every day.</p> --}}
            <a href="grid">
                <img id="discov" src="assets/images/discov.png" alt="" srcset="">
            </a>
        </div>
          <div class="item" id="itmg">
            <img style="z-index: 99" id="" src="assets/images/statue.png" alt="" srcset="">
            <img id="numpuk" src="assets/images/oldman.png" alt="" srcset="">
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
                        <h2>Improve Your Access</h2>
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
                        <button style="background-color: transparent;border:none;" id="bt" type="button" class="button" data-toggle="modal" data-target="#exampleModalCenter">
                          <a style="color: #fff" href="post">Use Now</a>
                          </button>
                        
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
                           <a id="bt" style="color: #fff" href="co">Upgrade Now</a> 
                          </button>
                  
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
                            <button class="button" type="submit">Send Message</button>
                            <p class="form-message"></p>
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






     <!-- ====== ALL JS ====== -->
   <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.mixitup.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/typed.js"></script>
    <script src="assets/js/skill.bar.js"></script>
    <script src="assets/js/fact.counter.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="home.js"></script>

</body>

</html>

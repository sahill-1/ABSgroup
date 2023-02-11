<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gallery</title>
    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <?php include 'modal.php'; ?>
    <style>
        @media(max-width:992px){
            li.nav-item {
                background: black;
            }
            .hidden-details{
                display: none;
            }
            .language{
                display: none;
            }
        }
        .goog-logo-link {
            display: none !important;
        }
        .goog-te-gadget {
            color: transparent !important;
        }
        .goog-te-gadget {
            margin-top: 10px;
        }
        .inner-banner {
            background: url(./assets/images/gallery-banner.jpg) no-repeat center;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            -ms-background-size: cover;
            position: relative;
            z-index: 0;
        }

        /* Gallery Section */
        .gallery-section{
            width: 85%;
            border: 1px solid transparent;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
        }
        .gallery-section-div{
            width: 280px;
            border: 1px solid transparent;
            margin: 20px auto;
            gap: 10px;
        }
        .gallery-section-div-img{
            width: 280px;
        }
        .gallery-section-div-img img{
            width: 280px;
            height: 200px;
        }
        .gallery-section-div-button{
            display: flex;
            justify-content: center;
        }
        .gallery-section-div-button button{
            width: 130px;
            height: 40px;
            border-radius: 5px;
            background-color: #006837;
            color: white;
            font-weight: 700;
            border: 1px solid darkgray;
        }
        .gallery-section-div-button button:hover{
            color: #006837;
            background-color: white;
        }
        /* Gallery Section */

        /* Footer */
        .w3l-footer-text-style {
            margin-top: -60px;
        }
        .row.footer-top-29.pt-lg-5.pt-sm-4 {
            margin-top: -60px;
        }
        .bwt-logo{
            width: 370px;
            height: 200px;
            border: 1px solid transparent;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .bwt-logo img{
            width: 250px;
            height: 60px;
            border: 1px solid transparent;
        }
    </style>
</head>

<body>
    <!--/Header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light stroke">
                <h1><a class="navbar-brand" href="index.php">
                        ABS<span class="sub-color">group</span>
                    </a></h1>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav mx-lg-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="services.php">Gallery</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>
                        <div class="language">
                            <a id="google_translate_element"></a>
                        </div>
                    </ul>
                    <div class="hidden-details" style="text-align: center;">
                    <p style="color: #faa429">+91-7572819409 <br> abhigya205@gmail.com</p>
                    </div>
                    <!-- <form action="#" method="GET" class="d-flex search-header">
                        <input class="form-control me-2" type="search" placeholder="Search here..." aria-label="Search" required>
                        <button class="btn btn-style btn-secondary me-lg-3" type="submit">Search</button>
                    </form> -->
                </div>
                <!-- toggle switch for light and dark theme -->
                <!-- <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div> -->
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--//Header-->
    <!--/inner-page-->
    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title">
                            Gallery </h2>
                        <p class="inner-page-para mt-2">
                        No Compromise on Quality</p>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Gallery </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!--//inner-page-->
    <!--/w3l-servicesblock-->
    <!-- <section class="w3l-circles py-5" id="services">
        <div class="container py-md-5 py-2">
            
            <div class="row w3l-circles">
                <div class="col-lg-6 circles-left">
                    <img src="assets/images/a6.jpg" alt="" class="radius-image img-fluid">
                </div>
                <div class="col-lg-6 circles-right mt-lg-0 mt-5 align-self  position-relative">
                    <h6 class="title-subw3hny">what We Offer</h6>
                    <h3 class="title-w3l mb-4">Providing High
                        Quality <br>Products</h3>
                    <p class="">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet
                        elit. Non quae, fugiat nihil ad. Lorem ipsum dolor sit amet.</p>
                    <div class="w3banner-content-btns">
                        <a href="about.html" class="btn btn-style btn-primary mt-lg-5 mt-4 me-2">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                        <a href="contact.html" class="btn btn-style btn-outline-dark mt-lg-5 mt-4">Contact Us <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            
        </div>
    </section> -->
    <!--//w3l-servicesblock-->
    <!-- /content-4-->

    <section class="w3l-content-4 py-5" id="features">
        <div class="content-4-main py-lg-5 py-md-4 py-2">
            <div class="container">
                <div class="content-info-in row align-items-center">
                    <div class="content-left col-lg-6 pe-lg-5">
                        <div class="row content4-right-grids mb-sm-5 mb-4 pb-3">
                            <div class="col-2 content4-right-icon">
                                <div class="content4-icon">
                                    <span class="fas fa-tractor"></span>
                                </div>
                            </div>
                            <div class="col-10 content4-right-info ps-lg-5">
                                <h6><a href="#url">Agriculture Products</a></h6>
                                <p>Today, small farms produce about a third of the world’s food, but large farms are prevalent.</p>
                            </div>
                        </div>
                        <div class="row content4-right-grids mb-sm-5 mb-4 pb-3">
                            <div class="col-2 content4-right-icon">
                                <div class="content4-icon">
                                    <span class="fas fa-carrot"></span>
                                </div>
                            </div>
                            <div class="col-10 content4-right-info ps-lg-5">
                                <h6><a href="#url">Fresh Vegetables</a></h6>
                                <p>Vegetables are parts of plants that are consumed by humans or other animals as food. </p>
                            </div>
                        </div>
                        <div class="row content4-right-grids">
                            <div class="col-2 content4-right-icon">
                                <div class="content4-icon">
                                    <span class="fas fa-wine-bottle"></span>
                                </div>
                            </div>
                            <div class="col-10 content4-right-info ps-lg-5">
                                <h6><a href="#url">Fresh Fruits</a></h6>
                                <p>Fruits are important sources of vitamins and carbohydrates like fiber and sugar. </p>
                            </div>
                        </div>
                    </div>
                    <div class="HomeAboutImages col-lg-6 mt-lg-0 mt-md-5 mt-4">
                        <div class="row position-relative">
                            <div class="col-6">
                                <img src="assets/images/a1.jpg" alt="" class="radius-image img-fluid">
                            </div>
                            <div class="col-6 mt-4">
                                <img src="assets/images/a7.jpg" alt="" class="radius-image img-fluid mb-md-3 mb-2">
                                <img src="assets/images/a8.jpg" alt="" class="radius-image img-fluid mt-md-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /home-page-video-popup-->

    <!-- Gallery-section -->
    <h2 style="text-align: center; margin-top: 20px;">Our Products</h2>

    <div class="gallery-section">
        <div class="gallery-section-div">
            <div class="gallery-section-div-img">
                <img src="./assets/images/p (5).jpg" alt="">
                <h4 style="text-align: center;">Tomato</h4>
            </div>
            <div class="gallery-section-div-button">
                <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe " data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry Now</button>
            </div>
        </div>
        <div class="gallery-section-div">
            <div class="gallery-section-div-img">
                <img src="./assets/images/p (1).jpg" alt="">
                <h4 style="text-align: center;">Papaya</h4>
            </div>
            <div class="gallery-section-div-button">
                <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe " data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry Now</button>
            </div>
        </div>
        <div class="gallery-section-div">
            <div class="gallery-section-div-img">
                <img src="./assets/images/p (4).jpg" alt="">
                <h4 style="text-align: center;">Onion</h4>
            </div>
            <div class="gallery-section-div-button">
                <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe " data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry Now</button>
            </div>
        </div>
        <div class="gallery-section-div">
            <div class="gallery-section-div-img">
                <img src="./assets/images/p (2).jpg" alt="">
                <h4 style="text-align: center;">Apple</h4>
            </div>
            <div class="gallery-section-div-button">
                <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe " data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry Now</button>
            </div>
        </div>
        <div class="gallery-section-div">
            <div class="gallery-section-div-img">
                <img src="./assets/images/p (3).jpg" alt="">
                <h4 style="text-align: center;">Carrot</h4>
            </div>
            <div class="gallery-section-div-button">
                <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe " data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry Now</button>
            </div>
        </div>
        <div class="gallery-section-div">
            <div class="gallery-section-div-img">
                <img src="./assets/images/p (6).jpg" alt="">
                <h4 style="text-align: center;">Banana</h4>
            </div>
            <div class="gallery-section-div-button">
                <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe " data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry Now</button>
            </div>
        </div>
        <div class="gallery-section-div">
            <div class="gallery-section-div-img">
                <img src="./assets/images/p (7).jpg" alt="">
                <h4 style="text-align: center;">Potato</h4>
            </div>
            <div class="gallery-section-div-button">
                <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe " data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry Now</button>
            </div>
        </div>
        <div class="gallery-section-div">
            <div class="gallery-section-div-img">
                <img src="./assets/images/p (8).jpg" alt="">
                <h4 style="text-align: center;">Watermelon</h4>
            </div>
            <div class="gallery-section-div-button">
                <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe " data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry Now</button>
            </div>
        </div>
        <div class="gallery-section-div">
            <div class="gallery-section-div-img">
                <img src="./assets/images/p (9).jpg" alt="">
                <h4 style="text-align: center;">Cucumber</h4>
            </div>
            <div class="gallery-section-div-button">
                <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe " data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry Now</button>
            </div>
        </div>
    </div>
            
    <!-- Gallery-section -->
    <!-- <section class="w3l-index5 py-5" id="about">
        <div class="new-block py-md-5 py-3">
            <div class="container">
                <div class="row middle-section align-self">
                    <div class="col-lg-6 video-info pe-lg-5">
                        <div class="title-content text-left">
                            <h6 class="title-subw3hny">Root With Nature</h6>
                            <h3 class="title-w3l two pe-lg-5">For Strong economy, develop agriculture </h3>
                            <a href="contact.html" class="btn btn-style btn-outline-light mt-sm-5 mt-4">Contact Now </a>
                        </div>
                    </div>
                    <div class="col-lg-6 history-info mt-5 ps-lg-5 align-self">
                        <p class="vhny-para mt-3 pe-lg-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet elit
                            consec tetur adipisi elit.
                            Lorem ipsum dolor sit amet elit consec tetur adipisi elit. Iure voluptatibus explicabo
                            officia.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- //home-page-video-popup-->
    <!-- card section -->
    <section class="w3l-features-4">
        <div class="features4-block py-5">
            <div class="container py-md-5">
                <div class="we-header text-center">
                    <h6 class="title-subw3hny">Our Services</h6>
                    <h3 class="title-w3l mb-5">What We’re Doing</h3>
                </div>
                <div class="row features4-grids">
                    <div class="col-lg-3 col-md-6">
                        <div class="features4-grid active">
                            <div class="feature-images">
                                <span class="fas fa-carrot"></span>
                            </div>
                            <h5><a href="#url">Fresh Vegetables</a></h5>
                            <!-- <a href="#readmore" class="grid-link">Read More <span class="fa fa-arrow-right"></span></a> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-lg-0 mt-4">
                        <div class="features4-grid">
                            <div class="feature-images">
                                <span class="fas fa-tractor"></span>
                            </div>
                            <h5><a href="#url">Farm Products</a></h5>
                            <!-- <a href="#readmore" class="grid-link">Read More <span class="fa fa-arrow-right"></span></a> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-lg-0 mt-4">
                        <div class="features4-grid">
                            <div class="feature-images">
                                <span class="fas fa-seedling"></span>
                            </div>
                            <h5><a href="#url">Organic Products</a></h5>
                            <!-- <a href="#readmore" class="grid-link">Read More <span class="fa fa-arrow-right"></span></a> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-lg-0 mt-4">
                        <div class="features4-grid">
                            <div class="feature-images">
                                <span class="fas fa-bong"></span>
                            </div>
                            <h5><a href="#url">Awesome Quality</a></h5>
                            <!-- <a href="#readmore" class="grid-link">Read More <span class="fa fa-arrow-right"></span></a> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-4">
                        <div class="features4-grid">
                            <div class="feature-images">
                                <span class="fas fa-apple-alt"></span>
                            </div>
                            <h5><a href="#url">Fresh Fruits</a></h5>
                            <!-- <a href="#readmore" class="grid-link">Read More <span class="fa fa-arrow-right"></span></a> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-4">
                        <div class="features4-grid">
                            <div class="feature-images">
                                <span class="fas fa-headphones-alt"></span>
                            </div>
                            <h5><a href="#url">
                                    Excellent Service</a></h5>
                            <!-- <a href="#readmore" class="grid-link">Read More <span class="fa fa-arrow-right"></span></a> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-4">
                        <div class="features4-grid">
                            <div class="feature-images">
                                <span class="fas fa-users"></span>
                            </div>
                            <h5><a href="#url">Qualified Staff</a></h5>
                            <!-- <a href="#readmore" class="grid-link">Read More <span class="fa fa-arrow-right"></span></a> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-4">
                        <div class="features4-grid">
                            <div class="feature-images">
                                <span class="fas fa-thumbs-up"></span>
                            </div>
                            <h5><a href="#url">Organic Solution</a></h5>
                            <!-- <a href="#readmore" class="grid-link">Read More <span class="fa fa-arrow-right"></span></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //card section -->
    <!--/footer-->
    <footer class="w3l-footer-29-main">
        <div class="footer-29-w3l py-5">
            <div class="container pt-md-5">
                <div class="w3l-footer-text-style">
                    <div class="footer-list-cont d-sm-flex align-items-center justify-content-between mb-5">

                        <h2 class="w3logo"><a class="navbar-brand" href="index.php">
                                ABS<span class="sub-color">group</span>
                            </a></h2>
                        <div class="main-social-footer-29">
                            <ul>
                                <li class="w3follow mt-sm-0 mt-4">Follows On : </li>
                                <li><a href="#facebook" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#twitter" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#linkedin" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="row footer-top-29 pt-lg-5 pt-sm-4">
                    <div class="col-lg-3 col-sm-6">
                        <div class="address-grid">
                        <h5>365601 District-Amreli <br> Gujrat</h5>
                            <p class="mt-4">We understand that it can be difficult to find time for grocery shopping. </p>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4 ps-lg-5">
                        <div class="address-grid">
                            <h5>Phone</h5>
                            <h5 class="phone-number-text mt-2"><a href="">+91-7572819409</a></h5>
                        </div>
                        <div class="address-grid mt-sm-5 mt-4">
                            <h5>E-mail</h5>
                            <h5 class="email-cont-text mt-1"> <a href="" class="mail">abhigya205@gmail.com</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-5 footer-list-menu ps-lg-5 mt-lg-0 mt-sm-5 mt-4">
                        <div class="address-grid">
                            <h5 class="mb-4 pb-lg-2">Useful Links</h5>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="services.php">Gallery</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="bwt-logo">
                        <img src="./assets/images/bwt-white.png" alt="">
                    </div>
                    <!-- <div class="address-grid col-lg-4 col-md-6 col-sm-7 ps-lg-5 mt-lg-0 mt-sm-5 mt-4 w3l-footer-16-main">
                        <h5>Subscribe here</h5>
                        <form action="#" class="subscribe d-flex mt-4 pt-lg-2 mb-4" method="post">
                            <input type="email" name="email" placeholder="Email Address" required="">
                            <button><span class="fa fa-paper-plane" aria-hidden="true"></span></button>
                        </form>
                        <p>Subscribe to our mailing list and get updates to your email inbox.</p>
                    </div> -->
                </div>
                <!-- copyright -->
                <!-- <div class="w3l-copyright text-center mt-lg-5 mt-sm-4 pt-md-4 pt-3">
                    <p class="copy-footer-29">© 2021 Agrowfarm. All rights reserved. Design by <a href="https://w3layouts.com/" target="_blank">
                            W3layouts</a></p>
                </div> -->
            </div>
        </div>
    </footer>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-long-arrow-alt-up" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

    </script>
    <!-- //move top -->

    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
    <!--/slider-js-->
    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });

    </script>
    <!-- //disable body scroll which navbar is in active -->
    <!-- //bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>



    <!-- Language Converter -->
	<script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({
				pageLanguage: 'en'
			}, 'google_translate_element');
		}
	</script>
	<script type="text/javascript">
		(function () {
			var gtConstEvalStartTime = new Date();
			/*
	  	
			 Copyright The Closure Library Authors.
			 SPDX-License-Identifier: Apache-2.0
			*/
			var h = this || self,
				l = /^[\w+/_-]+[=]{0,2}$/,
				m = null;

			function n(a) {
				return (a = a.querySelector && a.querySelector("script[nonce]")) && (a = a.nonce || a.getAttribute("nonce")) && l.test(a) ? a : ""
			}

			function p(a, b) {
				function c() { }
				c.prototype = b.prototype;
				a.i = b.prototype;
				a.prototype = new c;
				a.prototype.constructor = a;
				a.h = function (g, f, k) {
					for (var e = Array(arguments.length - 2), d = 2; d < arguments.length; d++) e[d - 2] = arguments[d];
					return b.prototype[f].apply(g, e)
				}
			}

			function q(a) {
				return a
			};

			function r(a) {
				if (Error.captureStackTrace) Error.captureStackTrace(this, r);
				else {
					var b = Error().stack;
					b && (this.stack = b)
				}
				a && (this.message = String(a))
			}
			p(r, Error);
			r.prototype.name = "CustomError";

			function u(a, b) {
				a = a.split("%s");
				for (var c = "", g = a.length - 1, f = 0; f < g; f++) c += a[f] + (f < b.length ? b[f] : "%s");
				r.call(this, c + a[g])
			}
			p(u, r);
      
			u.prototype.name = "AssertionError";

			function v(a, b) {
				throw new u("Failure" + (a ? ": " + a : ""), Array.prototype.slice.call(arguments, 1));
			};
			var w;

			function x(a, b) {
				this.g = b === y ? a : ""
			}
			x.prototype.toString = function () {
				return this.g + ""
			};
			var y = {};

			function z(a) {
				var b = document.getElementsByTagName("head")[0];
				b || (b = document.body.parentNode.appendChild(document.createElement("head")));
				b.appendChild(a)
			}

			function _loadJs(a) {
				var b = document;
				var c = "SCRIPT";
				"application/xhtml+xml" === b.contentType && (c = c.toLowerCase());
				c = b.createElement(c);
				c.type = "text/javascript";
				c.charset = "UTF-8";
				if (void 0 === w) {
					b = null;
					var g = h.trustedTypes;
					if (g && g.createPolicy) {
						try {
							b = g.createPolicy("goog#html", {
								createHTML: q,
								createScript: q,
								createScriptURL: q
							})
						} catch (t) {
							h.console && h.console.error(t.message)
						}
						w = b
					} else w = b
				}
				a = (b = w) ? b.createScriptURL(a) : a;
				a = new x(a, y);
				a: {
					try {
						var f = c && c.ownerDocument,
							k = f && (f.defaultView || f.parentWindow);
						k = k || h;
						if (k.Element && k.Location) {
							var e = k;
							break a
						}
					} catch (t) { }
					e = null
				}
				if (e && "undefined" != typeof e.HTMLScriptElement && (!c || !(c instanceof e.HTMLScriptElement) && (c instanceof e.Location || c instanceof e.Element))) {
					e = typeof c;
					if ("object" == e && null != c || "function" == e) try {
						var d = c.constructor.displayName || c.constructor.name || Object.prototype.toString.call(c)
					} catch (t) {
						d = "<object could not be stringified>"
					} else d = void 0 === c ? "undefined" : null === c ? "null" : typeof c;
					v("Argument is not a %s (or a non-Element, non-Location mock); got: %s",
						"HTMLScriptElement", d)
				}
				a instanceof x && a.constructor === x ? d = a.g : (d = typeof a, v("expected object of type TrustedResourceUrl, got '" + a + "' of type " + ("object" != d ? d : a ? Array.isArray(a) ? "array" : d : "null")), d = "type_error:TrustedResourceUrl");
				c.src = d;
				(d = c.ownerDocument && c.ownerDocument.defaultView) && d != h ? d = n(d.document) : (null === m && (m = n(h.document)), d = m);
				d && c.setAttribute("nonce", d);
				z(c)
			}

			function _loadCss(a) {
				var b = document.createElement("link");
				b.type = "text/css";
				b.rel = "stylesheet";
				b.charset = "UTF-8";
				b.href = a;
				z(b)
			}

			function _isNS(a) {
				a = a.split(".");
				for (var b = window, c = 0; c < a.length; ++c)
					if (!(b = b[a[c]])) return !1;
				return !0
			}

			function _setupNS(a) {
				a = a.split(".");
				for (var b = window, c = 0; c < a.length; ++c) b.hasOwnProperty ? b.hasOwnProperty(a[c]) ? b = b[a[c]] : b = b[a[c]] = {} : b = b[a[c]] || (b[a[c]] = {});
				return b
			}
			window.addEventListener && "undefined" == typeof document.readyState && window.addEventListener("DOMContentLoaded", function () {
				document.readyState = "complete"
			}, !1);
			if (_isNS('google.translate.Element')) {
				return
			} (function () {
				var c = _setupNS('google.translate._const');
				c._cest = gtConstEvalStartTime;
				gtConstEvalStartTime = undefined;
				c._cl = 'en';
				c._cuc = 'googleTranslateElementInit';
				c._cac = '';
				c._cam = '';
				c._ctkk = '449532.3786053938';
				var h = 'translate.googleapis.com';
				var s = (true ? 'https' : window.location.protocol == 'https:' ? 'https' : 'http') + '://';
				var b = s + h;
				c._pah = h;
				c._pas = s;
				c._pbi = b + '/translate_static/img/te_bk.gif';
				c._pci = b + '/translate_static/img/te_ctrl3.gif';
				c._pli = b + '/translate_static/img/loading.gif';
				c._plla = h + '/translate_a/l';
				c._pmi = b + '/translate_static/img/mini_google.png';
				c._ps = b + '/translate_static/css/translateelement.css';
				c._puh = 'translate.google.com';
				_loadCss(c._ps);
				_loadJs(b + '/translate_static/js/element/main.js');
			})();
		})();
	</script>
	<!-- End Language Converter -->
    <script src="assets/js/vendor/jquery-min.js"  defer></script>
    <script src="assets/js/vendor/js.cookie.js"  defer></script>
    <!--Including Javascript-->
    <script src="assets/js/plugins.js " defer></script>
    <script src="assets/js/main.js"  defer></script>
	<!--Newsletter Popup Cookies-->
	<script>
		function newsletter_popup() {
			var cookieSignup = "cookieSignup", date = new Date();
			if ($.cookie(cookieSignup) != 'true' && window.location.href.indexOf("challenge#newsletter-modal") <= -1) {
				setTimeout(function () {
					$.magnificPopup.open({
						items: {
							src: '#newsletter-modal'
						}
						, type: 'inline', removalDelay: 300, mainClass: 'mfp-zoom-in'
					}
					);
				}
					, 5000);
			}
			$.magnificPopup.instance.close = function () {
				if ($("#dontshow").prop("checked") == true) {
					$.cookie(cookieSignup, 'true', {
						expires: 1, path: '/'
					}
					);
				}
				$.magnificPopup.proto.close.call(this);
			}
		}
		newsletter_popup();
    <script/>

</body>

</html>

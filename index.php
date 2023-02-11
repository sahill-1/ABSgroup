<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Homepage</title>
    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <?php include 'modal.php'; ?>
    <style>
        /* NAV */
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
        .goog-te-gadget .goog-te-combo {
            margin: 15px 10px;
        }
        /* FOOTER */
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
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Gallery</a>
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
    <!--/Banner-Start-->
    <section class="banner-19">
        <div class="banner-layer">
            <div class="main-content-top">
                <div class="container">
                    <div class="main-content">
                        <div class="w3lbanner-left">
                            <!-- if logo is image enable this   
                        <a class="logo" href="index.html">
                            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                        </a> -->
                            <h6>Welcome to ABS group</h6>
                            <h4>Organic Food at its Best</h4>
                            <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe " data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
                            <!-- <a href="about.html" class="btn btn-style btn-secondary mt-md-5 mt-4">Read More</a> -->
                        </div>
                        <div class="w3lbanner-right">
                            <p>Organic foods from Agriculture Foods is the ultimate choice for health-conscious individuals and families.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//Banner-End-->
    <!--/About-section-->
    <section class="w3l-about-6 py-5" id="about">
        <div class="container py-lg-5 py-md-3">
            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-5">
                    <h6 class="title-subw3hny">Our Info</h6>
                    <h3 class="title-w3l">Organic Fruits & Vegetables Farm</h3>
                    <p class="mt-md-4 mt-3">We provide the freshest and most nutritious organic vegetables, fruits, and other food items that are guaranteed to make any meal healthier and tastier. </p>
                    <ul class="service-list pt-lg-2 mt-4">

                        <li class="service-link"><a href=""><span class="fa fa-check-circle"></span> Fresh Vegetables</a></li>
                        <li class="service-link"><a href=""><span class="fa fa-check-circle"></span> Fresh Fruits</a></li>
                        <li class="service-link"><a href=""><span class="fa fa-check-circle"></span> Professional Farmers</a></li>
                    </ul>
                </div>
                <div class="HomeAboutImages col-lg-6 mt-lg-0 mt-5">
                    <div class="row position-relative">
                        <div class="col-6">
                            <img src="assets/images/a1.jpg" alt="" class="radius-image img-fluid">
                        </div>
                        <div class="col-6 mt-4">
                            <img src="assets/images/a2.jpg" alt="" class="radius-image img-fluid mb-md-3 mb-2">
                            <img src="assets/images/a3.jpg" alt="" class="radius-image img-fluid mt-md-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//About-section-->
    <!--/w3l-grids-3hny-->
    <section class="w3l-grids-3hny py-5" id="grids1">
        <div class="container py-lg-5 py-md-3">
            <div class="wthree-header-section text-center">
                <h6 class="title-subw3hny">What We Do</h6>
                <h3 class="title-w3l mb-4">What We’re Offering</h3>
            </div>
            <div class="grids-of-3 row text-center">
                <div class="col-lg-4 col-md-6 mt-5">
                    <div class="grids3-info">
                        <a href="#service" class="d-block zoom"><img src="assets/images/a4.jpg" alt="" class="img-fluid radius-image"></a>
                        <div class="grids-of-3-saas-info">
                            <h5><a href="#service" class="title">Quality Standards</a></h5>
                            <p class="saas-para"> Our organic vegetables are sourced from some of the best farms in the region</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5">
                    <div class="grids3-info">
                        <a href="#service" class="d-block zoom"><img src="assets/images/a5.jpg" alt="" class="img-fluid radius-image"></a>
                        <div class="grids-of-3-saas-info">
                            <h5><a href="#service" class="title">Vast Variety</a></h5>
                            <p class="saas-para"> We use natural farming practices for all our vegetables & fruits</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5">
                    <div class="grids3-info">
                        <a href="#service" class="d-block zoom"><img src="assets/images/a6.jpg" alt="" class="img-fluid radius-image"></a>
                        <div class="grids-of-3-saas-info">
                            <h5><a href="#service" class="title">Modern Technology</a></h5>
                            <p class="saas-para"> We’re also proud to use some of the best technologies available in the market.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//w3l-grids-3hny-->
   
    <!-- /home-page-video-popup-->
    <section class="w3l-index5 py-5" id="about">
        <div class="new-block py-md-5 py-3">
            <div class="container">
                <div class="row middle-section align-self">
                    <div class="col-lg-7 video-info pe-lg-5">
                        <div class="title-content text-left">
                            <h6 class="title-subw3hny">Root With Nature</h6>
                            <h3 class="title-w3l two pe-lg-5">Fresh Exotic Fruits In Our Store </h3>
                            <p class="mt-3 pe-lg-5">Our organic vegetables are sourced from some of the best farms in the region, ensuring that you get only the freshest produce. We use natural farming practices for all our vegetables, so you can be sure that you’re getting only the healthiest vegetables with none of the pesticides or chemicals.</p>
                            <a href="contact.html" class="btn btn-style btn-outline-light mt-sm-5 mt-4">Discover More</a>
                        </div>
                    </div>
                    <div class="col-lg-5 history-info mt-5 ps-lg-5 align-self">
                        <div class="position-relative mt-lg-0 mt-5 pt-lg-0 pt-5 pb-lg-0 pb-5">
                            <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                                <!-- <span class="video-play-icon">
                                    <span class="fa fa-play"></span>
                                </span> -->
                            </a>
                            <!-- dialog itself, mfp-hide class is required to make dialog hidden -->

                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
    <!-- //home-page-video-popup-->
    <!--/w3l-circles-->
    <section class="w3l-circles py-5" id="circles">
        <div class="container py-md-5 py-2">
            <!--/row-2-->
            <div class="row w3l-circles">
                <div class="col-lg-6 circles-left">
                    <img src="assets/images/c66.jpg" alt="" class="radius-image img-fluid">
                </div>
                <div class="col-lg-6 circles-right mt-lg-0 mt-5 align-self  position-relative">
                    <h6 class="title-subw3hny">Why Us</h6>
                    <h3 class="title-w3l mb-4">Growing Healthy Food</h3>
                    <p class="mb-5">We’re also proud to offer some of the best organic fruits in the market today. Our fruits are handpicked from local farms, allowing us to provide only fresh and flavorful produce.</p>
                    <div class="progress-circles-grids">
                        <div class="progress-circles">
                            <div class="progress-left">
                                <div class="circle1">
                                    <div id="progress" data-dimension="80" data-text="85%" data-fontsize="18" data-percent="85" data-fgcolor="#006837" data-bgcolor="#f3f5f4" data-width="10" data-bordersize="4" data-animationstep="2">
                                    </div>

                                </div>
                                <div class="progress-right">
                                    <h4>Quality Agriculture</h4>
                                    <p class="mb-lg-5">Best in quality served.</p>
                                </div>
                            </div>

                        </div>
                        <div class="progress-circles">
                            <div class="progress-left">
                                <div class="circle1">
                                    <div id="progress1" data-dimension="80" data-text="95%" data-fontsize="18" data-percent="95" data-fgcolor="#006837" data-bgcolor="#f3f5f4" data-width="10" data-bordersize="4" data-animationstep="2">
                                    </div>
                                </div>
                                <div class="progress-right">
                                    <h4>Organic Solutions</h4>
                                    <p class="mb-lg-5">Zero chemicals used in process.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--//row-2-->
        </div>
    </section>
    <!--//circles-section-->
    <!--/testimonials-->
    <section class="w3l-testimonials" id="testimonials">
        <!-- /grids -->
        <div class="cusrtomer-layout py-5">
            <div class="container py-lg-4 py-md-3 py-2 pb-lg-0">
                <h5 class="title-subw3hny text-center mb-1">Happy Clients</h5>
                <h3 class="title-w3l two text-center mb-sm-5 mb-4">Reviews and Testimonials</h3>
                <!-- /grids -->
                <div class="testimonial-width">
                    <div id="owl-demo1" class="owl-two owl-carousel owl-theme">
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <i class="fas fa-quote-right"></i>
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet elit. Velit beatae
                                            laudantium voluptate rem ullam dolore nisi voluptatibus esse quasi,
                                            doloribus tempora.
                                            Dolores molestias adipisci dolo amet!. Lorem ipsum dolor sit amet
                                            consectetur
                                            adipisicing elit. Esse architecto est ea sunt eligendi cum?</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="test-img"><img src="assets/images/team1.jpg" class="img-fluid" alt="client-img">
                                        </div>
                                        <div class="peopl align-self">
                                            <h3>John wilson</h3>
                                            <p class="indentity">Example City</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
     
                    </div>
                </div>
            </div>
            <!-- /grids -->
        </div>
        <!-- //grids -->
    </section>
    <!-- //testimonials -->
    <!--/home-stats-->
    <section class="w3l-stats-main py-5" id="stats">
        <div class="container py-lg-4">
            <div class="row stats-con">
                <div class="col-lg-6 stats-content-left pe-lg-5">
                    <div class="stats_info counter_grid1 text-left">
                        <div class="icon stat-icon">
                            <span class="fas fa-users"></span>
                            <!-- <p class="counter">5233</p> -->
                        </div>
                        <div class="stat-icon-des text-left">

                            <h3 class="title-w3l">

                                Professional Farmers
                            </h3>
                            <p class="para-stat">Farmers are involved in planting, cultivating, performing post-harvest duties, overseeing, livelihood.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 stats-content-left ps-lg-5 mt-lg-0 mt-md-5 mt-4">
                    <div class="stats_info counter_grid1 text-left">
                        <div class="icon stat-icon">
                            <span class="fas fa-tractor"></span>
                            <!-- <p class="counter">2233</p> -->
                        </div>
                        <div class="stat-icon-des text-left">
                            <h3 class="title-w3l">
                                Best Quality Standards</h3>
                            <p class="para-stat">Our vegetables are sourced from carefully vetted farms, ensuring that you get only the best & vegetables.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//home-stats-->
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
    <script src="assets/js/circles.js"></script>

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
	<!-- Including Jquery -->
	<script src="assets/js/vendor/jquery-min.js"></zscript>
	<script src="assets/js/vendor/js.cookie.js"></>
	<!--Including Javascript-->
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/main.js"></script>
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
    </script>

</body>

</html>
<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>
    <meta charset="utf-8">
    <meta name="author" content="Sumon Rahman">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>@yield('Title')</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="/images/apple-touch-icon.png">
    <link rel="shortcut icon" type="/image/ico" href="/images/favicon.ico" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/linearicons.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/animate.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://d3js.org/d3.v3.min.js"></script>
    <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body data-spy="scroll" data-target="#menu-section">
<!-- Preloader-content -->
<div class="preloader">
    <span><i class="lnr lnr-sync"></i></span>
</div>
<!-- MainMenu-Area -->
<nav class="mainmenu-area" data-spy="affix" data-offset-top="200">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary_menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="{{ URL::to('/') }}/images/logo.png" alt="Logo"></a>
        </div>
        <div class="collapse navbar-collapse" id="primary_menu">
            <ul class="nav navbar-nav mainmenu">
                @if (auth()->guest())
                <li class="active"><a href="/#home_page">Home</a></li>
                <li><a href="#about_page">About</a></li>
                <li><a href="#features_page">Features</a></li>
                <li><a href="#contact_page">Contacts</a></li>
                @else
                <li><a href="#">Feed</a></li>
                <li><a href="/my-activity">My Activity</a></li>
                <li class="active"><a href="/">Home</a></li>
                <li><a href="#">Movies</a></li>
                <li><a href="#">TV Series</a></li>
                @endif
            </ul>
            <div class="right-button hidden-xs">
                @if (auth()->guest())
                <a href="/login">Login / Sign Up</a>
                @else
                <form action="/search" id="search">
                    <div class="col-xs-12">
                        <div class="field-form">
                            
                                <input type="text" class="control" placeholder="Search" required="required" name="txtSearch" id="txtSearch" >
                                <button type="submit"><i class="fa fa-search"></i></button>
                            
                        </div>
                    </div>
                    <!-- <div class="col-xs-2 submit">
                        
                    </div> -->
                </form>
                @endif
            </div>
        </div>
    </div>
</nav>
<!-- MainMenu-Area-End -->
@yield('Content')
<!-- Footer-Area -->
<footer class="footer-area" id="contact_page">
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title text-center">
                        <h5 class="title">Contact US</h5>
                        <h3 class="dark-color">Find Us By Bellow Details</h3>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="footer-box">
                        <div class="box-icon">
                            <span class="lnr lnr-map-marker"></span>
                        </div>
                        <p>8-54 Paya Lebar Square <br /> 60 Paya Lebar Roa SG, Singapore</p>
                    </div>
                    <div class="space-30 hidden visible-xs"></div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="footer-box">
                        <div class="box-icon">
                            <span class="lnr lnr-phone-handset"></span>
                        </div>
                        <p>+65 93901336 <br /> +65 93901337</p>
                    </div>
                    <div class="space-30 hidden visible-xs"></div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="footer-box">
                        <div class="box-icon">
                            <span class="lnr lnr-envelope"></span>
                        </div>
                        <p>yourmail@gmail.com <br /> backpiper.com@gmail.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer-Bootom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-5">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        <span>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="lnr lnr-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></span>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <div class="space-30 hidden visible-xs"></div>
                </div>
                <div class="col-xs-12 col-md-7">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">About</a></li>
                            <!-- <li><a href="#">Services</a></li> -->
                            <li><a href="#">Features</a></li>
                            <!-- <li><a href="#">Pricing</a></li> -->
                            <!-- <li><a href="#">Testimonial</a></li> -->
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer-Bootom-End -->
</footer>
<!-- Footer-Area-End -->
<!--Vendor-JS-->
<script src="/js/vendor/jquery-1.12.4.min.js"></script>
<script src="/js/vendor/jquery-ui.js"></script>
<script src="/js/vendor/bootstrap.min.js"></script>
<!--Plugin-JS-->
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/contact-form.js"></script>
<script src="/js/ajaxchimp.js"></script>
<script src="/js/scrollUp.min.js"></script>
<script src="/js/magnific-popup.min.js"></script>
<script src="/js/wow.min.js"></script>
<!--Main-active-JS-->
<script src="/js/main.js"></script>
</body>
<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME -->
<!-- CORE JQUERY -->
<script src="/assets/js/jquery-1.11.1.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="/assets/js/bootstrap.js"></script>
<!-- EASING SCROLL SCRIPTS PLUGIN -->
<script src="/assets/js/vegas/jquery.vegas.min.js"></script>
<!-- VEGAS SLIDESHOW SCRIPTS -->
<script src="/assets/js/jquery.easing.min.js"></script>
<!-- FANCYBOX PLUGIN -->
<script src="/assets/js/source/jquery.fancybox.js"></script>
<!-- ISOTOPE SCRIPTS -->
<script src="/assets/js/jquery.isotope.js"></script>
<!-- VIEWPORT ANIMATION SCRIPTS   -->
<script src="/assets/js/appear.min.js"></script>
<script src="/assets/js/animations.min.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="/assets/js/custom.js"></script>
</body>

</html>
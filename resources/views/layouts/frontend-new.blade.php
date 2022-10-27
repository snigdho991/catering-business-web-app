<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title') - {{ config('app.name') }}</title>
        <meta content="" name="description"/>
        <meta content="" name="keywords"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta content="telephone=no" name="format-detection"/>
        <meta name="HandheldFriendly" content="true"/>

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('assetslp/css/master.css') }}"/>
        <link href="{{ asset('assetslp/plugins/switcher/css/switcher.css') }}" rel="stylesheet" id="switcher-css"/>
        <link href="{{ asset('assetslp/plugins/switcher/css/color1.css') }}" rel="alternate stylesheet" title="color1"/>
        <link href="{{ asset('assetslp/plugins/switcher/css/color2.css') }}" rel="alternate stylesheet" title="color2"/>
        <link href="{{ asset('assetslp/plugins/switcher/css/color3.css') }}" rel="alternate stylesheet" title="color3"/>
        <link href="{{ asset('assetslp/plugins/switcher/css/color4.css') }}" rel="alternate stylesheet" title="color4"/>
        <link href="{{ asset('assetslp/plugins/switcher/css/color5.css') }}" rel="alternate stylesheet" title="color5"/>

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('/assets/images/favicon.ico') }}">

        @yield('styles')
        
        <style>
            .bg-primary, .bg-primary_h:hover, .bg-primary_b:before, .bg-primary_a:after, .btn:after, .pagination_primary > .active > a, .pagination_primary > .active > span, .pagination_primary > .active > a, .pagination_primary > .active > span, .pagination_primary > li > a:hover, .pagination_primary > li > a:focus, .dropcap_primary:first-letter, .tooltip-1 .tooltip-inner, .btn-primary, .forms__label-check-1:after, .forms__label-radio-2:before, .panel-default > .panel-heading, .b-isotope-filter > li > a.current:after, .b-isotope-filter > li > a:hover:after, .owl-theme .owl-controls .owl-page.active span, .owl-theme .owl-controls.clickable .owl-page:hover span, .b-pricing.active .b-pricing-price, .b-team .social-net__item:hover, .bx-wrapper .bx-pager.bx-default-pager a:hover, .bx-wrapper .bx-pager.bx-default-pager a.active, .bx-wrapper .bx-pager.bx-default-pager a:focus {
                background-color: white !important;
            }
        </style>

    </head>

    <body>
        <!-- Loader-->
        <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
        <!-- Loader end-->
        
        <!-- Start layout theme -->
        <div data-header="sticky" data-header-top="200" data-canvas="container" class="l-theme animated-css">
            <!-- Start Switcher-->
            <div class="switcher-wrapper">
                <div class="demo_changer">
                <div class="demo-icon text-primary"><i class="fa fa-cog fa-spin fa-2x"></i></div>
                <div class="form_holder">
                    <div class="predefined_styles">
                    <div class="skin-theme-switcher">
                        <h4>Color</h4><a href="javascript:void(0);" data-switchcolor="color1" style="background-color:#fe3e01;" class="styleswitch"></a><a href="javascript:void(0);" data-switchcolor="color2" style="background-color:#FFAC3A;" class="styleswitch"></a><a href="javascript:void(0);" data-switchcolor="color3" style="background-color:#28af0f;" class="styleswitch"></a><a href="javascript:void(0);" data-switchcolor="color4" style="background-color:#e425e9;" class="styleswitch"></a><a href="javascript:void(0);" data-switchcolor="color5" style="background-color:#0c02bd;" class="styleswitch"></a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- end switcher-->
            <!-- ==========================-->
            <!-- SEARCH MODAL-->
            <!-- ==========================-->
            <div class="header-search open-search">
                <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                    <div class="navbar-search">
                        <form class="search-global">
                        <input type="text" placeholder="Type to search" autocomplete="off" name="s" value="" class="search-global__input"/>
                        <button class="search-global__btn"><i class="icon stroke icon-Search"></i></button>
                        <div class="search-global__note">Begin typing your search above and press return to search.</div>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
                <button type="button" class="search-close close"><i class="fa fa-times"></i></button>
            </div>
            <!-- ==========================-->
            <!-- MOBILE MENU-->
            <!-- ==========================-->
            <div data-off-canvas="mobile-slidebar left overlay">
                <ul class="nav navbar-nav">
                <li><a href="/" >Home</a></li>
                <li><a href="/services">Services</a></li>
                {{-- <li><a href="/">Works</a></li> --}}
                <li><a href="/about">About</a></li>
                {{-- <li><a href="blog-main.html">News</a></li> --}}
                <li><a href="/contact">Contact</a></li>

                @auth
                    <li><a href="/dashboard">Dashboard</a></li>
                @endauth
                @guest
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>
                @endguest

                </ul>
            </div>
            <!-- ==========================-->
            <!-- FULL SCREEN MENU-->
            <!-- ==========================-->   
            <div class="wrap-fixed-menu" id="fixedMenu">
                <nav class="fullscreen-center-menu">
                <div class="menu-main-menu-container">
                    <ul class="nav navbar-nav">
                    <li><a href="/" >Home</a></li>
                    <li><a href="/services">Services</a></li>
                    {{-- <li><a href="/">Works</a></li> --}}
                    <li><a href="/about">About</a></li>
                    {{-- <li><a href="blog-main.html">News</a></li> --}}
                    <li><a href="/contact">Contact</a></li>

                    @auth
                        <li><a href="/dashboard">Dashboard</a></li>
                    @endauth
                    @guest
                        <li><a href="/login">Login</a></li>
                        <li><a href="/register">Register</a></li>
                    @endguest

                    </ul>
                </div>
                </nav>
                <button type="button" class="fullmenu-close"><i class="fa fa-times"></i></button>
            </div>
                
                
            <header class="header header-boxed-width header-background-trans header-logo-black header-topbarbox-1-left header-topbarbox-2-right header-navibox-1-left header-navibox-2-right header-navibox-3-right header-navibox-4-right">
                <div class="top-bar">
                <div class="container container-boxed-width">
                    <div class="container">
                    <div class="header-topbarbox-1">
                        <ul class="top-bar-contact">
                        <li class="top-bar-contact__item"><i class="icon icon-call-in"></i> (+01) 123 456 7899</li>
                        <li class="top-bar-contact__item"><i class="icon icon-envelope-open"></i> Contact [at] ShahidEvents.com</li>
                        <li class="top-bar-contact__item"><i class="icon icon-clock"></i> Mon – Fri  9.00 am – 6.00 pm</li>
                        </ul>
                    </div>
                    <div class="header-topbarbox-2">
                        <ul class="social-net list-inline">
                        <li class="social-net__item"><a href="twitter.com" class="social-net__link text-primary_h"><i class="icon fa fa-twitter"></i></a></li>
                        <li class="social-net__item"><a href="facebook.com" class="social-net__link text-primary_h"><i class="icon fa fa-facebook"></i></a></li>
                        <li class="social-net__item"><a href="plus.google.com" class="social-net__link text-primary_h"><i class="icon fa fa-google-plus"></i></a></li>
                        <li class="social-net__item"><a href="linkedin.com" class="social-net__link text-primary_h"><i class="icon fa fa-linkedin"></i></a></li>
                        </ul>
                        <!-- end social-list-->
                    </div>
                    </div>
                </div>
                </div>
                <div class="container container-boxed-width">
                <nav id="nav" class="navbar">
                    <div class="container">
                    <div class="header-navibox-1">
                        <!-- Mobile Trigger Start-->
                        <button class="menu-mobile-button visible-xs-block js-toggle-mobile-slidebar toggle-menu-button"><i class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i></button>

                        <!-- Mobile Trigger End-->
                        <a href="/" class="navbar-brand scroll"><img src="{{ asset('assets/uploads/default/logo.png')  }}" alt="logo" class="normal-logo"/><img src="{{ asset('assets/uploads/default/logo.png') }}" width="80" style="margin-top:-20px;" alt="logo" class="scroll-logo hidden-xs"/></a>
                    </div>
                    <div class="header-navibox-3" style="margin-left: 10px;">
                        <ul class="nav navbar-nav hidden-xs clearfix vcenter">
                        <li>
                            <button class="js-toggle-screen toggle-menu-button"><i class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i></button>
                        </li>
                        <li><a href="#" class="btn_header_search"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div>
                    <div class="header-navibox-2">
                        <ul class="yamm main-menu nav navbar-nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="/services">Services</a></li>
                        <li><a href="/about">About</a></li>
                        {{-- <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">News<b class="caret"></b></a>
                            <ul role="menu" class="dropdown-menu">
                            <li><a href="blog-main.html" >Blog main</a></li>
                            <li><a href="blog-post.html" >Blog post</a></li>
                            </ul>
                        </li> --}}
                        <li><a href="/contact">Contact</a></li>
                        
                        @auth
                            <li><a href="/dashboard" style="color: #fe3e01;">Dashboard</a></li>
                        @endauth
                        @guest
                            <li><a href="/login" style="color: #fe3e01;">Login</a></li>
                            <li><a href="/register" style="color: #fe3e01;">Register</a></li>
                        @endguest

                        {{-- <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Pages<b class="caret"></b></a>
                            <ul role="menu" class="dropdown-menu">
                            <li><a href="404.html" >Page 404</a></li>
                            <li><a href="headers.html" >Headers</a></li>
                            <li><a href="typography.html" >Typography</a></li>
                                <li><a href="/privacy-policy" >Privacy policy</a></li>
                                <li><a href="/terms-of-use" >Terms of use</a></li>
                            </ul>
                        </li> --}}
                        </ul>
                    </div>
                    </div>
                </nav>
                </div>
            </header>
            <!-- end .header-->
        

            @yield('content')

            <!-- Footer start -->
            <footer class="footer">
                <div class="footer__main">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div style="margin: -60px !important; padding: -40px !important; text-align: center;"><a href="/" class="footer__logo"><img src="{{asset('assets/uploads/default/logo.png') }}" width="120" alt="Logo" class="img-responsive"/></a></div>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <form class="footer-form">
                            <div class="row">
                                <div class="col-sm-5">
                                <h3 class="footer-form__title">Get the FREE Newsletter</h3>
                                <div class="footer-form__info">Sign up to get the updates about new events</div>
                                </div>
                                <div class="col-sm-7">
                                <div class="form-group">
                                    <input type="email" placeholder="Your email address ..." class="footer-form__input"/>
                                    <button class="footer-form__btn form-control-feedback"><i class="icon icon-envelope-open text-primary_h"></i></button>
                                </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div> --}}
                    <div class="row">
                    <div class="col-md-4">
                        <div class="footer-section">
                        <h3 class="footer-section__title ui-title-inner"><i class="ui-decor-2 bg-primary"></i> About Shahid Events</h3>
                        <div class="footer-section__subtitle">The Events Specialists!</div>
                        <div class="footer__info">
                            <p>Aorem ipsum dolor sit amet elit sed lum tempor incididunt ut labore el dolore alg minim veniam quis nostrud lorem psum dolor sit amet sed incididunt.</p>
                        </div><a href="/about" class="btn btn-default btn-xs"><i class="icon"></i> Read More</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <section class="footer-section">
                        <h3 class="footer-section__title ui-title-inner"><i class="ui-decor-2 bg-primary"></i> Keep In Touch</h3>
                        <div class="footer__contact"><i class="icon icon-map"></i> 38-2 Hilton Street, California, USA</div>
                        <div class="footer__contact"><i class="icon icon-call-in"></i> (+01) 123 456 7890</div>
                        <div class="footer__contact"><i class="icon icon-envelope-open"></i> info@shahidevents.org</div>
                        <div class="footer__contact"><i class="icon icon-clock"></i> Mon - Fri 9.00 am - 6.00 pm</div>
                        </section>
                    </div>
                    {{-- <div class="col-md-3">
                        <section class="footer-section">
                        <h3 class="footer-section__title ui-title-inner"><i class="ui-decor-2 bg-primary"></i> Events Gallery</h3>
                        <ul class="footer-gallery list-unstyled js-zoom-gallery clearfix">
                            <li class="footer-gallery__item"><a href="{{ asset('assetslp/media/components/footer/gallery-1.jpg') }}" class="footer-gallery__link js-zoom-gallery__item"><img src="{{ asset('assetslp/media/components/footer/gallery-1.jpg') }}" alt="foto" class="img-responsive"/></a></li>
                            <li class="footer-gallery__item"><a href="{{ asset('assetslp/media/components/footer/gallery-2.jpg') }}" class="footer-gallery__link js-zoom-gallery__item"><img src="{{ asset('assetslp/media/components/footer/gallery-2.jpg') }}" alt="foto" class="img-responsive"/></a></li>
                            <li class="footer-gallery__item"><a href="{{ asset('assetslp/media/components/footer/gallery-3.jpg') }}" class="footer-gallery__link js-zoom-gallery__item"><img src="{{ asset('assetslp/media/components/footer/gallery-3.jpg') }}" alt="foto" class="img-responsive"/></a></li>
                            <li class="footer-gallery__item"><a href="{{ asset('assetslp/media/components/footer/gallery-4.jpg') }}" class="footer-gallery__link js-zoom-gallery__item"><img src="{{ asset('assetslp/media/components/footer/gallery-4.jpg') }}" alt="foto" class="img-responsive"/></a></li>
                            <li class="footer-gallery__item"><a href="{{ asset('assetslp/media/components/footer/gallery-5.jpg') }}" class="footer-gallery__link js-zoom-gallery__item"><img src="{{ asset('assetslp/media/components/footer/gallery-5.jpg') }}" alt="foto" class="img-responsive"/></a></li>
                            <li class="footer-gallery__item"><a href="{{ asset('assetslp/media/components/footer/gallery-6.jpg') }}" class="footer-gallery__link js-zoom-gallery__item"><img src="{{ asset('assetslp/media/components/footer/gallery-6.jpg') }}" alt="foto" class="img-responsive"/></a></li>
                        </ul>
                        </section>
                    </div> --}}
                    <div class="col-md-4">
                        <section class="footer-section">
                        <h3 class="footer-section__title ui-title-inner"><i class="ui-decor-2 bg-primary"></i> Quick Links</h3>
                        <ul class="footer-list list list-mark-4 list-unstyled">
                            <li class="footer-list__item"><a href="/services" class="footer-list__link">Our Services</a></li>
                            <li class="footer-list__item"><a href="/" class="footer-list__link">Our Team</a></li>
                            <li class="footer-list__item"><a href="/about" class="footer-list__link">About Shahid Events</a></li>
                            <li class="footer-list__item"><a href="/" class="footer-list__link">Clients List</a></li>
                            {{-- <li class="footer-list__item"><a href="blog-main.html"class="footer-list__link">NewsBlog</a></li> --}}
                            <li class="footer-list__item"><a href="assets/downloads/doc-2.pdf" class="footer-list__link">Brochure</a></li>
                            <li class="footer-list__item"><a href="/contact" class="footer-list__link">Get In Touch</a></li>
                        </ul>
                        </section>
                    </div>
                    </div>
                </div>
                </div>
                <div class="footer__bottom">
                <div class="container">
                    <div class="row">
                    <div class="col-xs-12">
                        <div class="copyright pull-le/ft">© 2022 <strong>Shahid Events</strong> - The Events Specialists All Rights Reserved.<a href="/terms-of-use" class="copyright__link"> Terms of Use</a><a href="/privacy-policy" class="copyright__link">Privacy Policy</a></div>
                        <ul class="social-net list-inline pull-right">
                        <li class="social-net__item"><a href="youtube.com" class="social-net__link text-primary_h"><i class="icon fa fa-youtube"></i></a></li>
                        <li class="social-net__item"><a href="twitter.com" class="social-net__link text-primary_h"><i class="icon fa fa-twitter"></i></a></li>
                        <li class="social-net__item"><a href="facebook.com" class="social-net__link text-primary_h"><i class="icon fa fa-facebook"></i></a></li>
                        <li class="social-net__item"><a href="plus.google.com" class="social-net__link text-primary_h"><i class="icon fa fa-google-plus"></i></a></li>
                        <li class="social-net__item"><a href="instagram.com" class="social-net__link text-primary_h"><i class="icon fa fa-instagram"></i></a></li>
                        </ul>
                        <!-- end social-list-->
                    </div>
                    </div>
                </div>
                </div>
            </footer>
            <!-- Footer end -->

        </div>
        <!-- End layout theme -->

        <!-- JAVASCRIPT -->
        <script src="{{ asset('assetslp/libs/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('assetslp/libs/jquery-migrate-1.2.1.js') }}"></script>
        <!-- Bootstrap-->
        <script src="{{ asset('assetslp/libs/bootstrap/bootstrap.min.js') }}"></script>
        <!-- User customization-->
        <script src="{{ asset('assetslp/js/custom.js') }}"></script>
        <!-- Color scheme-->
        <script src="{{ asset('assetslp/plugins/switcher/js/dmss.js') }}"></script>
        <!-- Select customization & Color scheme-->
        <script src="{{ asset('assetslp/plugins/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
        <!-- Slider 1-->
        <script src="{{ asset('assetslp/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
        <!-- Slider 2-->
        <script src="{{ asset('assetslp/plugins/bxslider/vendor/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('assetslp/plugins/bxslider/vendor/jquery.fitvids.js') }}"></script>
        <script src="{{ asset('assetslp/plugins/bxslider/jquery.bxslider.min.js') }}"></script>
        <!-- Pop-up window-->
        <script src="{{ asset('assetslp/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <!-- Headers scripts-->
        <script src="{{ asset('assetslp/plugins/headers/slidebar.js') }}"></script>
        <script src="{{ asset('assetslp/plugins/headers/header.js') }}"></script>
        <!-- Mail scripts-->
        <script src="{{ asset('assetslp/plugins/jqBootstrapValidation.js') }}"></script>
        <script src="{{ asset('assetslp/plugins/contact_me.js') }}"></script>
        <!-- Parallax-->
        <script src="{{ asset('assetslp/plugins/stellar/jquery.stellar.min.js') }}"></script>
        <!-- Filter and sorting images-->
        <script src="{{ asset('assetslp/plugins/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assetslp/plugins/isotope/imagesLoaded.js') }}"></script>
        <!-- Progress numbers-->
        <script src="{{ asset('assetslp/plugins/rendro-easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
        <script src="{{ asset('assetslp/plugins/rendro-easy-pie-chart/waypoints.min.js') }}"></script>
        <!-- Animations-->
        <script src="{{ asset('assetslp/plugins/scrollreveal/scrollreveal.min.js') }}"></script>
        <!-- Main slider-->
        <script src="{{ asset('assetslp/plugins/slider-pro/jquery.sliderPro.min.js') }}"></script>

        @yield('scripts')


    </body>

</html>

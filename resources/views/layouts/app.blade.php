<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Management System </title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css" /><!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" type="text/css" /><!-- Icons -->
    <link rel="stylesheet" href="{{ asset('fonts/themify-icons/themify-icons.css') }}" type="text/css" /><!-- Icons -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" type="text/css" /><!-- Owl Carousal-->
    <link rel="stylesheet" href="{{ asset('css/price-range.css') }}" type="text/css" /><!-- Owl Carousal -->
    <link rel="stylesheet" href="{{ asset('css/lightslider.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css" /><!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" type="text/css" /><!-- Responsive -->
    <link rel="stylesheet" href="{{ asset('css/colors.css') }}" type="text/css" /><!-- color -->

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('js/rs-plugin/css/settings.css') }}">

</head>

<body>

    <div class="theme-layout">

        <header class="simple-header for-sticky ">
            <div class="top-bar">
                <div class="container">
                    <ul class="contact-item">
                        <li><i class="fa fa-envelope-o"></i>info@elinonga.com</li>
                        <li><i class="fa fa-mobile"></i>+255 621 410 816</li>
                    </ul>
                    <div class="choose-language">
                        <a href="#" title="">FR</a>
                        <a href="#" title="">DE</a>
                        <a href="#" title="">EN</a>
                        <a href="#" title="">jp</a>
                    </div>
                </div>
            </div><!-- Top bar -->
            <div class="menu">
                <div class="container">

                    <!-- LOGO -->
                    <div class="logo">
                        <a href="/" title="">
                            <i class="fa fa-get-pocket"></i>
                            <span>tanzania</span>
                            <strong>RENT PROPERTIES</strong>
                        </a>
                    </div>

                    <!-- Navbar -->
                    <nav>
                        <ul>

                            <li class="menu-item-has-children">
                                <a href="/" title="">HOME</a>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="#" title="">PROPERTIES</a>
                                <ul>
                                    <li><a href="properties3.html" title="">Properties- Super </a></li>
                                    <li><a href="properties.html" title="">Properties- List</a></li>
                                    <li><a href="properties2.html" title="">Properties- Grid</a></li>
                                    <li><a href="property.html" title="">Property details</a></li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="#" title="">MY PROPERTIES</a>
                                <ul>
                                    <li><a href="{{ route('add-property') }}" title="">Add Property </a></li>
                                    <li><a href="{{ route('view-property') }}" title="">View Property</a></li>
                                </ul>
                            </li>

                            <li><a href="contact.html" title="">CONTACT</a></li>

                            @auth
                                <li><a href="{{ route('home') }}" title="">Hello, {{ auth()->user()->name }}</a></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit">Logout</button>
                                    </form>
                                </li>
                            @endauth

                            @guest
                                <li><a href="{{ route('login') }}" title="">Login</a></li>
                                <li><a href="{{ route('register') }}" title="">Register</a></li>
                            @endguest

                        </ul>
                    </nav>

                </div>
            </div>
        </header>

            @yield('content')

        <footer>
            <section class="top-line">
                <!-- PARALLAX BACKGROUND IMAGE -->
                <div style="background: url(img/footer.jpg) repeat scroll 50% 422.28px transparent;"
                     class="parallax scrolly-invisible no-parallax blackish">
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col-md-3 column">
                            <div class="about_widget widget">
                                <div class="heading1">
                                    <h2><span>Useful</span> links</h2>
                                </div><!-- heading -->

                                <span><i class="fa fa-envelope"></i>yourcompany@gmail.com</span>
                                <span><i class="fa fa-phone"></i>0888 (29999996)</span>
                                <span><i class="fa fa-location-arrow"></i>1234 Tokyo shibuia , WI 54115</span>
                                <ul class="social-btns">
                                    <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-tumblr"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 column">
                            <div class="links_widget widget">
                                <div class="heading1">
                                    <h2><span>Useful</span> links</h2>
                                </div><!-- heading -->
                                <ul>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Home</a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> About us</a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Services</a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Services</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 column">
                            <div class="links_widget widget">
                                <div class="heading1">
                                    <h2><span>Useful</span> links</h2>
                                </div><!-- heading -->
                                <ul>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Lorem ipsum </a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Closest ipsum </a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Lorem dolom </a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Positioned ipl</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 column">
                            <div class="subscribe_widget widget">
                                <div class="heading1">
                                    <h2><span>Subscribe</span> Us</h2>
                                </div><!-- heading -->
                                <p>Positioning the closest positioned for abs positioning</p>
                                <form>
                                    <label><input type="text" placeholder="TYPE YOUR EMAIL" /></label>
                                    <button type="submit" class="flat-btn"><i class="ti ti-email"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="bottom-line">
                <div class="container">
                    <span>Copyright All Right Reserved 2016 <a href="#" title="">KimaroTec</a></span>
                    <ul>
                        <li><a title="" href="#">HOME</a></li>
                        <li><a title="" href="#">ABOUT</a></li>
                        <li><a title="" href="#">PROPERTIES</a></li>
                        <li><a title="" href="#">BLOG</a></li>
                        <li><a title="" href="#">CONTACT</a></li>
                    </ul>
                </div>
            </div>
            <a href="#" class="scrollToTop"><i class="ti ti-arrow-circle-up"></i></a>
        </footer>

    </div>

    <!-- Script -->
    <script type="text/javascript" src="{{ asset('js/modernizr.js') }}"></script><!-- Modernizer -->
    <script type="text/javascript" src="{{ asset('js/jquery-1.10.2.min.js') }}"></script><!-- Jquery -->
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script><!-- Bootstrap -->
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script><!-- Owl Carousal -->
    <script type="text/javascript" src="{{ asset('js/html5lightbox.js') }}"></script><!-- HTML -->
    <script type="text/javascript" src="{{ asset('js/scrolly.js') }}"></script><!-- Parallax -->
    <script type="text/javascript" src="{{ asset('js/price-range.js') }}"></script><!-- Parallax -->
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script><!-- Script -->
    <script type="text/javascript" src="{{ asset('js/lightslider.min.js') }}"></script>

    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="{{ asset('js/infobox.js') }}"></script><!-- Parallax -->
    <script src="{{ asset('js/data.json') }}"></script>
    <script src="{{ asset('js/markerclusterer.js') }}"></script>
    <script src="{{ asset('js/markers-map.js') }}"></script>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <script type="text/javascript" src="{{ asset('js/gmaps.js') }}"></script>


    <script>
        $(document).ready(function () {

            $('#image-gallery').lightSlider({
                gallery: true,
                item: 1,
                thumbItem: 9,
                slideMargin: 0,
                speed: 500,
                auto: true,
                loop: true,
                onSliderLoad: function () {
                    $('#image-gallery').removeClass('cS-hidden');
                }
            });
        });
    </script>

    <script>
        google.maps.event.addDomListener(window, 'load', speedTest.init);
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            "use strict";

            $(".carousel-prop").owlCarousel({
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 2000,
                loop: true,
                dots: true,
                nav: false,
                items: 4,
                itemsCustom: false,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [980, 2],
                itemsTablet: [768, 2],
                itemsTabletSmall: false,
                itemsMobile: [479, 1],
                itemsScaleUp: false

            });


            $(".carousel").owlCarousel({
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 2000,
                loop: false,
                dots: false,
                nav: true,
                margin: 0,
                items: 3
            });

            $(".carousel-client").owlCarousel({
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 2000,
                loop: false,
                dots: false,
                items: 5,
                itemsCustom: false,
                itemsDesktop: [1199, 5],
                itemsDesktopSmall: [980, 3],
                itemsTablet: [768, 2],
                itemsTabletSmall: false,
                itemsMobile: [479, 1],
                itemsScaleUp: false
            });

            $(".related-properties-items").owlCarousel({
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 2000,
                loop: true,
                dots: true,
                nav: false,
                marging: 30,
                items: 4,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    600: {
                        items: 2,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: true,
                        loop: false
                    }
                }
            });

        });
    </script>

    <script type="text/javascript">
    $(function () {
        map();
    });
    /* map */
    function map() {
        var styles = [{"featureType": "landscape", "stylers": [{"saturation": -100}, {"lightness": 65}, {"visibility": "on"}]}, {"featureType": "poi", "stylers": [{"saturation": -100}, {"lightness": 51}, {"visibility": "simplified"}]}, {"featureType": "road.highway", "stylers": [{"saturation": -100}, {"visibility": "simplified"}]}, {"featureType": "road.arterial", "stylers": [{"saturation": -100}, {"lightness": 30}, {"visibility": "on"}]}, {"featureType": "road.local", "stylers": [{"saturation": -100}, {"lightness": 40}, {"visibility": "on"}]}, {"featureType": "transit", "stylers": [{"saturation": -100}, {"visibility": "simplified"}]}, {"featureType": "administrative.province", "stylers": [{"visibility": "off"}]}, {"featureType": "water", "elementType": "labels", "stylers": [{"visibility": "on"}, {"lightness": -25}, {"saturation": -100}]}, {"featureType": "water", "elementType": "geometry", "stylers": [{"hue": "#ffff00"}, {"lightness": -25}, {"saturation": -97}]}];
        map = new GMaps({
            el: '#propertyMap',
            lat: -12.043333,
            lng: -77.028333,
            zoomControl: true,
            zoomControlOpt: {
                style: 'SMALL',
                position: 'TOP_LEFT'
            },
            panControl: false,
            streetViewControl: false,
            mapTypeControl: false,
            overviewMapControl: false,
            scrollwheel: false,
            draggable: false,
            styles: styles
        });
        var image = 'img/house.png';
        map.addMarker({
            lat: -12.043333,
            lng: -77.028333,
            icon: image/* ,
             title: '',
             infoWindow: {
             content: '<p>HTML Content</p>'
             }*/
        });
    }

</script>

</body>



</html>

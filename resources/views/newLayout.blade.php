<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Branding and Digital Agency">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Alkhayat</title>
    <link rel="stylesheet" href="{{ asset('css/nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/Home.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset('js/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('js/nicepage.js') }}" defer=""></script>
    <meta name="generator" content="Nicepage 3.16.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">

    <!-- Pricing -->
    <link rel="stylesheet" href="{{ asset('css/pricing.css') }}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
    <!-- FOR IE9 below -->

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "",
            "url": "index.html",
            "logo": "images/default-logo.png"
        }

    </script>
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
    <link href="{{ asset('css/main.82cfd66e.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
</head>

<body class="u-body" dir="{{ App::isLocale('ar') ? 'rtl' : 'ltr' }}">
   <header class="u-clearfix u-header u-header" id="sec-b508">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <a href="/" class="u-image u-logo u-image-1">
                <img src="{{ asset('images/logoAlkhayat.png') }}" class="u-logo-image u-logo-image-1" />
            </a>
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
                <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px">
                    <a class="
                u-button-style
                u-custom-left-right-menu-spacing
                u-custom-padding-bottom
                u-custom-top-bottom-menu-spacing
                u-nav-link
                u-text-active-palette-1-base
                u-text-hover-palette-2-base
              " href="#">
                        <svg>
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                        </svg>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px">
                                    <rect y="1" width="16" height="2"></rect>
                                    <rect y="7" width="16" height="2"></rect>
                                    <rect y="13" width="16" height="2"></rect>
                                </symbol>
                            </defs>
                        </svg>
                    </a>
                </div>
                <div class="u-nav-container">
                    <ul class="u-nav u-unstyled u-nav-1">
                        <li class="u-nav-item">
                            <a class="
                    u-button-style
                    u-nav-link
                    u-text-active-palette-1-base
                    u-text-hover-palette-2-base
                  " style="padding: 10px 20px"
                                href="{{ route('home', app()->getLocale()) }}">{{ __('Home') }}</a>
                        </li>
                        <li class="u-nav-item">
                            <a class="
                    u-button-style
                    u-nav-link
                    u-text-active-palette-1-base
                    u-text-hover-palette-2-base
                  " style="padding: 10px 20px"
                                href="{{ route('about', app()->getLocale()) }} ">{{ __('About') }}</a>
                        </li>
                        <li class="u-nav-item">
                            <a class="
                    u-button-style
                    u-nav-link
                    u-text-active-palette-1-base
                    u-text-hover-palette-2-base
                  " style="padding: 10px 20px"
                                href="{{ route('collections', app()->getLocale()) }}">{{ __('Collections') }}</a>
                        </li>
                        <li class="u-nav-item">
                            <a class="
                    u-button-style
                    u-nav-link
                    u-text-active-palette-1-base
                    u-text-hover-palette-2-base
                  " style="padding: 10px 20px"
                                href="{{ route('contact', app()->getLocale()) }}">{{ __('Contact') }}</a>
                        </li>
                        <li class="u-nav-item">
                            <a class="
                    u-button-style
                    u-nav-link
                    u-text-active-palette-1-base
                    u-text-hover-palette-2-base
                  " style="padding: 10px 20px" href="{{ route(Route::currentRouteName(), 'en') }}">En</a>
                        </li>
                        <li class="u-nav-item">
                            <a class="
                    u-button-style
                    u-nav-link
                    u-text-active-palette-1-base
                    u-text-hover-palette-2-base
                  " style="padding: 10px 20px" href="{{ route(Route::currentRouteName(), 'ar') }}">Ar</a>
                        </li>
                    </ul>
                </div>
                <div class="u-nav-container-collapse">
                    <div class="
                u-black
                u-container-style
                u-inner-container-layout
                u-opacity
                u-opacity-95
                u-sidenav
              ">
                        <div class="u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="
                    u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2
                  ">
                                <li class="u-nav-item">
                                    <a class="u-button-style u-nav-link"
                                        href="{{ route('home', app()->getLocale()) }}">{{ __('Home') }}</a>
                                </li>
                                <li class="u-nav-item">
                                    <a class="u-button-style u-nav-link"
                                        href="{{ route('about', app()->getLocale()) }} ">{{ __('About') }}</a>
                                </li>
                                <li class="u-nav-item">
                                    <a class="u-button-style u-nav-link"
                                        href="{{ route('collections', app()->getLocale()) }}">{{ __('Collections') }}</a></a>
                                </li>
                                <li class="u-nav-item">
                                    <a class="u-button-style u-nav-link"
                                        href="{{ route('contact', app()->getLocale()) }}">{{ __('Contact') }}</a>
                                </li>
                                <li class="u-nav-item">
                                    <a class="u-button-style u-nav-link"
                                        href="{{ route(Route::currentRouteName(), 'en') }}">En</a>
                                </li>
                                <li class="u-nav-item">
                                    <a class="u-button-style u-nav-link"
                                        href="{{ route(Route::currentRouteName(), 'ar') }}">Ar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
    </header>




    @yield('newContent');


    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-a031">
        <div class="u-clearfix u-sheet u-sheet-1">
            <p class="nav-footer-social-buttons">
                <a class="fa-icon" href="https://www.instagram.com/" title="">
                    <i class="fa fa-instagram"></i>
                </a>
                <a class="fa-icon" href="https://www.pinterest.com" title="">
                    <i class="fa fa-pinterest"></i>
                </a>
                <a class="fa-icon" href="https://facebook.com/" title="">
                    <i class="fa fa-facebook"></i>
                </a>
            </p>
            {{-- <p>© Alkhayat | Website created with <a href="http://www.mashup-template.com/"
                            title="Create website with free html template">Mashup Template</a>/<a
                            href="https://www.unsplash.com/" title="Beautiful Free Images">Unsplash</a></p> --}}
            <p>© Alkhayat</p>
        </div>
    </footer>

    <script type="text/javascript" src="{{ asset('js/main.85741bff.js') }}"></script>
    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- jQuery Easing -->
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Waypoints -->
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <!-- Stellar Parallax -->
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <!-- Carousel -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- Flexslider -->
    <script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
    <!-- countTo -->
    <script src="{{ asset('js/jquery.countTo.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/magnific-popup-options.js') }}"></script>
    <!-- Count Down -->
    <script src="{{ asset('js/simplyCountdown.js') }}"></script>
    <!-- Main -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <meta content="Page description" name="description">
    <meta name="google" content="notranslate" />
    <meta content="Mashup templates have been developped by Orson.io team" name="author">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="./assets/apple-icon-180x180.png" rel="apple-touch-icon">
    <link rel="icon" type="image/jpg" href="{{ asset('images/favicon.jpg') }}">



    <title>Alkhayat</title>

    <link href="{{ asset('css/main.82cfd66e.css') }}" rel="stylesheet">
</head>

<body dir="{{ App::isLocale('ar') ? 'rtl' : 'ltr' }}">

    <!-- Add your content of header -->
    <header class="">
        <div class="navbar navbar-default visible-xs" style="width: 100%">
            <button type="button" class="navbar-toggle collapsed">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="./">
                <img href="/" class="img-responsive site-logo" style="align-items: center;"
                    src="{{ asset('images/logoAlkhayat.png') }}">
            </a>
        </div>

        <nav class="sidebar">
            <div class="navbar-collapse" id="navbar-collapse">
                <div class="site-header hidden-xs">
                    <a class="site-brand" href="/" title="">
                        <img class="img-responsive site-logo" alt="" src="{{ asset('images/logoAlkhayat.png') }}">
                        {{ __('Alkhayat') }}
                    </a>
                    <p>{{ __('We are a brand which has been born into Authenticity. It is time to create original and truly traditional products.') }}
                    </p>
                </div>
                <ul class="nav">
                    <li><a href="{{ route('home', app()->getLocale()) }}" title="">{{ __('Home') }}</a></li>
                    <li><a href="{{ route('about', app()->getLocale()) }} " title="">{{ __('About') }}</a></li>
                    <li><a href="{{ route('collections', app()->getLocale()) }}"
                            title="">{{ __('Collections') }}</a></li>
                    <li><a href="{{ route('contact', app()->getLocale()) }}" title="">{{ __('Contact') }}</a></li>
                    {{-- <li><a href="./components.html" title="">Components</a></li> --}}

                </ul>

                <nav class="nav-footer">
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
                        <a class="fa-icon" href="{{ route(Route::currentRouteName(), 'en') }}"> EN
                        </a>
                        <a class="fa-icon" href="{{ route(Route::currentRouteName(), 'ar') }}"> AR
                        </a>

                    </p>

                    <p>© {{ __('Alkhayat') }}</p>
                </nav>
            </div>
        </nav>
    </header>

    @yield('content')

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            navbarToggleSidebar();
            navActivePage();
        });

    </script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID 

<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
      m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-XXXXX-X', 'auto');
  ga('send', 'pageview');
</script>

-->
    <script type="text/javascript" src="{{ asset('js/main.85741bff.js') }}"></script>
</body>

</html>

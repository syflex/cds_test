<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>CDAInterview | {{ $page->meta_title }}</title>
        <meta content="{{ $page->meta_descriptison }}" name="descriptison">

        <meta content="" name="keywords">

        @if ($page->no_index == true)
            <meta name="robots" content="noindex">
        @endif


        <!-- Favicons -->
        <link href="../assets/img/favicon.png" rel="icon">
        <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('css/app.css') }}"" rel="stylesheet">
        <link rel="stylesheet" href="https://allyoucan.cloud/cdn/icofont/1.0.1/icofont.css" integrity="sha384-jbCTJB16Q17718YM9U22iJkhuGbS0Gd2LjaWb4YJEZToOPmnKDjySVa323U+W7Fv" crossorigin="anonymous">

        <!-- Template Main CSS File -->
        <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-165353516-1"></script>

        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '{{$global_settings->google_analytics_tag}}');
        </script>

        {{-- {{dd($global_settings->fb_ads_pixel)}} --}}

        <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '{{$global_settings->fb_ads_pixel}}');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id={{$global_settings->fb_ads_pixel}}&ev=PageView&noscript=1"
        /></noscript>
      
        </head>

        <body>

        <header id="header" class="fixed-top ">
            <div class="container d-flex align-items-center">

            <a href="{{ url('/') }}" class="logo mr-auto"><img src="{{asset('assets/img/bemo-logo2.png')}}" width="165"  class="img-fluid"/></a>

            <nav class="nav-menu d-none d-lg-block ">
                <ul class="">
                <li class="active"><a href="{{ url('/') }}">Main</a></li>
                <li><a href="#">How To Prepare</a></li>
                <li><a href="#">CDA Interview Questions</a></li>
                <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                </ul>
            </nav><!-- .nav-menu -->

            </div>
        </header><!-- End Header -->


        @yield('content')
        
        <footer id="footer">
            <div class="container copyright">
                &copy; 2013-2016 BeMo Academic Consulting Inc. All rights reserved. . <a href="http://www.cdainterview.com/disclaimer-privacy-policy.html"target="_blank"><span style="text-decoration:underline;">Disclaimer & Privacy Policy</span></a>
            </div>
        </footer>
        
        <a href="#" class="back-to-top" style="display: inline;"><i class="icofont-long-arrow-up"></i></a>

        <!-- Vendor JS Files -->

        <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('assets/js/main.js')}}"></script>

    </body>
    </html>

</html>

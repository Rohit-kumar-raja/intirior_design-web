{{-- @include('frontend.feedback') --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $title }} || {{ env('APP_NAME') }} </title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="{{ url('frontend/css/price_table.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/style1.css') }}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{ url('frontend/css/responsive.css') }}">
    <!-- Favicon -->
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png"> -->
    <link rel="icon" type="image/png" href="{{ url('frontend/images/favicon/favicon-32x32.png') }}"
        sizes="32x32">
    <link rel="icon" type="image/png" href="{{ url('frontend/images/favicon/favicon-16x16.png') }}"
        sizes="16x16">
    <link rel="stylesheet" type="" href="{{ url('frontend/css/work-process.css') }}">
    {{-- modal style start --}}
    <!-- font awesome v5.5.0 free version -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
    <!-- bootstrap version v4.0.0 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
        rel="stylesheet">
    <!-- custom css -->
    <link href="{{ url('frontend/css/stll.css') }}" rel="stylesheet">
    {{-- modal style end --}}
    <style>
        .web-logo {
            width: 200px;
            position: absolute;
            top: 3px;
        }
    </style>
</head>

<body>
    <div class="boxed_wrapper">
        @include('include.header')
        {{ $body }}
        @include('include.footer')
    </div>
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
    <script src="{{ url('frontend/js/jquery.js') }}"></script>
    <script src="{{ url('frontend/js/appear.js') }}"></script>
    <script src="{{ url('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('frontend/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ url('frontend/js/isotope.js') }}"></script>
    <script src="{{ url('frontend/js/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="{{ url('frontend/js/jquery.countTo.js') }}"></script>
    <script src="{{ url('frontend/js/jquery.easing.min.js') }}"></script>
    <script src="{{ url('frontend/js/jquery.enllax.min.js') }}"></script>
    <script src="{{ url('frontend/js/jquery.fancybox.js') }}"></script>
    <script src="{{ url('frontend/js/jquery.mixitup.min.js') }}"></script>
    <script src="{{ url('frontend/js/jquery.paroller.min.js') }}"></script>
    <script src="{{ url('frontend/js/owl.js') }}"></script>
    <script src="{{ url('frontend/js/validation.js') }}"></script>
    <script src="{{ url('frontend/js/wow.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBevTAR-V2fDy9gQsQn1xNHBPH2D36kck0"></script>
    <script src="{{ url('frontend/js/gmaps.js') }}"></script>
    <script src="{{ url('frontend/js/map-helper.js') }}"></script>
    <script src="{{ url('frontend/assets/language-switcher/jquery.polyglot.language.switcher.js') }}"></script>
    <script src="{{ url('frontend/assets/timepicker/timePicker.js') }}"></script>
    <script src="{{ url('frontend/assets/html5lightbox/html5lightbox.js') }}"></script>
    <!--Revolution Slider-->
    <script src="{{ url('frontend/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ url('frontend/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ url('frontend/plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ url('frontend/plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ url('frontend/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ url('frontend/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}">
    </script>
    <script src="{{ url('frontend/plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ url('frontend/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ url('frontend/plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ url('frontend/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ url('frontend/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ url('frontend/js/main-slider-script.js') }}"></script>
    <!-- thm custom script -->
    <script src="{{ url('frontend/js/custom.js') }}"></script>

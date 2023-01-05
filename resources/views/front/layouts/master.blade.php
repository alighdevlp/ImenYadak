<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#f7858d">
    <meta name="msapplication-navbutton-color" content="#f7858d">
    <meta name="apple-mobile-web-app-status-bar-style" content="#f7858d">
    <title>@yield('title')</title>
    {{--  <!-- Font Icon -->  --}}
    <link rel="stylesheet" href="{{ url('/front/css/vendor/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('/front/css/vendor/materialdesignicons.min.css') }}">
    {{--  <!-- Bootstrap -->  --}}
    <link rel="stylesheet" href="{{ url('/front/css/vendor/bootstrap.min.css') }}">
    {{--  <!-- Plugins -->  --}}
    <link rel="stylesheet" href="{{ url('/front/css/vendor/bootstrap-slider.min.css') }}">
    <link rel="stylesheet" href="{{ url('/front/css/vendor/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('/front/css/vendor/jquery.horizontalmenu.css') }}">
    <link rel="stylesheet" href="{{ url('/front/css/vendor/fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ url('/front/css/vendor/nice-select.css') }}">
    <link rel="stylesheet" href="{{ url('/front/css/vendor/nouislider.min.css') }}">
    {{--  <!-- Main CSS File -->  --}}
    <link rel="stylesheet" href="{{ url('/front/css/main.css') }}">
    <link rel="stylesheet" href="{{ url('/front/css/colors/default.css') }}" id="colorswitch">

    @livewireStyles
</head>

<body>
    <div class="wrapper">
        {{--  <!-- Start header -->  --}}
        <header class="main-header">
            <!-- Start ads -->
            <div class="ads-header-wrapper">
                <a href="#" class="ads-header hidden-sm" target="_blank"
                    style="background-image: url('/front/img/banner/large-ads.jpg')"></a>
            </div>
            <!-- End ads -->

            {{--  <!-- Start topbar -->  --}}
            @include('front.layouts.topbar')
            {{--  <!-- End topbar -->  --}}

            {{--  <!-- Start bottom-header -->  --}}
            @include('front.layouts.header')
            {{--  <!-- End bottom-header -->  --}}
        </header>
        <!-- End header -->


        {{--  Start Main Content  --}}
        <main class="main-content dt-sl mb-3">
            <div class="container main-container">
                @yield('content')
            </div>
        </main>
        {{--  End Main Content  --}}


        {{--  <!-- Start footer -->  --}}
        @include('front.layouts.footer')
        {{--  <!-- End footer -->  --}}

    </div>

    {{--  Start ColorPanel  --}}

    {{--  <div id="colorswitch-option">
        <button><i class="mdi mdi-settings"></i></button>
        <ul>
            <li class="active" data-path="./assets/css/colors/default.css"><span
                    style="background-color: #f7858d;"></span></li>
            <li data-path="./assets/css/colors/amber-color.css"><span style="background-color: #ffab00;"></span></li>
            <li data-path="./assets/css/colors/blue-color.css"><span style="background-color: #2979ff;"></span></li>
            <li data-path="./assets/css/colors/blue-grey-color.css"><span style="background-color: #607d8b;"></span>
            </li>
            <li data-path="./assets/css/colors/brown-color.css"><span style="background-color: #795548;"></span></li>
            <li data-path="./assets/css/colors/cyan-color.css"><span style="background-color: #00bcd4;"></span></li>
            <li data-path="./assets/css/colors/green-color.css"><span style="background-color: #4caf50;"></span></li>
            <li data-path="./assets/css/colors/indigo-color.css"><span style="background-color: #3f51b5;"></span></li>
            <li data-path="./assets/css/colors/lime-color.css"><span style="background-color: #cddc39;"></span></li>
            <li data-path="./assets/css/colors/orange-color.css"><span style="background-color: #ff9800;"></span></li>
            <li data-path="./assets/css/colors/red-color.css"><span style="background-color: #f44336;"></span></li>
            <li data-path="./assets/css/colors/teal-color.css"><span style="background-color: #009688;"></span></li>
            <li data-path="./assets/css/colors/purple-color.css"><span style="background-color: #9c27b0;"></span></li>
        </ul>
    </div>  --}}

    {{--  End ColorPanel  --}}

    {{--  <!-- end colorPanel -->  --}}
    {{--  <!-- Core JS Files -->  --}}
    <script src="{{ url('/front/js/vendor/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ url('/front/js/vendor/popper.min.js') }}"></script>
    <script src="{{ url('/front/js/vendor/bootstrap.min.js') }}"></script>
    {{--  <!-- Plugins -->  --}}
    <script src="{{ url('/front/js/vendor/bootstrap-slider.min.js') }}"></script>
    <script src="{{ url('/front/js/vendor/owl.carousel.min.js') }}"></script>
    <script src="{{ url('/front/js/vendor/owl.carousel2.thumbs.min.js') }}"></script>
    <script src="{{ url('/front/js/vendor/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ url('/front/js/vendor/jquery.nice-select.min.js') }}"></script>
    <script src="{{ url('/front/js/vendor/nouislider.min.js') }}"></script>
    <script src="{{ url('/front/js/vendor/jquery.horizontalmenu.js') }}"></script>
    <script src="{{ url('/front/js/vendor/jquery.fancybox.min.js') }}"></script>
    <script src="{{ url('/front/js/vendor/countdown.min.js') }}"></script>
    <script src="{{ url('/front/js/vendor/wNumb.js') }}"></script>
    <script src="{{ url('/front/js/vendor/ResizeSensor.min.js') }}"></script>
    <script src="{{ url('/front/js/vendor/theia-sticky-sidebar.min.js') }}"></script>
    {{--  <!-- Main JS File -->  --}}
    <script src="{{ url('/front/js/main.js') }}"></script>
    
    <script>
        $(document).ready(function () {
            var nonLinearStepSlider = document.getElementById('slider-non-linear-step');
            noUiSlider.create(nonLinearStepSlider, {
                start: [0, 20000],
                connect: true,
                direction: 'rtl',
                format: wNumb({
                    decimals: 0,
                    thousand: ','
                }),
                range: {
                    'min': [0],
                    '10%': [500, 500],
                    '50%': [40000, 1000],
                    'max': [100000]
                }
            });
            var nonLinearStepSliderValueElement = document.getElementById('slider-non-linear-step-value');
            nonLinearStepSlider.noUiSlider.on('update', function (values) {
                nonLinearStepSliderValueElement.innerHTML = values.join(' - ');
            });
        });
    </script>
    @livewireScripts
</body>

</html>

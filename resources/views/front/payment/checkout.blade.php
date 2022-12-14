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
</head>

<body>
    <div class="wrapper shopping-page">
        <main class="main-content dt-sl mt-4 mb-3">
            <div class="container main-container">

                <div class="row">
                    <div class="cart-page-content col-12 px-0">
                        <div class="checkout-alert dt-sn dt-sn--box mb-4">
                            <div class="circle-box-icon successful">
                                <i class="mdi mdi-check-bold"></i>
                            </div>
                            <div class="checkout-alert-title">
                                <h4> ?????????? <span
                                        class="checkout-alert-highlighted checkout-alert-highlighted-success">{{ $order->code }}</span>
                                    ???? ???????????? ???? ?????????? ?????? ????.
                                </h4>
                            </div>
                            <div class="checkout-alert-content">
                                <p class="checkout-alert-content-success">
                                    ?????????? ???????????? ???? ???? ?????? ?????????? ?????????? ?????????? ????.
                                </p>
                            </div>
                        </div>
                        <section class="checkout-details dt-sl dt-sn dt-sn--box mt-4 pt-4 pb-3 pr-3 pl-3 mb-5 px-res-1">
                            <div class="checkout-details-title">
                                <h4>
                                    ???? ??????????:
                                    <span>
                                        {{ $order->code }}
                                    </span>
                                </h4>
                                <div class="row">
                                    <div class="col-lg-9 col-md-8 col-sm-12">
                                        <div class="checkout-details-title">
                                            <p>
                                                ?????????? ?????? ???? ???????????? ???? ?????????? ?????? ???? ?? ???? ??????????
                                                <span class="text-highlight text-highlight-success">?????????? ??????</span>
                                                ??????.
                                                ???????????? ?????? ?????????? ???? ??????????????????? ???? ???????? ???? ?????? ????????
                                                <a href="#" class="border-bottom-dt">???????????? ??????????</a>
                                                ???????????? ????????????.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                        <a href="#"
                                            class="btn-primary-cm bg-secondary btn-with-icon d-block text-center pr-0">
                                            <i class="mdi mdi-shopping"></i>
                                            ???????????? ??????????
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 px-res-0">
                                        <div class="checkout-table">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <p>
                                                        ?????? ?????????? ????????????:
                                                        <span>
                                                            {{ $order->user->name }}
                                                        </span></p>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <p>
                                                        ?????????? ???????? :
                                                        <span>
                                                            {{ $order->user->phone }}
                                                        </span></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <p>
                                                        ?????????? ???????????? :
                                                        <span>
                                                            ??
                                                        </span></p>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <p>
                                                        ???????? ????:
                                                        <span>
                                                            {{ $order_price }} ??????????
                                                        </span></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <p>
                                                        ?????? ????????????:
                                                        <span>
                                                            ???????????? ????????????????
                                                            <span class="green">
                                                                (????????)
                                                            </span></span></p>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <p>
                                                        ?????????? ??????????:
                                                        <span>
                                                            ???????????? ????
                                                        </span></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <p>???????? : ?????????? ???????????? ??????????
                                                        ?? ???????????????????? ???????????? ??????????-????????????</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <!-- Start Product-Slider -->
                    <section class="slider-section dt-sl mt-5 mb-5">
                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="section-title text-sm-title title-wide no-after-title-wide">
                                    <h2>?????????????? ???????????????? ???????? ??????</h2>
                                    <a href="#">???????????? ??????</a>
                                </div>
                            </div>

                            <!-- Start Product-Slider -->
                            <div class="col-12 px-res-0">
                                <div class="product-carousel carousel-lg owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="product-card mb-3">
                                            <div class="product-head">
                                                <div class="rating-stars">
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                </div>
                                                <div class="discount">
                                                    <span>20%</span>
                                                </div>
                                            </div>
                                            <a class="product-thumb" href="shop-single.html">
                                                <img src="./assets/img/products/07.jpg" alt="Product Thumbnail">
                                            </a>
                                            <div class="product-card-body">
                                                <h5 class="product-title">
                                                    <a href="shop-single.html">?????????? ??????????</a>
                                                </h5>
                                                <a class="product-meta" href="shop-categories.html">???????? ??????????</a>
                                                <span class="product-price">157,000 ??????????</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-card mb-3">
                                            <div class="product-head">
                                                <div class="rating-stars">
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                </div>
                                            </div>
                                            <a class="product-thumb" href="shop-single.html">
                                                <img src="./assets/img/products/017.jpg" alt="Product Thumbnail">
                                            </a>
                                            <div class="product-card-body">
                                                <h5 class="product-title">
                                                    <a href="shop-single.html">???? ????????????</a>
                                                </h5>
                                                <a class="product-meta" href="shop-categories.html">???????? ????????????</a>
                                                <span class="product-price">199,000 ??????????</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-card mb-3">
                                            <div class="product-head">
                                                <div class="rating-stars">
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star"></i>
                                                </div>
                                            </div>
                                            <a class="product-thumb" href="shop-single.html">
                                                <img src="./assets/img/products/013.jpg" alt="Product Thumbnail">
                                            </a>
                                            <div class="product-card-body">
                                                <h5 class="product-title">
                                                    <a href="shop-single.html">?????????? ?????????? ?????? ???????? ?????? ??????</a>
                                                </h5>
                                                <a class="product-meta" href="shop-categories.html">???????? ??????????</a>
                                                <span class="product-price">135,000 ??????????</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-card mb-3">
                                            <div class="product-head">
                                                <div class="rating-stars">
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star"></i>
                                                </div>
                                            </div>
                                            <a class="product-thumb" href="shop-single.html">
                                                <img src="./assets/img/products/09.jpg" alt="Product Thumbnail">
                                            </a>
                                            <div class="product-card-body">
                                                <h5 class="product-title">
                                                    <a href="shop-single.html">?????????? ??????????</a>
                                                </h5>
                                                <a class="product-meta" href="shop-categories.html">???????? ??????????</a>
                                                <span class="product-price">145,000 ??????????</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-card mb-3">
                                            <div class="product-head">
                                                <div class="rating-stars">
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                </div>
                                            </div>
                                            <a class="product-thumb" href="shop-single.html">
                                                <img src="./assets/img/products/010.jpg" alt="Product Thumbnail">
                                            </a>
                                            <div class="product-card-body">
                                                <h5 class="product-title">
                                                    <a href="shop-single.html">?????????? ??????????</a>
                                                </h5>
                                                <a class="product-meta" href="shop-categories.html">???????? ??????????</a>
                                                <span class="product-price">170,000 ??????????</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-card mb-3">
                                            <div class="product-head">
                                                <div class="rating-stars">
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star"></i>
                                                </div>
                                                <div class="discount">
                                                    <span>20%</span>
                                                </div>
                                            </div>
                                            <a class="product-thumb" href="shop-single.html">
                                                <img src="./assets/img/products/011.jpg" alt="Product Thumbnail">
                                            </a>
                                            <div class="product-card-body">
                                                <h5 class="product-title">
                                                    <a href="shop-single.html">?????????? ??????????</a>
                                                </h5>
                                                <a class="product-meta" href="shop-categories.html">???????? ??????????</a>
                                                <span class="product-price">185,000 ??????????</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-card mb-3">
                                            <div class="product-head">
                                                <div class="rating-stars">
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star"></i>
                                                </div>
                                            </div>
                                            <a class="product-thumb" href="shop-single.html">
                                                <img src="./assets/img/products/019.jpg" alt="Product Thumbnail">
                                            </a>
                                            <div class="product-card-body">
                                                <h5 class="product-title">
                                                    <a href="shop-single.html">?????????? ????????????</a>
                                                </h5>
                                                <a class="product-meta" href="shop-categories.html">???????? ????????????</a>
                                                <span class="product-price">54,000 ??????????</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product-Slider -->

                        </div>
                    </section>
                    <!-- End Product-Slider -->
                </div>

            </div>
        </main>
        <!-- End main-content -->
        <!-- Start mini-footer -->
        <footer class="mini-footer dt-sl">
            <div class="container main-container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 text-left">
                        <i class="mdi mdi-phone-outline"></i>
                        ?????????? ???????? : <a href="#">
                            ????????????????
                            - ??????
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <i class="mdi mdi-email-outline"></i>
                        ???????? ?????????? : <a href="#">info@gmail.com</a>
                    </div>
                    <div class="col-12 text-center mt-2">
                        <p class="text-secondary text-footer">
                            ?????????????? ???? ???????? ???????? ???? ???? ???????????? ???????????? ?? ???????????? ?????????? ???????? ??????.
                        </p>
                    </div>
                    <div class="col-12 text-center">
                        <div class="copy-right-mini-footer">
                            Copyright ?? 2019 Didikala
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End mini-footer -->
    </div>
    <!-- colorPanel -->
    <div id="colorswitch-option">
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
    </div>

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
</body>

</html>
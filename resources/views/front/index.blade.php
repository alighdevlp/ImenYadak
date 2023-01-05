@extends('front.layouts.master')

@section('title', $option->title)


@section('content')

    <div class="row mb-5">
        <aside class="sidebar col-lg-4 hidden-md order-2 pr-0 hidden-md">

            {{--  <!-- Start banner -->  --}}
            <div class="sidebar-inner dt-sl">
                <div class="sidebar-banner">
                    <div class="row">
                        @foreach ($banners_top as $banner_top)
                            <div class="col-12 mb-1">
                                <div class="widget-banner">
                                    <a href="#">
                                        <img src="{{ url('/upload/banners/' . $banner_top->image) }}" alt="">
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            {{--  <!-- End banner -->  --}}

        </aside>
        <div class="col-lg-8 col-md-12 order-1">
            {{--  <!-- Start main-slider -->  --}}

            <section id="main-slider"
                class="main-slider main-slider-cs mt-1 carousel slide carousel-fade card hidden-sm"
                data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach ($sliders as $slider)                        
                    <li data-target="#main-slider" data-slide-to="{{ $slider->order }}" class="active"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach ($sliders as $slider)                    
                    <div class="carousel-item active">
                        <a class="main-slider-slide" href="#">
                            <img src="{{ url('/upload/sliders/' . $slider->image) }}" alt="" class="img-fluid">
                        </a>
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#main-slider" role="button" data-slide="prev">
                    <i class="mdi mdi-chevron-right"></i>
                </a>
                <a class="carousel-control-next" href="#main-slider" data-slide="next">
                    <i class="mdi mdi-chevron-left"></i>
                </a>
            </section>

            <section id="main-slider-res"
                class="main-slider carousel slide carousel-fade card d-none show-sm" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#main-slider-res" data-slide-to="0" class="active"></li>
                    <li data-target="#main-slider-res" data-slide-to="1"></li>
                    <li data-target="#main-slider-res" data-slide-to="2"></li>
                    <li data-target="#main-slider-res" data-slide-to="3"></li>
                    <li data-target="#main-slider-res" data-slide-to="4"></li>
                    <li data-target="#main-slider-res" data-slide-to="5"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a class="main-slider-slide" href="#">
                            <img src="{{ url('/front/img/main-slider/slider-responsive/1.jpg') }}" alt=""
                                class="img-fluid">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a class="main-slider-slide" href="#">
                            <img src="{{ url('/front/img/main-slider/slider-responsive/2.jpg') }}" alt=""
                                class="img-fluid">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a class="main-slider-slide" href="#">
                            <img src="{{ url('/front/img/main-slider/slider-responsive/3.jpg') }}" alt=""
                                class="img-fluid">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a class="main-slider-slide" href="#">
                            <img src="{{ url('/front/img/main-slider/slider-responsive/4.jpg') }}" alt=""
                                class="img-fluid">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a class="main-slider-slide" href="#">
                            <img src="{{ url('/front/img/main-slider/slider-responsive/5.jpg') }}" alt=""
                                class="img-fluid">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a class="main-slider-slide" href="#">
                            <img src="{{ url('/front/img/main-slider/slider-responsive/6.jpg') }}" alt=""
                                class="img-fluid">
                        </a>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#main-slider-res" role="button" data-slide="prev">
                    <i class="mdi mdi-chevron-right"></i>
                </a>
                <a class="carousel-control-next" href="#main-slider-res" data-slide="next">
                    <i class="mdi mdi-chevron-left"></i>
                </a>
            </section>
            {{--  <!-- End main-slider -->  --}}
        </div>
    </div>

{{--  <!-- Start Suggest Product-Slider -->  --}}
<section class="slider-section mb-5 amazing-section" style="background: #ef394e">
    <div class="container main-container">
        <div class="row mb-3">
            {{--  Start Suggest Product-Slider   --}}
            <div class="col-12">
                <div class="product-carousel carousel-lg owl-carousel owl-theme">
                    <div class="item">
                        <div class="amazing-product text-center pt-5">
                            <a href="#">
                                <img src="{{ url('/front/img/theme/amazing-1.png') }}" alt="">
                            </a>
                            <a href="#" class="view-all-amazing-btn">
                                مشاهده همه
                            </a>
                        </div>
                    </div>

                    @foreach ($products_suggest as $product_suggest)
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
                            <a class="product-thumb" href="{{ route('product.show',$product_suggest->slug) }}">
                                <img src="{{ url('/upload/products/' . $product_suggest->image) }}" alt="Product Thumbnail">
                            </a>
                            <div class="product-card-body text-center">
                                <h5 class="product-title">
                                    <a href="shop-single.html">{{ $product_suggest->title }}</a>
                                </h5>
                                {{--  <a class="product-meta" href="shop-categories.html">لباس مردانه</a>  --}}
                                <span class="product-price">{{ $product_suggest->price }} تومان</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
            {{--  End Suggest Product-Slider  --}}

        </div>
    </div>
</section>
{{--  End Suggest Product-Slider  --}}


<div class="container main-container">
    {{--  Start Sest Sellers Product-Slider  --}}
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <section class="slider-section dt-sl mb-5">
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="section-title text-sm-title title-wide no-after-title-wide">
                            <h2>پر فروش ترینها</h2>
                            {{--  <a href="#">مشاهده همه</a>  --}}
                        </div>
                    </div>

                    {{--  Start Sest Sellers Product-Slider  --}}
                    <div class="col-12 px-res-0">
                        <div class="product-carousel carousel-md owl-carousel owl-theme">
                        @foreach ($products_suggest as $product_suggest)
                            <div class="item">
                                <div class="product-card">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                        </div>
                                        {{--  <div class="discount">
                                            <span>20%</span>
                                        </div>  --}}
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="{{ url('/upload/products/' .  $product_suggest->image) }}" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body text-center">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">{{ $product_suggest->title }}</a>
                                        </h5>
                                        {{--  <a class="product-meta" href="shop-categories.html">لباس زنانه</a>  --}}
                                        <span class="product-price">{{ $product_suggest->price }} تومان</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                    {{--  End Sest Sellers Product-Slider  --}}

                </div>
            </section>
        </div>

        {{--  <div class="col-xl-2 col-lg-3 hidden-lg pr-0">
            <div class="widget-suggestion dt-sn border pt-3 mt-3">
                <div class="widget-suggestion-title">
                    <img src="{{ url('/front/img/theme/suggestion-title.png') }}" alt="">
                </div>
                <div id="progressBar">
                    <div class="slide-progress"></div>
                </div>
                <div id="suggestion-slider" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="product-card mb-3 shadow-unset">
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
                                <img src="{{ url('/front/img/products/07.jpg') }}" alt="Product Thumbnail">
                            </a>
                            <div class="product-card-body">
                                <h5 class="product-title">
                                    <a href="shop-single.html">مانتو زنانه</a>
                                </h5>
                                <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                <span class="product-price">157,000 تومان</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-card mb-3 shadow-unset">
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
                                <img src="{{ url('/front/img/products/017.jpg') }}" alt="Product Thumbnail">
                            </a>
                            <div class="product-card-body">
                                <h5 class="product-title">
                                    <a href="shop-single.html">کت مردانه</a>
                                </h5>
                                <a class="product-meta" href="shop-categories.html">لباس مردانه</a>
                                <span class="product-price">199,000 تومان</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-card mb-3 shadow-unset">
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
                                <img src="{{ url('/front/img/products/013.jpg') }}" alt="Product Thumbnail">
                            </a>
                            <div class="product-card-body">
                                <h5 class="product-title">
                                    <a href="shop-single.html">مانتو زنانه مدل هودی تیک تین</a>
                                </h5>
                                <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                <span class="product-price">135,000 تومان</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-card mb-3 shadow-unset">
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
                                <img src="{{ url('/front/img/products/09.jpg') }}" alt="Product Thumbnail">
                            </a>
                            <div class="product-card-body">
                                <h5 class="product-title">
                                    <a href="shop-single.html">مانتو زنانه</a>
                                </h5>
                                <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                <span class="product-price">145,000 تومان</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  --}}

    </div>
    {{--  End Sest Sellers Product-Slider  --}}
    
    {{--  Start Center Banner  --}}
    <div class="row mt-3 mb-5">
        @foreach ($banners_center as $banner_center)
            <div class="col-sm-6 col-12 mb-2">
                <div class="widget-banner">
                    <a href="#">
                        <img src="{{ url('/upload/banners/' . $banner_center->image) }}" alt="">
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    {{--  End Center Banner  --}}
</div>

{{--  Start Popular Product-Slider  --}}
<section class="slider-section mb-5 amazing-section" style="background: #304ffe">
    <div class="container main-container">
        <div class="row mb-3">
            {{--  Start Popular Product-Slider  --}}
            <div class="col-12">
                <div class="product-carousel carousel-lg owl-carousel owl-theme">
                    <div class="item">
                        <div class="amazing-product text-center pt-5">
                            <a href="#">
                                <img src="{{ url('/front/img/theme/amazing-1.png') }}" alt="">
                            </a>
                            <a href="#" class="view-all-amazing-btn">
                                مشاهده همه
                            </a>
                        </div>
                    </div>

                @foreach ($products_popular as $product_popular)
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
                                <img src="{{ url('/upload/products/' . $product_popular->image) }}" alt="Product Thumbnail">
                            </a>
                            <div class="product-card-body text-center">
                                <h5 class="product-title">
                                    <a href="shop-single.html">{{ $product_popular->title }}</a>
                                </h5>
                                {{--  <a class="product-meta" href="shop-categories.html">لباس مردانه</a>  --}}
                                <span class="product-price">{{ $product_popular->price }} تومان</span>
                            </div>
                        </div>
                    </div>
                @endforeach

                </div>
            </div>
            {{--  End Popular Product-Slider  --}}

        </div>
    </div>
</section>
{{--  End Popular Product-Slider  --}}

<div class="container main-container">
    {{--  Start Bottom Banner  --}}
    <div class="row mt-3 mb-5">
        @foreach ($banners_bottom as $banner_bottom)
            <div class="col-md-3 col-sm-6 col-6 mb-2">
                <div class="widget-banner">
                    <a href="#">
                        <img src="{{ url('/upload/banners/' . $banner_bottom->image) }}" alt="">
                    </a>
                </div>
            </div>
        @endforeach
    {{--  End Bottom Banner  --}}
    <!-- Start Category-Section -->
{{--      
    <div class="row mt-3 mb-5">
        <div class="col-12">
            <div class="category-section dt-sn dt-sl border">
                <div class="category-section-title dt-sl">
                    <h3>بیش از ۱،۵۰۰،۰۰۰ کالا در دسته‌بندی‌های مختلف</h3>
                </div>
                <div class="category-section-slider dt-sl">
                    <div class="category-slider owl-carousel">
                        <div class="item">
                            <a href="#" class="promotion-category">
                                <img src="{{ url('/front/img/category/notebook-computer.png') }}" alt="">
                                <h4 class="promotion-category-name">کالای دیجیتال</h4>
                                <h6 class="promotion-category-quantity">۱۵۶۰۰۰ کالا</h6>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="promotion-category">
                                <img src="{{ url('/front/img/category/lifeline-in-a-heart-outline.png') }}" alt="">
                                <h4 class="promotion-category-name">آرایشی، بهداشتی و سلامت</h4>
                                <h6 class="promotion-category-quantity">۴۸۰۰۰ کالا</h6>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="promotion-category">
                                <img src="{{ url('/front/img/category/repair-tools.png') }}" alt="">
                                <h4 class="promotion-category-name">خودرو،ابزار و اداری</h4>
                                <h6 class="promotion-category-quantity">۵۶۰۰۰ کالا</h6>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="promotion-category">
                                <img src="{{ url('/front/img/category/hanbok.png') }}" alt="">
                                <h4 class="promotion-category-name">مد و پوشاک</h4>
                                <h6 class="promotion-category-quantity">۲۱۷۰۰۰ کالا</h6>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="promotion-category">
                                <img src="{{ url('/front/img/category/sofa.png') }}" alt="">
                                <h4 class="promotion-category-name">خانه و آشپزخانه</h4>
                                <h6 class="promotion-category-quantity">۲۲۹۰۰۰ کالا</h6>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="promotion-category">
                                <img src="{{ url('/front/img/category/school-material.png') }}" alt="">
                                <h4 class="promotion-category-name">لوازم تحریر و هنر</h4>
                                <h6 class="promotion-category-quantity">۸۶۰۰۰ کالا</h6>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="promotion-category">
                                <img src="{{ url('/front/img/category/baby-girl.png') }}" alt="">
                                <h4 class="promotion-category-name">کودک و نوزاد</h4>
                                <h6 class="promotion-category-quantity">۳۲۰۰۰ کالا</h6>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="promotion-category">
                                <img src="{{ url('/front/img/category/adventurer.png') }}" alt="">
                                <h4 class="promotion-category-name">ورزش و سفر</h4>
                                <h6 class="promotion-category-quantity">۱۵۰۰۰ کالا</h6>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="promotion-category">
                                <img src="{{ url('/front/img/category/restaurant-cutlery-circular-symbol-of-a-spoon-and-a-fork-in-a-circle.png') }}"
                                    alt="">
                                <h4 class="promotion-category-name">خوردنی و آشامیدنی</h4>
                                <h6 class="promotion-category-quantity">۲۲۰۰۰ کالا</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  --}}

    <!-- End Category-Section -->


    {{--  Start New Product-Slider  --}}
    <section class="slider-section dt-sl mb-5">
        <div class="row mb-3">
            <div class="col-12">
                <div class="section-title text-sm-title title-wide no-after-title-wide">
                    <h2>جدید ترینها</h2>
                    {{--  <a href="#">مشاهده همه</a>  --}}
                </div>
            </div>

            {{--  Start New Product-Slider  --}}
            <div class="col-12">
                <div class="product-carousel carousel-lg owl-carousel owl-theme">
                @foreach ($products_new as $product_new)
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
                                {{--  <div class="discount">
                                    <span>20%</span>
                                </div>  --}}
                            </div>
                            <a class="product-thumb" href="shop-single.html">
                                <img src="{{ url('/upload/products/' . $product_new->image) }}" alt="Product Thumbnail">
                            </a>
                            <div class="product-card-body text-center">
                                <h5 class="product-title">
                                    <a href="shop-single.html">{{ $product_new->title }}</a>
                                </h5>
                                {{--  <a class="product-meta" href="shop-categories.html">لباس زنانه</a>  --}}
                                <span class="product-price">{{ $product_new->price }} تومان</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
            {{--  End New Product-Slider  --}}

        </div>
    </section>
    {{--  End New Product-Slider  --}}

    <!-- Start Banner -->
    {{--  <div class="row mt-3 mb-5">
        <div class="col-12">
            <div class="widget-banner">
                <a href="#">
                    <img src="{{ url('/front/img/banner/large-banner.jpg') }}" alt="">
                </a>
            </div>
        </div>
    </div>  --}}
    <!-- End Banner -->

    {{--  <!-- Start Product-Slider -->
    <section class="slider-section dt-sl mb-5">
        <div class="row mb-3">
            <div class="col-12">
                <div class="section-title text-sm-title title-wide no-after-title-wide">
                    <h2>پر فروش ترینها</h2>
                    <a href="#">مشاهده همه</a>
                </div>
            </div>

            <!-- Start Product-Slider -->
            <div class="col-12">
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
                                <img src="{{ url('/front/img/products/07.jpg') }}" alt="Product Thumbnail">
                            </a>
                            <div class="product-card-body">
                                <h5 class="product-title">
                                    <a href="shop-single.html">مانتو زنانه</a>
                                </h5>
                                <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                <span class="product-price">157,000 تومان</span>
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
                                <img src="{{ url('/front/img/products/017.jpg') }}" alt="Product Thumbnail">
                            </a>
                            <div class="product-card-body">
                                <h5 class="product-title">
                                    <a href="shop-single.html">کت مردانه</a>
                                </h5>
                                <a class="product-meta" href="shop-categories.html">لباس مردانه</a>
                                <span class="product-price">199,000 تومان</span>
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
                                <img src="{{ url('/front/img/products/013.jpg') }}" alt="Product Thumbnail">
                            </a>
                            <div class="product-card-body">
                                <h5 class="product-title">
                                    <a href="shop-single.html">مانتو زنانه مدل هودی تیک تین</a>
                                </h5>
                                <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                <span class="product-price">135,000 تومان</span>
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
                                <img src="{{ url('/front/img/products/09.jpg') }}" alt="Product Thumbnail">
                            </a>
                            <div class="product-card-body">
                                <h5 class="product-title">
                                    <a href="shop-single.html">مانتو زنانه</a>
                                </h5>
                                <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                <span class="product-price">145,000 تومان</span>
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
                                <img src="{{ url('/front/img/products/010.jpg') }}" alt="Product Thumbnail">
                            </a>
                            <div class="product-card-body">
                                <h5 class="product-title">
                                    <a href="shop-single.html">مانتو زنانه</a>
                                </h5>
                                <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                <span class="product-price">170,000 تومان</span>
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
                                <img src="{{ url('/front/img/products/011.jpg') }}" alt="Product Thumbnail">
                            </a>
                            <div class="product-card-body">
                                <h5 class="product-title">
                                    <a href="shop-single.html">مانتو زنانه</a>
                                </h5>
                                <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                <span class="product-price">185,000 تومان</span>
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
                                <img src="{{ url('/front/img/products/019.jpg') }}" alt="Product Thumbnail">
                            </a>
                            <div class="product-card-body">
                                <h5 class="product-title">
                                    <a href="shop-single.html">تیشرت مردانه</a>
                                </h5>
                                <a class="product-meta" href="shop-categories.html">لباس مردانه</a>
                                <span class="product-price">54,000 تومان</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product-Slider -->

        </div>
    </section>
    <!-- End Product-Slider -->  --}}

    <!-- Start Feature-Product -->

    {{--  <section class="dt-sl dt-sn mb-5">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-sm-title title-wide no-after-title-wide">
                    <h2>پیشنهاد ما</h2>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-4 col-md-6 col-sm-12 col-12 pt-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card-horizontal-product border-bottom rounded-0">
                            <div class="card-horizontal-product-thumb">
                                <a href="#">
                                    <img src="{{ url('/front/img/products/017.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="card-horizontal-product-content">
                                <div class="card-horizontal-product-title">
                                    <a href="#">
                                        <h3>کت مردانه مجلسی مدل k-m-5110</h3>
                                    </a>
                                </div>
                                <div class="rating-stars">
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star"></i>
                                </div>
                                <div class="card-horizontal-product-price">
                                    <span>199,000 تومان</span>
                                </div>
                                <div class="card-horizontal-product-buttons">
                                    <a href="#" class="btn btn-outline-info">جزئیات محصول</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card-horizontal-product border-bottom rounded-0">
                            <div class="card-horizontal-product-thumb">
                                <a href="#">
                                    <img src="{{ url('/front/img/products/020.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="card-horizontal-product-content">
                                <div class="card-horizontal-product-title">
                                    <a href="#">
                                        <h3>کت مردانه مجلسی مدل k-m-5110</h3>
                                    </a>
                                </div>
                                <div class="rating-stars">
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star"></i>
                                </div>
                                <div class="card-horizontal-product-price">
                                    <span>199,000 تومان</span>
                                </div>
                                <div class="card-horizontal-product-buttons">
                                    <a href="#" class="btn btn-outline-info">جزئیات محصول</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card-horizontal-product border-bottom rounded-0">
                            <div class="card-horizontal-product-thumb">
                                <a href="#">
                                    <img src="{{ url('/front/img/products/014.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="card-horizontal-product-content">
                                <div class="card-horizontal-product-title">
                                    <a href="#">
                                        <h3>کت مردانه مجلسی مدل k-m-5110</h3>
                                    </a>
                                </div>
                                <div class="rating-stars">
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star"></i>
                                </div>
                                <div class="card-horizontal-product-price">
                                    <span>199,000 تومان</span>
                                </div>
                                <div class="card-horizontal-product-buttons">
                                    <a href="#" class="btn btn-outline-info">جزئیات محصول</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12 pt-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card-horizontal-product border-bottom rounded-0">
                            <div class="card-horizontal-product-thumb">
                                <a href="#">
                                    <img src="{{ url('/front/img/products/016.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="card-horizontal-product-content">
                                <div class="card-horizontal-product-title">
                                    <a href="#">
                                        <h3>کت مردانه مجلسی مدل k-m-5110</h3>
                                    </a>
                                </div>
                                <div class="rating-stars">
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star"></i>
                                </div>
                                <div class="card-horizontal-product-price">
                                    <span>199,000 تومان</span>
                                </div>
                                <div class="card-horizontal-product-buttons">
                                    <a href="#" class="btn btn-outline-info">جزئیات محصول</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card-horizontal-product border-bottom rounded-0">
                            <div class="card-horizontal-product-thumb">
                                <a href="#">
                                    <img src="{{ url('/front/img/products/018.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="card-horizontal-product-content">
                                <div class="card-horizontal-product-title">
                                    <a href="#">
                                        <h3>کت مردانه مجلسی مدل k-m-5110</h3>
                                    </a>
                                </div>
                                <div class="rating-stars">
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star"></i>
                                </div>
                                <div class="card-horizontal-product-price">
                                    <span>199,000 تومان</span>
                                </div>
                                <div class="card-horizontal-product-buttons">
                                    <a href="#" class="btn btn-outline-info">جزئیات محصول</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card-horizontal-product border-bottom rounded-0">
                            <div class="card-horizontal-product-thumb">
                                <a href="#">
                                    <img src="{{ url('/front/img/products/015.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="card-horizontal-product-content">
                                <div class="card-horizontal-product-title">
                                    <a href="#">
                                        <h3>کت مردانه مجلسی مدل k-m-5110</h3>
                                    </a>
                                </div>
                                <div class="rating-stars">
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star"></i>
                                </div>
                                <div class="card-horizontal-product-price">
                                    <span>199,000 تومان</span>
                                </div>
                                <div class="card-horizontal-product-buttons">
                                    <a href="#" class="btn btn-outline-info">جزئیات محصول</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12 pt-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card-horizontal-product border-bottom rounded-0">
                            <div class="card-horizontal-product-thumb">
                                <a href="#">
                                    <img src="{{ url('/front/img/products/017.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="card-horizontal-product-content">
                                <div class="card-horizontal-product-title">
                                    <a href="#">
                                        <h3>کت مردانه مجلسی مدل k-m-5110</h3>
                                    </a>
                                </div>
                                <div class="rating-stars">
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star"></i>
                                </div>
                                <div class="card-horizontal-product-price">
                                    <span>199,000 تومان</span>
                                </div>
                                <div class="card-horizontal-product-buttons">
                                    <a href="#" class="btn btn-outline-info">جزئیات محصول</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card-horizontal-product border-bottom rounded-0">
                            <div class="card-horizontal-product-thumb">
                                <a href="#">
                                    <img src="{{ url('/front/img/products/020.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="card-horizontal-product-content">
                                <div class="card-horizontal-product-title">
                                    <a href="#">
                                        <h3>کت مردانه مجلسی مدل k-m-5110</h3>
                                    </a>
                                </div>
                                <div class="rating-stars">
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star"></i>
                                </div>
                                <div class="card-horizontal-product-price">
                                    <span>199,000 تومان</span>
                                </div>
                                <div class="card-horizontal-product-buttons">
                                    <a href="#" class="btn btn-outline-info">جزئیات محصول</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card-horizontal-product border-bottom rounded-0">
                            <div class="card-horizontal-product-thumb">
                                <a href="#">
                                    <img src="{{ url('/front/img/products/014.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="card-horizontal-product-content">
                                <div class="card-horizontal-product-title">
                                    <a href="#">
                                        <h3>کت مردانه مجلسی مدل k-m-5110</h3>
                                    </a>
                                </div>
                                <div class="rating-stars">
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star active"></i>
                                    <i class="mdi mdi-star"></i>
                                </div>
                                <div class="card-horizontal-product-price">
                                    <span>199,000 تومان</span>
                                </div>
                                <div class="card-horizontal-product-buttons">
                                    <a href="#" class="btn btn-outline-info">جزئیات محصول</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  --}}

    <!-- End Feature-Product -->
    <!-- Start Brand-Slider -->
    <section class="slider-section dt-sl mb-5">
        <div class="row">
            <!-- Start Product-Slider -->
            <div class="col-12">
                <div class="brand-slider carousel-lg owl-carousel owl-theme">
                    @foreach ($brands as $brand)
                        <div class="item">
                            <img src="{{ url('/upload/brands/' . $brand->image) }}" class="img-fluid" alt="">
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- End Product-Slider -->

        </div>
    </section>
    <!-- End Brand-Slider -->
</div>
@endsection
<footer class="main-footer dt-sl">
    <div class="back-to-top">
        <a href="#"><span class="icon"><i class="mdi mdi-chevron-up"></i></span> <span>بازگشت به
                بالا</span></a>
    </div>
    <div class="container main-container">
        <div class="footer-services">
            <div class="row">
                @foreach ($attributes as $attribute)
                    <div class="service-item col">
                        <a href="#" target="_blank">
                            <img src="{{ url('/upload/attributes/' . $attribute->icon) }}">
                        </a>
                        <p>{{ $attribute->title }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{--  <div class="footer-widgets">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="widget-menu widget card">
                        <header class="card-header">
                            <h3 class="card-title">راهنمای خرید از تاپ کالا</h3>
                        </header>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">نحوه ثبت سفارش</a>
                            </li>
                            <li>
                                <a href="#">رویه ارسال سفارش</a>
                            </li>
                            <li>
                                <a href="#">شیوه‌های پرداخت</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="widget-menu widget card">
                        <header class="card-header">
                            <h3 class="card-title">خدمات مشتریان</h3>
                        </header>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">پاسخ به پرسش‌های متداول</a>
                            </li>
                            <li>
                                <a href="#">رویه‌های بازگرداندن کالا</a>
                            </li>
                            <li>
                                <a href="#">شرایط استفاده</a>
                            </li>
                            <li>
                                <a href="#">حریم خصوصی</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="widget-menu widget card">
                        <header class="card-header">
                            <h3 class="card-title">با تاپ کالا</h3>
                        </header>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">فروش در تاپ کالا</a>
                            </li>
                            <li>
                                <a href="#">همکاری با سازمان‌ها</a>
                            </li>
                            <li>
                                <a href="#">فرصت‌های شغلی</a>
                            </li>
                            <li>
                                <a href="#">تماس با تاپ کالا</a>
                            </li>
                            <li>
                                <a href="#">درباره تاپ کالا</a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="newsletter">
                        <p>از تخفیف‌ها و جدیدترین‌های فروشگاه باخبر شوید:</p>
                        <form action="">
                            <input type="email" class="form-control"
                                placeholder="آدرس ایمیل خود را وارد کنید...">
                            <input type="submit" class="btn btn-primary" value="ارسال">
                        </form>
                    </div>
                    <div class="socials">
                        <p>ما را در شبکه های اجتماعی دنبال کنید.</p>
                        <div class="footer-social">
                            <ul class="text-center">
                                <li><a href="#"><i class="mdi mdi-instagram"></i></a></li>
                                <li><a href="#"><i class="mdi mdi-telegram"></i></a></li>
                                <li><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                                <li><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>  --}}
        
        <div class="info">
            <div class="row">
                <div class="col-12 text-right">
                    <span>هفت روز هفته ، 24 ساعت شبانه‌روز پاسخگوی شما هستیم.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="description">
        <div class="container main-container">
            <div class="row">
                <div class="site-description col-12 col-lg-7">
                    <h1 class="site-title">{{ $option->footer_title }}</h1>
                    <p>
                        {!! $option->footer_description !!}
                    </p>
                </div>
                <div class="symbol col-12 col-lg-5">
                    <a href="#" target="_blank"><img src="{{ url('/front/img/symbol-01.png') }}" alt=""></a>
                    <a href="#" target="_blank"><img src="{{ url('/front/img/symbol-02.png') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container main-container">
            <p>
                {{ $option->footer_copyright }}
            </p>
        </div>
    </div>
</footer>
<div class="bottom-header dt-sl mb-sm-bottom-header">
    <div class="container main-container">
        <!-- Start Main-Menu -->
        <nav class="main-menu d-flex justify-content-md-between justify-content-end dt-sl">
            <ul class="list hidden-sm">

                @foreach ($menu_categories as $mc)
                <li class="list-item category-list">
                    <a href="#"><i class="fal fa-bars ml-1"></i>{{ $mc->menu_name }}</a>
                    <ul>

                        @foreach ($mc->menu_categories as $menucategories)                            
                        <li>
                            <a href="#">{{ $menucategories->menucategory_name }}</a>
                            <ul class="row">
                                @foreach ($menucategories->menuitems as $menuitem)
                                <li class="sublist{{ $menuitem->menu_class }}"><a href="#">{{ $menuitem->menuitem_name }}</a></li>
                                {{--  <li class="sublist--item"><a href="#">کیف و کاور گوشی</a></li>
                                <li class="sublist--item"><a href="#">پاور بانک (شارژر همراه)</a></li>
                                <li class="sublist--item"><a href="#">پایه نگهدارنده گوشی</a></li>  --}}
                                @endforeach
                            </ul>
                        </li>
                        @endforeach

                        {{--  <li>
                            <a href="#">خودرو، ابزار و تجهیزات صنعتی</a>
                            <ul class="row">
                                <li class="sublist--title"><a href="#">لوازم جانبی گوشی</a></li>
                                <li class="sublist--item"><a href="#">کیف و کاور گوشی</a></li>
                                <li class="sublist--item"><a href="#">پاور بانک (شارژر همراه)</a></li>
                                <li class="sublist--item"><a href="#">پایه نگهدارنده گوشی</a></li>
                                <li class="sublist--title"><a href="#">گوشی موبایل</a></li>
                                <li class="sublist--item"><a href="#">سامسونگ</a></li>
                                <li class="sublist--item"><a href="#">هوآوی</a></li>
                                <li class="sublist--item"><a href="#">اپل</a></li>
                                <li class="sublist--item"><a href="#">شیائومی</a></li>
                                <li class="sublist--item"><a href="#">آنر</a></li>
                                <li class="sublist--item"><a href="#">نوکیا</a></li>
                                <li class="sublist--title"><a href="#">واقعیت مجازی</a></li>
                                <li class="sublist--title"><a href="#">مچ‌بند و ساعت هوشمند</a></li>
                                <li class="sublist--title"><a href="#">هدفون، هدست، هندزفری</a></li>
                                <li class="sublist--item"><a href="#">سامسونگ</a></li>
                                <li class="sublist--item"><a href="#">هوآوی</a></li>
                                <li class="sublist--item"><a href="#">اپل</a></li>
                                <li class="sublist--item"><a href="#">شیائومی</a></li>
                                <li class="sublist--item"><a href="#">آنر</a></li>
                                <li class="sublist--item"><a href="#">نوکیا</a></li>
                                <li class="sublist--title"><a href="#">واقعیت مجازی</a></li>
                                <li class="sublist--title"><a href="#">مچ‌بند و ساعت هوشمند</a></li>
                                <li class="sublist--title"><a href="#">هدفون، هدست، هندزفری</a></li>
                                <li class="sublist--title"><a href="#">برندها</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">مد و پوشاک</a>
                            <ul class="row">
                                <li class="sublist--title"><a href="#">لوازم جانبی گوشی</a></li>
                                <li class="sublist--item"><a href="#">کیف و کاور گوشی</a></li>
                                <li class="sublist--item"><a href="#">پاور بانک (شارژر همراه)</a></li>
                                <li class="sublist--item"><a href="#">پایه نگهدارنده گوشی</a></li>
                                <li class="sublist--title"><a href="#">گوشی موبایل</a></li>
                                <li class="sublist--item"><a href="#">سامسونگ</a></li>
                                <li class="sublist--item"><a href="#">هوآوی</a></li>
                                <li class="sublist--item"><a href="#">اپل</a></li>
                                <li class="sublist--item"><a href="#">هوآوی</a></li>
                                <li class="sublist--item"><a href="#">اپل</a></li>
                                <li class="sublist--item"><a href="#">شیائومی</a></li>
                                <li class="sublist--item"><a href="#">آنر</a></li>
                                <li class="sublist--item"><a href="#">نوکیا</a></li>
                                <li class="sublist--title"><a href="#">واقعیت مجازی</a></li>
                                <li class="sublist--title"><a href="#">مچ‌بند و ساعت هوشمند</a></li>
                                <li class="sublist--title"><a href="#">هدفون، هدست، هندزفری</a></li>
                                <li class="sublist--title"><a href="#">برندها</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">زیبایی و سلامت</a>
                            <ul class="row">
                                <li class="sublist--title"><a href="#">لوازم جانبی گوشی</a></li>
                                <li class="sublist--item"><a href="#">کیف و کاور گوشی</a></li>
                                <li class="sublist--item"><a href="#">پاور بانک (شارژر همراه)</a></li>
                                <li class="sublist--item"><a href="#">پایه نگهدارنده گوشی</a></li>
                                <li class="sublist--title"><a href="#">گوشی موبایل</a></li>
                                <li class="sublist--item"><a href="#">سامسونگ</a></li>
                                <li class="sublist--item"><a href="#">هوآوی</a></li>
                                <li class="sublist--item"><a href="#">اپل</a></li>
                                <li class="sublist--title"><a href="#">مچ‌بند و ساعت هوشمند</a></li>
                                <li class="sublist--title"><a href="#">هدفون، هدست، هندزفری</a></li>
                                <li class="sublist--title"><a href="#">برندها</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">خانه و آشپزخانه</a>
                            <ul class="row">
                                <li class="sublist--title"><a href="#">لوازم جانبی گوشی</a></li>
                                <li class="sublist--item"><a href="#">کیف و کاور گوشی</a></li>
                                <li class="sublist--item"><a href="#">پاور بانک (شارژر همراه)</a></li>
                                <li class="sublist--item"><a href="#">پایه نگهدارنده گوشی</a></li>
                                <li class="sublist--title"><a href="#">گوشی موبایل</a></li>
                                <li class="sublist--item"><a href="#">سامسونگ</a></li>
                                <li class="sublist--item"><a href="#">هوآوی</a></li>
                                <li class="sublist--item"><a href="#">لنز</a></li>
                                <li class="sublist--item"><a href="#">کیف</a></li>
                                <li class="sublist--item"><a href="#">کارت حافظه</a></li>
                                <li class="sublist--item"><a href="#">کاغذ چاپ عکس</a></li>
                                <li class="sublist--item"><a href="#">دوربین دوچشمی و شکاری</a></li>
                                <li class="sublist--title"><a href="#">لوازم جانبی گوشی</a></li>
                                <li class="sublist--item"><a href="#">کیف و کاور گوشی</a></li>
                                <li class="sublist--item"><a href="#">پاور بانک (شارژر همراه)</a></li>
                                <li class="sublist--item"><a href="#">پایه نگهدارنده گوشی</a></li>
                                <li class="sublist--title"><a href="#">گوشی موبایل</a></li>
                                <li class="sublist--item"><a href="#">سامسونگ</a></li>
                                <li class="sublist--item"><a href="#">هوآوی</a></li>
                                <li class="sublist--item"><a href="#">اپل</a></li>
                                <li class="sublist--item"><a href="#">شیائومی</a></li>
                                <li class="sublist--item"><a href="#">آنر</a></li>
                                <li class="sublist--item"><a href="#">نوکیا</a></li>
                                <li class="sublist--title"><a href="#">واقعیت مجازی</a></li>
                                <li class="sublist--title"><a href="#">مچ‌بند و ساعت هوشمند</a></li>
                                <li class="sublist--title"><a href="#">هدفون، هدست، هندزفری</a></li>
                                <li class="sublist--title"><a href="#">برندها</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">کتاب، لوازم تحریر و هنر</a>
                            <ul class="row">
                                <li class="sublist--item"><a href="#">کارت حافظه</a></li>
                                <li class="sublist--item"><a href="#">کاغذ چاپ عکس</a></li>
                                <li class="sublist--item"><a href="#">دوربین دوچشمی و شکاری</a></li>
                                <li class="sublist--title"><a href="#">لوازم جانبی گوشی</a></li>
                                <li class="sublist--item"><a href="#">کیف و کاور گوشی</a></li>
                                <li class="sublist--item"><a href="#">پاور بانک (شارژر همراه)</a></li>
                                <li class="sublist--item"><a href="#">پایه نگهدارنده گوشی</a></li>
                                <li class="sublist--title"><a href="#">گوشی موبایل</a></li>
                                <li class="sublist--item"><a href="#">سامسونگ</a></li>
                                <li class="sublist--item"><a href="#">هوآوی</a></li>
                                <li class="sublist--item"><a href="#">اپل</a></li>
                                <li class="sublist--item"><a href="#">شیائومی</a></li>
                                <li class="sublist--item"><a href="#">آنر</a></li>
                                <li class="sublist--item"><a href="#">نوکیا</a></li>
                                <li class="sublist--title"><a href="#">واقعیت مجازی</a></li>
                                <li class="sublist--title"><a href="#">مچ‌بند و ساعت هوشمند</a></li>
                                <li class="sublist--title"><a href="#">هدفون، هدست، هندزفری</a></li>
                                <li class="sublist--title"><a href="#">برندها</a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="#">اسباب بازی، کودک و نوزاد</a>
                            <ul class="row">
                                <li class="sublist--title"><a href="#">لوازم جانبی گوشی</a></li>
                                <li class="sublist--item"><a href="#">کیف و کاور گوشی</a></li>
                                <li class="sublist--item"><a href="#">لنز</a></li>
                                <li class="sublist--item"><a href="#">کیف</a></li>
                                <li class="sublist--item"><a href="#">کارت حافظه</a></li>
                                <li class="sublist--item"><a href="#">کاغذ چاپ عکس</a></li>
                                <li class="sublist--item"><a href="#">دوربین دوچشمی و شکاری</a></li>
                                <li class="sublist--title"><a href="#">لوازم جانبی گوشی</a></li>
                                <li class="sublist--item"><a href="#">کیف و کاور گوشی</a></li>
                                <li class="sublist--item"><a href="#">پاور بانک (شارژر همراه)</a></li>
                                <li class="sublist--item"><a href="#">پایه نگهدارنده گوشی</a></li>
                                <li class="sublist--title"><a href="#">گوشی موبایل</a></li>
                                <li class="sublist--item"><a href="#">سامسونگ</a></li>
                                <li class="sublist--item"><a href="#">هوآوی</a></li>
                                <li class="sublist--item"><a href="#">اپل</a></li>
                                <li class="sublist--item"><a href="#">شیائومی</a></li>
                                <li class="sublist--item"><a href="#">آنر</a></li>
                                <li class="sublist--item"><a href="#">نوکیا</a></li>
                                <li class="sublist--title"><a href="#">واقعیت مجازی</a></li>
                                <li class="sublist--title"><a href="#">مچ‌بند و ساعت هوشمند</a></li>
                                <li class="sublist--title"><a href="#">هدفون، هدست، هندزفری</a></li>
                                <li class="sublist--title"><a href="#">برندها</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">ورزش و سفر</a>
                            <ul class="row">
                                <li class="sublist--title"><a href="#">لوازم جانبی گوشی</a></li>
                                <li class="sublist--item"><a href="#">کیف و کاور گوشی</a></li>
                                <li class="sublist--item"><a href="#">پاور بانک (شارژر همراه)</a></li>
                                <li class="sublist--item"><a href="#">پایه نگهدارنده گوشی</a></li>
                                <li class="sublist--title"><a href="#">گوشی موبایل</a></li>
                                <li class="sublist--item"><a href="#">سامسونگ</a></li>
                                <li class="sublist--item"><a href="#">هوآوی</a></li>
                                <li class="sublist--item"><a href="#">اپل</a></li>
                                <li class="sublist--item"><a href="#">شیائومی</a></li>
                                <li class="sublist--item"><a href="#">آنر</a></li>
                                <li class="sublist--item"><a href="#">نوکیا</a></li>
                                <li class="sublist--title"><a href="#">هدفون، هدست، هندزفری</a></li>
                                <li class="sublist--title"><a href="#">برندها</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">خوردنی و آشامیدنی</a>
                            <ul class="row">
                                <li class="sublist--title"><a href="#">لوازم جانبی گوشی</a></li>
                                <li class="sublist--item"><a href="#">کیف و کاور گوشی</a></li>
                                <li class="sublist--item"><a href="#">پاور بانک (شارژر همراه)</a></li>
                                <li class="sublist--title"><a href="#">برندها</a></li>
                            </ul>
                        </li>  --}}

                    </ul>
                </li>
                @endforeach

                {{--  <li class="list-item list-item-has-children mega-menu mega-menu-col-4">
                    <a class="nav-link" href="javascript:void(0)">ابزار و اداری</a>
                    <ul class="sub-menu nav">
                        <li class="list-item list-item-has-children">
                            <a class="nav-link" href="#">عنوان دسته</a>
                            <ul class="sub-menu nav">
                                <li class="list-item">
                                    <a class="nav-link" href="#">زیر منو یک</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">زیر منو دو</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">زیر منو سه</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">زیر منو چهار</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">زیر منو پنج</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">زیر منو شش</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">زیر منو هفت</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">زیر منو هشت</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">زیر منو نه</a>
                                </li>
                            </ul>
                        </li>
                        <li class="list-item list-item-has-children">
                            <a class="nav-link" href="#">عنوان دسته</a>
                            <ul class="sub-menu nav">
                                <li class="list-item">
                                    <a class="nav-link" href="#">زیر منو یک</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">زیر منو دو</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">زیر منو سه</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">زیر منو چهار</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">زیر منو پنج</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">زیر منو شش</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">زیر منو هفت</a>
                                </li>
                            </ul>
                        </li>
                        <li class="list-item list-item-has-children">
                            <a class="nav-link" href="#">عنوان دسته</a>
                            <ul class="sub-menu nav">
                                <li class="list-item">
                                    <a class="nav-link" href="#">زیر منو یک</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">زیر منو دو</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">زیر منو سه</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">زیر منو چهار</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">زیر منو پنج</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">زیر منو شش</a>
                                </li>
                            </ul>
                        </li>
                        <li class="list-item list-item-has-children">
                            <a class="nav-link" href="#">عنوان دسته</a>
                            <ul class="sub-menu nav">
                                <li class="list-item">
                                    <a class="nav-link" href="#">زیر منو یک</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">زیر منو دو</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">زیر منو سه</a>
                                </li>
                                <li class="list-item">
                                    <a class="nav-link" href="#">زیر منو چهار</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>  --}}

                <li class="list-item">
                    <a class="nav-link" href="#">ورزش و سفر</a>
                </li>
            </ul>
            <div class="nav">
                <div class="nav-item cart--wrapper">
                    <a class="nav-link" href="#">
                        <span class="label-dropdown">سبد خرید</span>
                        <i class="mdi mdi-cart-outline"></i>
                        <span class="count">2</span>
                    </a>

                    @auth
                    @empty(auth()->user()->carts)
                    <div class="header-cart-info">
                        <div class="header-cart-info-header">
                            <a href="#" class="header-cart-info-link">
                                <span>سبد خرید شما خالی است</span>
                            </a>
                        </div>
                    </div>
                        @else
                        <div class="header-cart-info">
                            <div class="header-cart-info-header">
                                <div class="header-cart-info-count">
                                    3 کالا
                                </div>
                                <a href="#" class="header-cart-info-link">
                                    <span>مشاهده سبد خرید</span>
                                </a>
                            </div>
                            <ul class="header-basket-list do-nice-scroll">
                                @foreach (auth()->user()->carts as $item)
                                <li class="cart-item">
                                    <a href="#" class="header-basket-list-item">
                                        <div class="header-basket-list-item-image">
                                            <img src="{{ url('/upload/products/' . $item->product->image) }}" alt="">
                                        </div>
                                        <div class="header-basket-list-item-content">
                                            <p class="header-basket-list-item-title mr-2">
                                                {{ $item->product->title }}
                                            </p>
                                            <div class="header-basket-list-item-footer">
                                                <div class="header-basket-list-item-props">
                                                    <span class="header-basket-list-item-props-item mr-2">
                                                        قیمت: {{ $item->product->price }}
                                                    </span>
                                                </div>
                                                <button class="header-basket-list-item-remove">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                            {{--  <div class="header-cart-info-footer">
                                <div class="header-cart-info-total">
                                    <span class="header-cart-info-total-text">مبلغ قابل پرداخت:</span>
                                    <p class="header-cart-info-total-amount">
                                        <span class="header-cart-info-total-amount-number">
                                            9,500,000 <span>تومان</span></span>
                                    </p>
                                </div>
    
                                <div>
                                    <a href="#" class="header-cart-info-submit">
                                        ثبت سفارش
                                    </a>
                                </div>
                            </div>  --}}
                        </div>
                    @endempty

                    @else
                    <div class="header-cart-info">
                        <div class="header-cart-info-header">
                            <a href="#" class="header-cart-info-link">
                                <span>برای مشاهده سبد خرید باید وارد حساب خود شوید</span>
                            </a>
                        </div>
                    </div>
                    @endauth
                </div>
            </div>
            <button class="btn-menu">
                <div class="align align__justify">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="side-menu">
                <div class="logo-nav-res dt-sl text-center">
                    <a href="#">
                        <img src="{{ url('/front/img/logo.png') }}" alt="">
                    </a>
                </div>
                <div class="search-box-side-menu dt-sl text-center mt-2 mb-3">
                    <form action="">
                        <input type="text" name="s" placeholder="جستجو کنید...">
                        <i class="mdi mdi-magnify"></i>
                    </form>
                </div>
                <ul class="navbar-nav dt-sl">
                    <li class="sub-menu">
                        <a href="#">کالای دیجیتال</a>
                        <ul>
                            <li class="sub-menu">
                                <a href="#">عنوان دسته</a>
                                <ul>
                                    <li>
                                        <a href="#">زیر منو یک</a>
                                    </li>
                                    <li>
                                        <a href="#">زیر منو دو</a>
                                    </li>
                                    <li>
                                        <a href="#">زیر منو سه</a>
                                    </li>
                                    <li>
                                        <a href="#">زیر منو چهار</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-menu">
                                <a href="#">عنوان دسته</a>
                                <ul>
                                    <li>
                                        <a href="#">زیر منو یک</a>
                                    </li>
                                    <li>
                                        <a href="#">زیر منو دو</a>
                                    </li>
                                    <li>
                                        <a href="#">زیر منو سه</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">عنوان دسته</a>
                            </li>
                            <li>
                                <a href="#">عنوان دسته</a>
                            </li>
                            <li class="sub-menu">
                                <a href="#">عنوان دسته</a>
                                <ul>
                                    <li>
                                        <a href="#">زیر منو یک</a>
                                    </li>
                                    <li>
                                        <a href="#">زیر منو دو</a>
                                    </li>
                                    <li>
                                        <a href="#">زیر منو سه</a>
                                    </li>
                                    <li>
                                        <a href="#">زیر منو چهار</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="#">بهداشت و سلامت</a>
                        <ul>
                            <li class="sub-menu">
                                <a href="#">عنوان دسته</a>
                                <ul>
                                    <li>
                                        <a href="#">زیر منو یک</a>
                                    </li>
                                    <li>
                                        <a href="#">زیر منو دو</a>
                                    </li>
                                    <li>
                                        <a href="#">زیر منو سه</a>
                                    </li>
                                    <li>
                                        <a href="#">زیر منو چهار</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-menu">
                                <a href="#">عنوان دسته</a>
                                <ul>
                                    <li>
                                        <a href="#">زیر منو یک</a>
                                    </li>
                                    <li>
                                        <a href="#">زیر منو دو</a>
                                    </li>
                                    <li>
                                        <a href="#">زیر منو سه</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">عنوان دسته</a>
                            </li>
                            <li>
                                <a href="#">عنوان دسته</a>
                            </li>
                            <li class="sub-menu">
                                <a href="#">عنوان دسته</a>
                                <ul>
                                    <li>
                                        <a href="#">زیر منو یک</a>
                                    </li>
                                    <li>
                                        <a href="#">زیر منو دو</a>
                                    </li>
                                    <li>
                                        <a href="#">زیر منو سه</a>
                                    </li>
                                    <li>
                                        <a href="#">زیر منو چهار</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="#">ابزار و اداری</a>
                        <ul>
                            <li class="sub-menu">
                                <a href="#">عنوان دسته</a>
                                <ul>
                                    <li>
                                        <a href="#">زیر منو یک</a>
                                    </li>
                                    <li>
                                        <a href="#">زیر منو دو</a>
                                    </li>
                                    <li>
                                        <a href="#">زیر منو سه</a>
                                    </li>
                                    <li>
                                        <a href="#">زیر منو چهار</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-menu">
                                <a href="#">عنوان دسته</a>
                                <ul>
                                    <li>
                                        <a href="#">زیر منو یک</a>
                                    </li>
                                    <li>
                                        <a href="#">زیر منو دو</a>
                                    </li>
                                    <li>
                                        <a href="#">زیر منو سه</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">عنوان دسته</a>
                            </li>
                            <li>
                                <a href="#">عنوان دسته</a>
                            </li>
                            <li class="sub-menu">
                                <a href="#">عنوان دسته</a>
                                <ul>
                                    <li>
                                        <a href="#">زیر منو یک</a>
                                    </li>
                                    <li>
                                        <a href="#">زیر منو دو</a>
                                    </li>
                                    <li>
                                        <a href="#">زیر منو سه</a>
                                    </li>
                                    <li>
                                        <a href="#">زیر منو چهار</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">مد و پوشاک</a>
                    </li>
                    <li>
                        <a href="#">خانه و آشپزخانه</a>
                    </li>
                    <li>
                        <a href="#">ورزش و سفر</a>
                    </li>
                </ul>
            </div>
            <div class="overlay-side-menu">
            </div>
        </nav>
        <!-- End Main-Menu -->
    </div>
</div>
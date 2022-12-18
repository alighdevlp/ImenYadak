<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
<aside class="app-sidebar sidebar-scroll">
    <div class="main-sidebar-header active">
        <a class="desktop-logo logo-light active" href="index.html"><img src="{{ url('/back/img/brand/logo.png') }}"
                class="main-logo" alt="logo"></a>
        <a class="desktop-logo logo-dark active" href="index.html"><img src="{{ url('/back/img/brand/logo-white.png') }}"
                class="main-logo dark-theme" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-light active" href="index.html"><img
                src="{{ url('/back/img/brand/favicon.png') }}" class="logo-icon" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-dark active" href="index.html"><img
                src="{{ url('/back/img/brand/favicon-white.png') }}" class="logo-icon dark-theme" alt="logo"></a>
    </div>
    <div class="main-sidemenu">
        <div class="app-sidebar__user clearfix">
            <div class="dropdown user-pro-body">
                <div class="">
                    <img alt="user-img" class="avatar avatar-xl brround"
                        src="{{ url('/upload/users/' . auth()->user()->profile) }}"><span
                        class="avatar-status profile-status bg-green"></span>
                </div>
                <div class="user-info">
                    <h4 class="fw-semibold mt-3 mb-0">{{ auth()->user()->name }}</h4>
                    <span class="mb-0 text-muted">مدیریت</span>
                </div>
            </div>
        </div>
        <ul class="side-menu">
            <li class="side-item side-item-category">اصلی</li>
            <li class="slide">
                <a class="side-menu__item" href="{{ route('admin.dashboard.index') }}"><svg
                        xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3" />
                        <path
                            d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z" />
                    </svg><span class="side-menu__label">صفحه اصلی</span></a>
                {{--  <span class="badge bg-success text-light"
                        id="bg-side-text">1</span>  --}}
            </li>

            <li class="side-item side-item-category">تنظیمات وب سایت</li>
            <li class="slide">
                <a class="side-menu__item" href="{{ route('admin.options.index') }}"><svg
                        xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3" />
                        <path
                            d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z" />
                    </svg><span class="side-menu__label">اپشن</span></a>
            </li>

            {{--  Start Public Li  --}}
            <li class="side-item side-item-category">عمومی</li>

            {{--  Start Users  --}}
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg"
                        class="side-menu__icon" viewBox="0 0 24 24">
                        <path
                            d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                    </svg><span class="side-menu__label">کاربران</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a href="{{ route('admin.users.index') }}" class="slide-item" href="chart-morris.html">لیست
                            کاربران</a></li>
                </ul>
            </li>
            {{--  End Users  --}}

            {{--  Start Menus  --}}
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg"
                        class="side-menu__icon" viewBox="0 0 24 24">
                        <path
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg><span class="side-menu__label">منو</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a href="{{ route('admin.menus.index') }}" class="slide-item" href="chart-morris.html">لیست
                            منوها</a></li>
                    <li><a href="{{ route('admin.menus.create') }}" class="slide-item" href="chart-flot.html">ایجاد
                            منو</a></li>
                </ul>
            </li>
            {{--  End Menus  --}}

            {{--  Start MenuCategories  --}}
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="###"><svg xmlns="http://www.w3.org/2000/svg"
                        class="side-menu__icon" viewBox="0 0 24 24">
                        <path
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg><span class="side-menu__label">دسته بندی منو</span><i
                        class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a href="{{ route('admin.menucategories.index') }}" class="slide-item"
                            href="chart-morris.html">لیست
                            دسته بندی های منو</a></li>
                    <li><a href="{{ route('admin.menucategories.create') }}" class="slide-item"
                            href="chart-flot.html">ایجاد
                            دسته بندی منو</a></li>
                </ul>
            </li>
            {{--  End MenuCategories  --}}

            {{--  Start ItemCategories  --}}
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="###"><svg
                        xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg><span class="side-menu__label">ایتم منو</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a href="{{ route('admin.menuitems.index') }}" class="slide-item"
                            href="chart-morris.html">لیست
                            ایتم های منو</a></li>
                    <li><a href="{{ route('admin.menuitems.create') }}" class="slide-item"
                            href="chart-flot.html">ایجاد
                            ایتم منو</a></li>
                </ul>
            </li>
            {{--  End ItemCategories  --}}

            {{--  Start Categories  --}}
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="###"><svg
                        xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg><span class="side-menu__label">دسته بندی</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a href="{{ route('admin.categories.index') }}" class="slide-item"
                            href="chart-morris.html">لیست
                            دسته بندی ها</a></li>
                    <li><a href="{{ route('admin.categories.create') }}" class="slide-item"
                            href="chart-flot.html">ایجاد
                            دسته بندی</a></li>
                </ul>
            </li>
            {{--  End Categories  --}}

            {{--  Start Products  --}}
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="###"><svg
                        xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path
                            d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"
                            d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z" />
                    </svg><span class="side-menu__label">محصول</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a href="{{ route('admin.products.index') }}" class="slide-item"
                            href="chart-morris.html">لیست
                            محصولات</a></li>
                    <li><a href="{{ route('admin.products.create') }}" class="slide-item"
                            href="chart-flot.html">ایجاد
                            محصول</a></li>
                </ul>
            </li>
            {{--  End Products  --}}

            {{--  Start Comments  --}}
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="###"><svg
                        xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path
                            d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z" />
                    </svg><span class="side-menu__label">نظر</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a href="{{ route('admin.comments.index') }}" class="slide-item"
                            href="chart-morris.html">لیست
                            نظرات</a></li>
                </ul>
            </li>
            {{--  End Comments  --}}

            {{--  Start Orders  --}}
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="###"><svg
                        xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path
                            d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z" />
                    </svg><span class="side-menu__label">سفارش</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a href="{{ route('admin.orders.index') }}" class="slide-item"
                            href="chart-morris.html">لیست
                            سفارشات</a></li>
                </ul>
            </li>
            {{--  End Orders  --}}

            {{--  Start Sliders  --}}
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="###"><svg
                        xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M0 10.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1H3V1.5a.5.5 0 0 0-1 0V10H.5a.5.5 0 0 0-.5.5ZM2.5 12a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 1 0v-2a.5.5 0 0 0-.5-.5Zm3-6.5A.5.5 0 0 0 6 6h1.5v8.5a.5.5 0 0 0 1 0V6H10a.5.5 0 0 0 0-1H6a.5.5 0 0 0-.5.5ZM8 1a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 1 0v-2A.5.5 0 0 0 8 1Zm3 9.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1H14V1.5a.5.5 0 0 0-1 0V10h-1.5a.5.5 0 0 0-.5.5Zm2.5 1.5a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 1 0v-2a.5.5 0 0 0-.5-.5Z" />
                    </svg><span class="side-menu__label">اسلایدر</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a href="{{ route('admin.sliders.index') }}" class="slide-item"
                            href="chart-morris.html">لیست
                            اسلایدرها</a></li>
                    <li><a href="{{ route('admin.sliders.create') }}" class="slide-item"
                            href="chart-flot.html">ایجاد
                            اسلاید</a></li>
                </ul>
            </li>
            {{--  End Sliders  --}}

            {{--  Start Banners  --}}
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="###"><svg
                        xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
                    </svg><span class="side-menu__label">بنر</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a href="{{ route('admin.banners.index') }}" class="slide-item"
                            href="chart-morris.html">لیست
                            بنرها</a></li>
                    <li><a href="{{ route('admin.banners.create') }}" class="slide-item"
                            href="chart-flot.html">ایجاد
                            بنر</a></li>
                </ul>
            </li>
            {{--  End Sliders  --}}

            {{--  Start Banners  --}}
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="###"><svg
                        xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path
                            d="M3 2v4.586l7 7L14.586 9l-7-7H3zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2z" />
                        <path
                            d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z" />
                    </svg><span class="side-menu__label">برند</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a href="{{ route('admin.brands.index') }}" class="slide-item" href="chart-morris.html">لیست
                            برندها</a></li>
                    <li><a href="{{ route('admin.brands.create') }}" class="slide-item" href="chart-flot.html">ایجاد
                            برند</a></li>
                </ul>
            </li>
            {{--  End Brands  --}}

            {{--  Start Attributes  --}}
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="###"><svg
                        xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path
                            d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zM0 12a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm7-1.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zM3 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm0 4.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                    </svg><span class="side-menu__label">ویژگی</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a href="{{ route('admin.attributes.index') }}" class="slide-item"
                            href="chart-morris.html">لیست
                            ویژگی ها</a></li>
                    <li><a href="{{ route('admin.attributes.create') }}" class="slide-item"
                            href="chart-flot.html">ایجاد
                            ویژگی</a></li>
                </ul>
            </li>
            {{--  End Attributes  --}}

            {{--  Start Medias  --}}
            {{--  <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="###"><svg
                        xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path
                            d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z" />
                    </svg><span class="side-menu__label">رسانه</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a href="{{ route('admin.medias.index') }}" class="slide-item" href="chart-morris.html">لیست
                            رسانه ها</a></li>
                    <li><a href="{{ route('admin.medias.create') }}" class="slide-item" href="chart-flot.html">ایجاد
                            رسانه</a></li>
                </ul>
            </li>  --}}
            {{--  End Medias  --}}

            {{--  End Public Li  --}}

        </ul>
    </div>
</aside>

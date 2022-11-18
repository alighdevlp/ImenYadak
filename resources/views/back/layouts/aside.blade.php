<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
<aside class="app-sidebar sidebar-scroll">
    <div class="main-sidebar-header active">
        <a class="desktop-logo logo-light active" href="index.html"><img src="{{ url('/back/img/brand/logo.png') }}"
                class="main-logo" alt="logo"></a>
        <a class="desktop-logo logo-dark active" href="index.html"><img src="{{ url('/back/img/brand/logo-white.png') }}"
                class="main-logo dark-theme" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-light active" href="index.html"><img src="{{ url('/back/img/brand/favicon.png') }}"
                class="logo-icon" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-dark active" href="index.html"><img
                src="{{ url('/back/img/brand/favicon-white.png') }}" class="logo-icon dark-theme" alt="logo"></a>
    </div>
    <div class="main-sidemenu">
        <div class="app-sidebar__user clearfix">
            <div class="dropdown user-pro-body">
                <div class="">
                    <img alt="user-img" class="avatar avatar-xl brround" src="{{ url('/upload/users/'.auth()->user()->profile) }}"><span
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
                <a class="side-menu__item" href="{{ route('admin.dashboard.index') }}"><svg xmlns="http://www.w3.org/2000/svg"
                        class="side-menu__icon" viewBox="0 0 24 24">
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

            {{--  Start Menu  --}}
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
            {{--  End Menu  --}}

            {{--  Start MenuCategory  --}}
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="###"><svg xmlns="http://www.w3.org/2000/svg"
                        class="side-menu__icon" viewBox="0 0 24 24">
                        <path
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg><span class="side-menu__label">دسته بندی منو</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a href="{{ route('admin.menucategories.index') }}" class="slide-item" href="chart-morris.html">لیست
                             دسته بندی های منو</a></li>
                    <li><a href="{{ route('admin.menucategories.create') }}" class="slide-item" href="chart-flot.html">ایجاد
                            دسته بندی منو</a></li>
                </ul>
            </li>
            {{--  End MenuCategory  --}}

            {{--  Start ItemCategory  --}}
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="###"><svg xmlns="http://www.w3.org/2000/svg"
                        class="side-menu__icon" viewBox="0 0 24 24">
                        <path
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg><span class="side-menu__label">ایتم منو</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a href="{{ route('admin.menuitems.index') }}" class="slide-item" href="chart-morris.html">لیست
                             ایتم های منو</a></li>
                    <li><a href="{{ route('admin.menuitems.create') }}" class="slide-item" href="chart-flot.html">ایجاد
                            ایتم منو</a></li>
                </ul>
            </li>
            {{--  End ItemCategory  --}}

            {{--  End Public Li  --}}

        </ul>
    </div>
</aside>

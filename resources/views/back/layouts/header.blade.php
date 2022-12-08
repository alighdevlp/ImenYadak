<div class="main-header sticky side-header nav nav-item">
    <div class="container-fluid">
        <div class="main-header-left ">
            <div class="responsive-logo">
                <a href="index.html"><img src="{{ url('/back/img/brand/logo.png') }}" class="logo-1" alt="لوگو"></a>
                <a href="index.html"><img src="{{ url('/back/img/brand/logo-white.png') }}" class="dark-logo-1" alt="لوگو"></a>
                <a href="index.html"><img src="{{ url('/back/img/brand/favicon.png') }}" class="logo-2" alt="لوگو"></a>
                <a href="index.html"><img src="{{ url('/back/img/brand/favicon.png') }}" class="dark-logo-2" alt="لوگو"></a>
            </div>
            <div class="app-sidebar__toggle" data-bs-toggle="sidebar">
                <a class="open-toggle" href="#"><i class="header-icon fe fe-align-left"></i></a>
                <a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
            </div>
            <div class="main-header-center mr-3 d-sm-none d-md-none d-lg-block">
                <input class="form-control" placeholder="هر چیزی را جستجو کنید یس..." type="search">
                <button class="btn"><i class="fas fa-search d-none d-md-block"></i></button>
            </div>
        </div>
        <div class="main-header-right">
            <div class="nav nav-item  navbar-nav-right ml-auto">
                {{--  Start Search Box  --}}
                <div class="nav-link" id="bs-example-navbar-collapse-1">
                    <form class="navbar-form" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="جستجو کردن">
                            <span class="input-group-btn">
                                <button type="reset" class="btn btn-default">
                                    <i class="fas fa-times"></i>
                                </button>
                                <button type="submit" class="btn btn-default nav-link resp-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
                {{--  End Search Box  --}}



                <div class="dropdown nav-item main-header-message ">
                    <a class="new nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg"
                            class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                            </path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg><span class=" pulse-danger"></span></a>
                    <div class="dropdown-menu">
                        <div class="menu-header-content bg-primary text-right">
                            <div class="d-flex">
                                <h6 class="dropdown-title mb-1 tx-15 text-white font-weight-semibold">پیام
                                    ها</h6>
                                {{--  <span class="badge rounded-pill bg-warning ms-auto my-auto float-end">علامت
                                    گذاری همه</span>  --}}
                            </div>
                            @if($count_unread_comments > 0)
                            <p class="dropdown-title-text subtext mb-0 text-white op-6 pb-0 tx-12 ">شما {{ $count_unread_comments }}
                                پیام خوانده نشده دارید</p>                                
                            @endif
                        </div>
                        <div class="main-message-list chat-scroll">

                            @foreach ($un_comments as $item)
                            <a href="{{ route('admin.comments.show',$item->id) }}" class="p-3 d-flex border-bottom">
                                <div class="  drop-img  cover-image  " data-bs-image-src="{{ url('/upload/users/' . $item->profile) }}">
                                    <span class="avatar-status bg-teal"></span>
                                </div>
                                <div class="wd-90p">
                                    <div class="d-flex">
                                        <h5 class="mb-1 name">{{ $item->name }}</h5>
                                    </div>
                                    <p class="mb-0 desc">{{ str()->limit($item->message, 60) }}</p>
                                    <p class="time mb-0 text-left float-right mr-2 mt-2">{{ jdate()->forge('today')->format('%A, %d %B %Y') }}</p>
                                </div>
                            </a>
                            @endforeach

                        </div>
                        <div class="text-center dropdown-footer">
                            <a href="{{ route('admin.comments.index') }}">مشاهده همه</a>
                        </div>
                    </div>
                </div>

                <div class="dropdown nav-item main-header-notification">
                    <a class="new nav-link" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg><span class=" pulse"></span></a>
                    <div class="dropdown-menu">
                        <div class="menu-header-content bg-primary text-right">
                            <div class="d-flex">
                                <h6 class="dropdown-title mb-1 tx-15 text-white font-weight-semibold">
                                    اطلاعیه</h6>
                                {{--  <span class="badge rounded-pill bg-warning ms-auto my-auto float-end">علامت
                                    گذاری همه</span>  --}}
                            </div>
                            <p class="dropdown-title-text subtext mb-0 text-white op-6 pb-0 tx-12 ">شما 4
                                اعلان خوانده نشده دارید</p>
                        </div>
                        <div class="main-notification-list Notification-scroll">
                            <a class="d-flex p-3 border-bottom" href="#">
                                <div class="notifyimg bg-pink">
                                    <i class="la la-file-alt text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="notification-label mb-1">پرونده های جدید موجود است</h5>
                                    <div class="notification-subtext">10 ساعت پیش</div>
                                </div>
                                <div class="mr-auto">
                                    <i class="las la-angle-left text-left text-muted"></i>
                                </div>
                            </a>
                            <a class="d-flex p-3" href="#">
                                <div class="notifyimg bg-purple">
                                    <i class="la la-gem text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="notification-label mb-1">به روزرسانی های موجود</h5>
                                    <div class="notification-subtext">2 روز قبل</div>
                                </div>
                                <div class="mr-auto">
                                    <i class="las la-angle-left text-left text-muted"></i>
                                </div>
                            </a>
                            <a class="d-flex p-3 border-bottom" href="#">
                                <div class="notifyimg bg-success">
                                    <i class="la la-shopping-basket text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="notification-label mb-1">سفارش جدید دریافت شد</h5>
                                    <div class="notification-subtext">1 ساعت پیش</div>
                                </div>
                                <div class="mr-auto">
                                    <i class="las la-angle-left text-left text-muted"></i>
                                </div>
                            </a>
                            <a class="d-flex p-3 border-bottom" href="#">
                                <div class="notifyimg bg-warning">
                                    <i class="la la-envelope-open text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="notification-label mb-1">بررسی جدید دریافت شد</h5>
                                    <div class="notification-subtext">1 روز پیش</div>
                                </div>
                                <div class="mr-auto">
                                    <i class="las la-angle-left text-left text-muted"></i>
                                </div>
                            </a>
                            <a class="d-flex p-3 border-bottom" href="#">
                                <div class="notifyimg bg-danger">
                                    <i class="la la-user-check text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="notification-label mb-1">22 ثبت نام تایید شده</h5>
                                    <div class="notification-subtext">2 ساعت پیش</div>
                                </div>
                                <div class="mr-auto">
                                    <i class="las la-angle-left text-left text-muted"></i>
                                </div>
                            </a>
                            <a class="d-flex p-3 border-bottom" href="#">
                                <div class="notifyimg bg-primary">
                                    <i class="la la-check-circle text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="notification-label mb-1">پروژه تصویب شده است</h5>
                                    <div class="notification-subtext">4 ساعت پیش</div>
                                </div>
                                <div class="mr-auto">
                                    <i class="las la-angle-left text-left text-muted"></i>
                                </div>
                            </a>
                        </div>
                        <div class="dropdown-footer">
                            <a href="#">مشاهده همه</a>
                        </div>
                    </div>
                </div>

                <div class="nav-item full-screen fullscreen-button">
                    <a class="new nav-link full-screen-link" href="#"><svg xmlns="http://www.w3.org/2000/svg"
                            class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3">
                            </path>
                        </svg></a>
                </div>

                <div class="dropdown main-profile-menu nav nav-item nav-link">
                    <a class="profile-user d-flex" href="javascriptvoid(0)"><img alt=""
                            src="{{ url('/upload/users/' . auth()->user()->profile) }}"></a>
                    <div class="dropdown-menu">
                        <div class="main-header-profile bg-primary p-3">
                            <div class="d-flex wd-100p">
                                <div class="main-img-user"><img alt=""
                                        src="{{ url('/upload/users/' . auth()->user()->profile) }}" class="">
                                </div>
                                <div class="ms-3 my-auto">
                                    <h6>{{ auth()->user()->name }}</h6><span>مدیریت</span>
                                </div>
                            </div>
                        </div>
                        <a class="dropdown-item" href="{{ route('admin.profile.index') }}"><i
                                class="bx bx-user-circle"></i>مشخصات</a>
                        <a class="dropdown-item" href="{{ route('admin.profile.edit') }}"><i class="bx bx-edit"></i>
                            ویرایش پروفایل</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"><i class="bx bx-log-out"></i> خروج
                            از سیستم</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

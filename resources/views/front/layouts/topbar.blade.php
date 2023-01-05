<div class="container main-container">
    <div class="topbar dt-sl">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-6">
                <div class="logo-area">
                    <a href="#">
                        <img src="{{ url('/front/img/logo.png') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-5 hidden-sm">
                <div class="search-area dt-sl">
                    <form action="{{ route('search') }}" class="search" method="GET">
                        <input type="text" name="search" placeholder="نام کالا مورد نظر خودرا جستجو کنید ...">
                        <i class="far fa-search search-icon"></i>
                        {{--  <button class="close-search-result" type="button"><i
                                class="mdi mdi-close"></i></button>
                        <div class="search-result">
                            <ul>
                                <li>
                                    <a href="#">موبایل</a>
                                </li>
                                <li>
                                    <a href="#">مد و پوشاک</a>
                                </li>
                                <li>
                                    <a href="#">میکروفن</a>
                                </li>
                                <li>
                                    <a href="#">میز تلویزیون</a>
                                </li>
                            </ul>
                        </div>  --}}
                    </form>
                </div>
            </div>

            <div class="col-md-4 col-6 topbar-left">
                <ul class="nav float-left">
                    <li class="nav-item account dropdown">
                        <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span class="label-dropdown">حساب کاربری</span>
                            <i class="mdi mdi-account-circle-outline"></i>
                        </a>
                        @auth
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-left">
                            <a class="dropdown-item" href="{{ route('account.index') }}">
                                <i class="mdi mdi-account-card-details-outline"></i>پروفایل
                            </a>

                            {{--  <a class="dropdown-item" href="#">
                                <span class="float-left badge badge-dark">۴</span>
                                <i class="mdi mdi-comment-text-outline"></i>پیغام ها
                            </a>  --}}
                            
                            <a class="dropdown-item" href="{{ route('account.edit') }}">
                                <i class="mdi mdi-account-edit-outline"></i>ویرایش حساب کاربری
                            </a>
                            <div class="dropdown-divider" role="presentation"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}">
                                <i class="mdi mdi-logout-variant"></i>خروج
                            </a>
                        </div>
                        @else
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-left">
                            <a class="dropdown-item" href="{{ route('login') }}">
                                <i class="mdi mdi-login-variant"></i>ورود
                            </a>
                            <a class="dropdown-item" href="{{ route('register') }}">
                                <i class="mdi mdi-account-outline"></i>ثبت نام
                            </a>
                        </div>
                        @endauth
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
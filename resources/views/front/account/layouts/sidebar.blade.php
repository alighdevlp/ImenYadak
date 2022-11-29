<div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 sticky-sidebar">
    <div class="profile-sidebar dt-sl">
        <div class="dt-sl dt-sn border mb-3">
            <div class="profile-sidebar-header dt-sl">
                <div class="d-flex align-items-center">
                    <div class="profile-avatar">
                        <img src="{{ url('/upload/users/' . auth()->user()->profile) }}" alt="پروفایل">
                    </div>
                    <div class="profile-header-content mr-3 mt-2">
                        <span class="d-block profile-username">{{ auth()->user()->name }}</span>
                        <span class="d-block profile-phone">{{ auth()->user()->phone }}</span>
                    </div>
                </div>
                <div class="profile-point mt-3 mb-2 dt-sl">
                    <span class="label-profile-point">امتیاز شما:</span>
                    <span class="float-left value-profile-point">{{ auth()->user()->score }}</span>
                </div>
                <div class="profile-link mt-2 dt-sl">
                    <div class="row">
                        {{--  <div class="col-6 text-center">
                            <a href="#">
                                <i class="mdi mdi-lock-reset"></i>
                                <span class="d-block">تغییر رمز</span>
                            </a>
                        </div>  --}}
                        <div class="col-12 text-center">
                            <a href="{{ route('logout') }}">
                                <i class="mdi mdi-logout-variant"></i>
                                <span class="d-block">خروج از حساب</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dt-sl dt-sn mb-3 text-center">
            <a href="#">
                <img src="./assets/img/banner/sidebar-banner-3.jpg" class="img-fluid" alt="">
            </a>
        </div>
        <div class="dt-sl dt-sn border mb-3">
            <div class="profile-menu-section dt-sl">
                <div class="label-profile-menu mt-2 mb-2">
                    <span>حساب کاربری شما</span>
                </div>
                <div class="profile-menu">
                    <ul>
                        <li>
                            <a href="{{ route('account.index') }}" class="active">
                                <i class="mdi mdi-account-circle-outline"></i>
                                پروفایل
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('account.order') }}">
                                <i class="mdi mdi-basket"></i>
                                همه سفارش ها
                            </a>
                        </li>

                        {{--  <li>
                            <a href="#">
                                <i class="mdi mdi-backburger"></i>
                                درخواست مرجوعی
                            </a>
                        </li>  --}}

                        {{--  <li>
                            <a href="#">
                                <i class="mdi mdi-heart-outline"></i>
                                لیست علاقمندی ها
                            </a>
                        </li>  --}}

                        {{--  <li>
                            <a href="#">
                                <i class="mdi mdi-glasses"></i>
                                نقد و نظرات
                            </a>
                        </li>  --}}

                        {{--  <li>
                            <a href="#">
                                <i class="mdi mdi-sign-direction"></i>
                                آدرس ها
                            </a>
                        </li>  --}}

                        {{--  <li>
                            <a href="#">
                                <i class="mdi mdi-eye-outline"></i>
                                بازدیدهای اخیر
                            </a>
                        </li>  --}}

                        {{--  <li>
                            <a href="#">
                                <i class="mdi mdi-account-edit-outline"></i>
                                اطلاعات شخصی
                            </a>
                        </li>  --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

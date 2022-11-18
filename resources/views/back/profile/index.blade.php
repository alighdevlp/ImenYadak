@extends('back.layouts.master')

@section('title', 'پروفایل')

@section('breadcrumb')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <a href="{{ route('admin.dashboard.index') }}">
                    <h4 class="content-title mb-0 my-auto">داشبورد</h4>
                </a>
                <span class="text-muted mt-1 tx-13 ms-2 mb-0">/ پروفایل</span>
            </div>
        </div>
    </div>
@endsection


@section('content')
<div class="row row-sm">
    <div class="col-lg-4">
        <div class="card mg-b-20">
            <div class="card-body">
                <div class="pl-0">
                    <div class="main-profile-overview">
                        <div class="main-img-user profile-user">
                            <img alt="" src="{{ url('/upload/users/'.auth()->user()->profile) }}"><a class="fas fa-camera profile-edit"></a>
                        </div>
                        <div class="d-flex justify-content-between mg-b-20">
                            <div>
                                <h5 class="main-profile-name">{{ auth()->user()->name }}</h5>
                                <p class="main-profile-name-text">مدیر</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col mb20">
                                <h5>{{ auth()->user()->score }}</h5>
                                <h6 class="text-small text-muted mb-0">امتیاز</h6>
                            </div>
                            <div class="col-md-4 col mb20">
                                <h5>583</h5>
                                <h6 class="text-small text-muted mb-0">توییت ها</h6>
                            </div>
                            <div class="col-md-4 col mb20">
                                <h5>48</h5>
                                <h6 class="text-small text-muted mb-0">نوشته ها</h6>
                            </div>
                        </div>

                        <hr class="mg-y-30">                 
                        <label class="main-content-label tx-13 mg-b-20">اطلاعات</label>
                        <div class="main-profile-social-list">
                            <div class="media">
                                <div class="media-icon bg-primary-transparent text-primary">
                                    <i class="icon ion-md-call"></i>
                                </div>
                                <div class="media-body">
                                    <span>شماره تماس </span> <a href="#">{{ auth()->user()->phone }}</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-icon bg-success-transparent text-success">
                                    <i class="icon ion-md-mail"></i>
                                </div>
                                <div class="media-body">
                                    <span>ایمیل </span> <a href="#">{{ auth()->user()->email }}</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="row row-sm">
            <div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
                <div class="card ">
                    <div class="card-body">
                        <div class="counter-status d-flex md-mb-0">
                            <div class="counter-icon bg-primary-transparent">
                                <i class="icon-layers text-primary"></i>
                            </div>
                            <div class="ms-auto">
                                <h5 class="tx-13">سفارشات</h5>
                                <h2 class="mb-0 tx-22 mb-1 mt-1">1،587</h2>
                                <p class="text-muted mb-0 tx-11"><i
                                        class="si si-arrow-up-circle text-success mr-1"></i> افزایش دادن </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
                <div class="card ">
                    <div class="card-body">
                        <div class="counter-status d-flex md-mb-0">
                            <div class="counter-icon bg-danger-transparent">
                                <i class="icon-paypal text-danger"></i>
                            </div>
                            <div class="ms-auto">
                                <h5 class="tx-13">درآمد</h5>
                                <h2 class="mb-0 tx-22 mb-1 mt-1">46،782</h2>
                                <p class="text-muted mb-0 tx-11"><i
                                        class="si si-arrow-up-circle text-success mr-1"></i> افزایش دادن </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
                <div class="card ">
                    <div class="card-body">
                        <div class="counter-status d-flex md-mb-0">
                            <div class="counter-icon bg-success-transparent">
                                <i class="icon-rocket text-success"></i>
                            </div>
                            <div class="ms-auto">
                                <h5 class="tx-13">محصولات</h5>
                                <h2 class="mb-0 tx-22 mb-1 mt-1">1890</h2>
                                <p class="text-muted mb-0 tx-11"><i
                                        class="si si-arrow-up-circle text-success mr-1"></i> افزایش دادن </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="tabs-menu ">
                    <!-- Tabs -->
                    <ul class="nav nav-tabs profile navtab-custom panel-tabs">
                        <li class="active">
                            <a href="#home" data-toggle="tab" aria-expanded="true"> <span class="visible-xs"><i
                                        class="las la-user-circle tx-16 mr-1"></i></span> <span
                                    class="hidden-xs">محصولات</span> </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content border-left border-bottom border-right border-top-0 p-4">
                    <div class="tab-pane active" id="profile">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="border p-1 card thumb">
                                    <a href="#" class="image-popup" title="تصویر -2"> <img
                                            src="{{ url('/upload/users/'.auth()->user()->profile) }}" class="thumb-img" alt="کار-تصویر کوچک">
                                    </a>
                                    <h4 class="text-center tx-14 mt-3 mb-0">تصویر گالری</h4>
                                    <div class="ga-border"></div>
                                    <p class="text-muted text-center"><small>عکاسی</small></p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class=" border p-1 card thumb">
                                    <a href="#" class="image-popup" title="تصویر -2"> <img
                                            src="assets/img/photos/8.jpg" class="thumb-img" alt="کار-تصویر کوچک">
                                    </a>
                                    <h4 class="text-center tx-14 mt-3 mb-0">تصویر گالری</h4>
                                    <div class="ga-border"></div>
                                    <p class="text-muted text-center"><small>عکاسی</small></p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class=" border p-1 card thumb">
                                    <a href="#" class="image-popup" title="تصویر -2"> <img
                                            src="assets/img/photos/9.jpg" class="thumb-img" alt="کار-تصویر کوچک">
                                    </a>
                                    <h4 class="text-center tx-14 mt-3 mb-0">تصویر گالری</h4>
                                    <div class="ga-border"></div>
                                    <p class="text-muted text-center"><small>عکاسی</small></p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class=" border p-1 card thumb  mb-xl-0">
                                    <a href="#" class="image-popup" title="تصویر -2"> <img
                                            src="assets/img/photos/10.jpg" class="thumb-img" alt="کار-تصویر کوچک">
                                    </a>
                                    <h4 class="text-center tx-14 mt-3 mb-0">تصویر گالری</h4>
                                    <div class="ga-border"></div>
                                    <p class="text-muted text-center"><small>عکاسی</small></p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class=" border p-1 card thumb  mb-xl-0">
                                    <a href="#" class="image-popup" title="تصویر -2"> <img
                                            src="assets/img/photos/6.jpg" class="thumb-img" alt="کار-تصویر کوچک">
                                    </a>
                                    <h4 class="text-center tx-14 mt-3 mb-0">تصویر گالری</h4>
                                    <div class="ga-border"></div>
                                    <p class="text-muted text-center"><small>عکاسی</small></p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class=" border p-1 card thumb  mb-xl-0">
                                    <a href="#" class="image-popup" title="تصویر -2"> <img
                                            src="assets/img/photos/5.jpg" class="thumb-img" alt="کار-تصویر کوچک">
                                    </a>
                                    <h4 class="text-center tx-14 mt-3 mb-0">تصویر گالری</h4>
                                    <div class="ga-border"></div>
                                    <p class="text-muted text-center"><small>عکاسی</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

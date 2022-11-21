@extends('back.layouts.master')

@section('title', 'ویرایش پروفایل')

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
        <!-- Col -->
        <div class="col-lg-4">
            <div class="card mg-b-20">
                <div class="card-body">
                    <div class="pl-0">
                        <div class="main-profile-overview">
                            <div class="main-img-user profile-user">
                                <img alt="" src="{{ url('/upload/users/' . auth()->user()->profile) }}"><a
                                    class="fas fa-camera profile-edit"></a>
                            </div>
                            <div class="d-flex justify-content-between mg-b-20">
                                <div>
                                    <h5 class="main-profile-name">{{ auth()->user()->name }}</h5>
                                    <p class="main-profile-name-text">مدیر</p>
                                </div>
                            </div>

                            {{--  <h6>بیوگرافی</h6>
                            <div class="main-profile-bio">
                                لذت منطقی روبرو می شود ، اما به دنبال عواقبی است که بسیار دردناک است. عواقبی که در آن زحمت و
                                درد می تواند لذت بزرگی برای او فراهم کند .. <a href="#">بیشتر</a>
                            </div>  --}}

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
                            <label class="main-content-label tx-13 mg-b-20">اجتماعی</label>
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

        {{--  Start Information  --}}
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4 main-content-label">اطلاعات شخصی</div>
                    <form action="{{ route('admin.profile.update') }}" class="form-horizontal" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4 main-content-label">نام</div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">نام کاربری</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="نام کاربری"
                                        value="{{ auth()->user()->name }}">
                                        @error('name')                                            
                                        <div class="text-danger mt-1">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">شماره تماس</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="شماره تماس"
                                        value="{{ auth()->user()->phone }}">
                                        @error('phone')                                            
                                        <div class="text-danger mt-1">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">ایمیل</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="پست الکترونیک"
                                        value="{{ auth()->user()->email }}">
                                        @error('email')                                            
                                        <div class="text-danger mt-1">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">رمز عبور</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="password" name="password" class="form-control" placeholder="رمز عبور">
                                </div>
                            </div>
                        </div>

                </div>
                    <div class="card-footer text-left">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">بروزرسانی پروفایل</button>
                    </div>
                </form>
            </div>
        </div>
        {{--  End Information  --}}
    </div>
@endsection

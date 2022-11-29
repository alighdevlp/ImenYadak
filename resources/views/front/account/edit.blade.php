@extends('front.layouts.master')

@section('title', 'ویرایش پروفایل')

@section('content')
    <div class="row">
        {{-- Start Sidebar --}}
        @include('front.account.layouts.sidebar')
        {{-- End Sidebar --}}

        {{--  Start Content  --}}
        <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12">
            <div class="row">
                <div class="col-12">
                    <div class="px-3 px-res-0">
                        <div class="section-title text-sm-title title-wide mb-1 no-after-title-wide dt-sl mb-2 px-res-1">
                            <h2>ویرایش اطلاعات شخصی</h2>
                        </div>
                        <div class="form-ui additional-info dt-sl dt-sn pt-4">
                            <form action="{{ route('account.update') }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-row-title">
                                            <h3>نام</h3>
                                        </div>
                                        <div class="form-row">
                                            <input type="text" name="name" class="form-control input-ui pr-2"
                                                placeholder="نام خود را وارد نمایید" value="{{ auth()->user()->name }}">
                                            @error('name')
                                                <div class="text-danger mt-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-row-title">
                                            <h3>نام خانوادگی</h3>
                                        </div>
                                        <div class="form-row">
                                            <input type="text" name="family" class="input-ui pl-2 text-right dir-rtl"
                                                placeholder="نام خانوادگی خود را وارد نمایید"
                                                value="{{ auth()->user()->name }}">
                                            @error('family')
                                                <div class="text-danger mt-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-row-title">
                                            <h3>ایمیل</h3>
                                        </div>
                                        <div class="form-row">
                                            <input type="email" name="email" class="input-ui pl-2 text-right dir-rtl"
                                                placeholder="ایمیل خود را وارد نمایید" value="{{ auth()->user()->email }}">
                                            @error('email')
                                                <div class="text-danger mt-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-row-title">
                                            <h3>شماره موبایل</h3>
                                        </div>
                                        <div class="form-row">
                                            <input type="number" name="phone" class="input-ui pl-2 text-right dir-rtl"
                                                placeholder="شماره موبایل خود را وارد نمایید"
                                                value="{{ auth()->user()->phone }}">
                                            @error('phone')
                                                <div class="text-danger mt-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-row-title">
                                            <h3>عکس پروفایل</h3>
                                        </div>
                                        <div class="form-row mt-2">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="hidden" name="profile"
                                                        value="{{ auth()->user()->profile }}">
                                                    <input type="file" name="profile" class="custom-file-input"
                                                        id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                                                    <label class="custom-file-label" for="inputGroupFile04">انتخاب
                                                        عکس</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-row-title">
                                            <h3>رمز عبور</h3>
                                        </div>
                                        <div class="form-row">
                                            <input type="password" name="password" class="input-ui pl-2 text-right dir-rtl"
                                                placeholder="رمز عبور خود را وارد نمایید">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-row-title">
                                            <h3>آدرس</h3>
                                        </div>
                                        <div class="form-row">
                                            <textarea name="address" class="input-ui pl-2 text-right dir-rtl" cols="30" rows="10">آدرس خود را وارد نمایید</textarea>
                                        </div>
                                    </div>
                                    {{--  <div class="col-12 mb-3">
                                        <div class="pt-2 pb-2 mb-3 dt-sl">
                                            <div class="form-row-title mb-2">
                                                <h3>شماره کارت</h3>
                                            </div>
                                            <div class="form-row">
                                                <input type="text" class="input-ui pl-2 text-left dir-ltr"
                                                    placeholder="-">
                                                <button class="btn btn-success float-left mt-3">بررسی
                                                    اطلاعات</button>
                                            </div>
                                        </div>
                                    </div>  --}}
                                    {{--  <div class="col-12 mb-3">
                                        <div class="form-row mt-2">
                                            <div class="custom-control custom-checkbox float-right mt-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                <label class="custom-control-label text-justify" for="customCheck3">
                                                    تبعه خارجی فاقد کد ملی هستم
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-row mt-2">
                                            <div class="custom-control custom-checkbox float-right mt-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                <label class="custom-control-label text-justify" for="customCheck4">
                                                    اشتراک در خبرنامه دیدیکالا
                                                </label>
                                            </div>
                                        </div>
                                    </div>  --}}
                                </div>
                                <div class="dt-sl">
                                    <div class="form-row mt-3 justify-content-end">
                                        <button class="btn-primary-cm btn-with-icon ml-2">
                                            <i class="mdi mdi-pencil"></i>
                                            ویرایش پروفایل
                                        </button>
                                        <a href="{{ route('account.index') }}"
                                            class="btn-primary-cm bg-secondary">انصراف</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--  End Content  --}}

    </div>
@endsection

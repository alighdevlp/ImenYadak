@extends('front.layouts.master')

@section('title', 'جزییات سفارش ' . $order->code)

@section('content')
<div class="row">

    {{--  Start Sidebar  --}}
        @include('front.account.layouts.sidebar')
    {{--  End Sidebar  --}}


    {{--  Start Content  --}}
    <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12">
        <div class="row">
            <div class="col-12">
                <div class="profile-navbar">
                    <a href="{{ route('account.index') }}" class="profile-navbar-btn-back">بازگشت</a>
                    <h4>سفارش <span class="font-en">{{ $order->code }}</span><span>ثبت شده در تاریخ {{ jdate()->forge($order->created_at)->format('%d %B %Y') }}</span></h4>
                </div>
            </div>
            <div class="col-12 mb-4">
                <div class="dt-sl dt-sn border">
                    <div class="row table-draught px-3">
                        <div class="col-md-6 col-sm-12">
                            <span class="title">تحویل گیرنده:</span>
                            <span class="value">{{ $order->user->name . " " . $order->user->family }}</span>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <span class="title">شماره تماس تحویل گیرنده:</span>
                            <span class="value">{{ $order->user->phone }}</span>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <span class="title">محصول:</span>
                            <span class="value">{{ $order->product->title }}</span>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <span class="title">نحوه ارسال سفارش:</span>
                            <span class="value">پست پیشتاز با ظرفیت اختصاصی برای دیدیکالا</span>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <span class="title">هزینه ارسال:</span>
                            <span class="value">رایگان</span>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <span class="title">زمان تحویل:</span>
                            <span class="value">بازه دو‌شنبه ۴ شهریور - پنج‌شنبه ۷ شهریور</span>
                            {{--  <button class="btn btn-light">
                                تغییر زمان ارسال
                            </button>  --}}
                        </div>
                        <div class="col-12 text-center pb-0">
                            <span class="title">مبلغ:</span>
                            <span class="value">{{ $order->product->price }} تومان</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  End Content  --}}
</div>
    
    {{--  Start Product Slider  --}}
    @include('front.account.layouts.product-slider')
    {{--  End Product Slider  --}}
@endsection
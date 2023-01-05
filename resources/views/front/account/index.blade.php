@extends('front.layouts.master')

@section('title', 'پروفایل')

@section('content')
    <div class="row">

        {{--  Start Sidebar  --}}
        @include('front.account.layouts.sidebar')
        {{--  End Sidebar  --}}

        {{--  Start Content  --}}
        <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="px-3">
                        <div class="section-title text-sm-title title-wide mb-1 no-after-title-wide dt-sl mb-2">
                            <h2>اطلاعات شخصی</h2>
                        </div>
                        <div class="profile-section dt-sl">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="label-info">
                                        <span>نام و نام خانوادگی:</span>
                                    </div>
                                    <div class="value-info">
                                        <span>{{ auth()->user()->name }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="label-info">
                                        <span>پست الکترونیک:</span>
                                    </div>
                                    <div class="value-info">
                                        <span>{{ auth()->user()->email }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="label-info">
                                        <span>شماره تلفن همراه:</span>
                                    </div>
                                    <div class="value-info">
                                        <span>{{ auth()->user()->phone }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="label-info">
                                        <span>آدرس:</span>
                                    </div>
                                    <div class="value-info">
                                        @empty(auth()->user()->address)
                                            <span>-</span>                                            
                                            @else
                                        <span>{{ auth()->user()->address }}</span>
                                        @endempty
                                    </div>
                                </div>

                                {{-- <div class="col-md-6 col-sm-12">
                                    <div class="label-info">
                                        <span>دریافت خبرنامه:</span>
                                    </div>
                                    <div class="value-info">
                                        <span>خیر</span>
                                    </div>
                                </div>  --}}

                                {{--  <div class="col-md-6 col-sm-12">
                                    <div class="label-info">
                                        <span>شماره کارت:</span>
                                    </div>
                                    <div class="value-info">
                                        <span>-</span>
                                    </div>
                                </div>  --}}
                            </div>
                            <div class="profile-section-link">
                                <a href="{{ route('account.edit') }}" class="border-bottom-dt">
                                    <i class="mdi mdi-account-edit-outline"></i>
                                    ویرایش پروفایل
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{--  <div class="col-xl-6 col-lg-12">
                    <div class="px-3">
                        <div class="section-title text-sm-title title-wide mb-1 no-after-title-wide dt-sl mb-2">
                            <h2>لیست آخرین علاقه‌مندی‌ها</h2>
                        </div>
                        <div class="profile-section dt-sl">
                            <ul class="list-favorites">
                                <li>
                                    <a href="#">
                                        <img src="./assets/img/products/016.jpg" alt="">
                                        <span>کت مردانه مجلسی مدل k-m-5500</span>
                                    </a>
                                    <button>
                                        <i class="mdi mdi-trash-can-outline"></i>
                                    </button>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="./assets/img/products/020.jpg" alt="">
                                        <span>کت مردانه مجلسی مدل k-m-5640</span>
                                    </a>
                                    <button>
                                        <i class="mdi mdi-trash-can-outline"></i>
                                    </button>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="./assets/img/products/017.jpg" alt="">
                                        <span>کت مردانه مجلسی مدل k-m-5110</span>
                                    </a>
                                    <button>
                                        <i class="mdi mdi-trash-can-outline"></i>
                                    </button>
                                </li>
                            </ul>
                            <div class="profile-section-link">
                                <a href="#" class="border-bottom-dt">
                                    <i class="mdi mdi-square-edit-outline"></i>
                                    مشاهده و ویرایش لیست مورد علاقه
                                </a>
                            </div>
                        </div>
                    </div>
                </div>  --}}
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <div class="section-title text-sm-title title-wide mb-1 no-after-title-wide dt-sl mb-2 px-res-1">
                        <h2>آخرین سفارش‌ها</h2>
                    </div>
                    <div class="dt-sl">
                        <div class="table-responsive">
                            <table class="table table-order">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>محصول</th>
                                        <th>کد سفارش</th>
                                        <th>مبلغ</th>
                                        <th>تاریخ ثبت سفارش</th>
                                        <th>وضعیت سفارش</th>
                                        <th>جزییات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (auth()->user()->orders as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->product->title }}</td>
                                        <td>{{ $item->code }}</td>
                                        <td>{{ $item->product->price }} تومان</td>
                                        <td>{{ jdate()->forge($item->created_at)->format('%d %B %Y') }}</td>
                                        <td>درحال بررسی</td>
                                        <td class="details-link">
                                            <a href="{{ route('account.order.details',$item->code) }}">
                                                <i class="mdi mdi-chevron-left"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach

        
                                    @if(count(auth()->user()->orders) > 0)
                                    <tr>
                                        <td class="link-to-orders" colspan="7"><a href="{{ route('account.orders') }}">مشاهده لیست سفارش
                                                ها</a></td>
                                    </tr>
                                    @else
                                    <tr>
                                        <td class="link-to-orders" colspan="7">سفارشی موجود نیست</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
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

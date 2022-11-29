@extends('front.layouts.master')

@section('title', 'لیست سفارش ها')

@section('content')
    <div class="row">
        {{--  Start Sidebar  --}}
        @include('front.account.layouts.sidebar')
        {{--  End Sidebar  --}}

        {{--  Start Content  --}}
        <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-sm-title title-wide mb-1 no-after-title-wide dt-sl mb-2 px-res-1">
                        <h2>همه سفارش‌ها</h2>
                    </div>
                    <div class="dt-sl">
                        <div class="table-responsive">
                            <table class="table table-order">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>شماره سفارش</th>
                                        <th>تاریخ ثبت سفارش</th>
                                        <th>مبلغ قابل پرداخت</th>
                                        <th>مبلغ کل</th>
                                        <th>عملیات پرداخت</th>
                                        <th>جزییات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>DDC-57456951</td>
                                        <td>۳۱ مرداد ۱۳۹۸</td>
                                        <td>۰</td>
                                        <td>۹,۹۸۹,۰۰۰ تومان</td>
                                        <td>لغو شده</td>
                                        <td class="details-link">
                                            <a href="#">
                                                <i class="mdi mdi-chevron-left"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>DKC-45173498</td>
                                        <td>۱۰ خرداد ۱۳۹۸</td>
                                        <td>۰</td>
                                        <td>۱۸,۰۴۹,۰۰۰ تومان</td>
                                        <td>لغو شده</td>
                                        <td class="details-link">
                                            <a href="#">
                                                <i class="mdi mdi-chevron-left"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>DDC-58976951</td>
                                        <td>۲۱ مرداد ۱۳۹۸</td>
                                        <td>۰</td>
                                        <td>۹,۱۸۹,۰۰۰ تومان</td>
                                        <td>لغو شده</td>
                                        <td class="details-link">
                                            <a href="#">
                                                <i class="mdi mdi-chevron-left"></i>
                                            </a>
                                        </td>
                                    </tr>
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

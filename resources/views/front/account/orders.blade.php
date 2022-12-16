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

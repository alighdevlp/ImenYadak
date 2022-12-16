@extends('back.layouts.master')

@section('title', 'لیست سفارشات')

@section('breadcrumb')
    
@endsection

@section('content')
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card">
            <div class="card-body">
                {{--  <!-- Shopping Cart-->  --}}
                <div class="product-details table-responsive text-nowrap">
                    <table class="table table-bordered table-hover mb-0 text-nowrap">
                        <thead>
                        <tr>
                            <th class="text-right">محصول</th>
                            <th>کد</th>
                            <th>قیمت</th>
                            <th>نام کاربر</th>
                            <th>شماره کاربر</th>
                            <th>ایمیل کاربر</th>
                            <th>ادرس کاربر</th>
                            <th>وضعیت سفارش</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="card-aside-img">
                                            <img src="{{ url('/upload/products/' . $order->product->image) }}" alt="img" class="h-60 w-60">
                                        </div>
                                        <div class="media-body">
                                            <div class="card-item-desc mt-0">
                                                <h6 class="font-weight-semibold mt-0 text-uppercase">{{ $order->product->title }}</h6>
                                                {{--  <dl class="card-item-desc-1">
                                                    <dt>اندازه: </dt>
                                                    <dd>بزرگ</dd>
                                                </dl>
                                                <dl class="card-item-desc-1">
                                                    <dt>رنگ: </dt>
                                                    <dd>رنگ سبز و سیاه</dd>
                                                </dl>  --}}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center text-lg text-medium">{{ $order->code }}</td>
                                <td class="text-center text-lg text-medium">{{ $order->product->price }} تومان</td>
                                <td class="text-center text-lg text-medium">{{ $order->user->name }}</td>
                                <td class="text-center text-lg text-medium">{{ $order->user->phone }}</td>
                                <td class="text-center text-lg text-medium">{{ $order->user->email }}</td>
                                @empty($order->user->address)
                                <td class="text-center text-lg text-medium">-</td>
                                    @else
                                    <td class="text-center text-lg text-medium">{{ $order->user->address }}</td>
                                @endempty

                                <livewire:back.order.change-status :order="$order" />
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

                {{--  <div class="shopping-cart-footer  border-top-0">
                    <div class="column">
                        <form class="coupon-form" method="post">
                            <input class="form-control" type="text" placeholder="کد تخفیف" required="">
                            <button class="btn btn-outline-primary" type="submit"> ارسال کد</button>
                        </form>
                    </div>
                    <div class="column text-lg">جمع کل: <span class="tx-20 font-weight-bold mr-2">112000 تومان</span></div>
                </div>  --}}

                {{--  <div class="shopping-cart-footer">
                    <div class="column">
                        <a class="btn btn-primary" href="#" data-toast="" data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Your cart" data-toast-message="is updated successfully!">ویرایش سبد خرید</a>
                        <a class="btn btn-success" href="#">پرداخت</a>
                    </div>
                </div>  --}}

                {{ $orders->links('pagination::bootstrap-4') }}

            </div>
        </div>
    </div>
</div>
@endsection
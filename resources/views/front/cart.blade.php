@extends('front.layouts.master')

@section('title', 'سبد خرید')

@section('content')

    @if(count(auth()->user()->carts) > 0)
    <div class="row mx-0">
        <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 mb-2">
            <nav class="tab-cart-page">
                <div class="nav nav-tabs border-bottom" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link d-inline-flex w-auto active" id="nav-home-tab" data-toggle="tab"
                        href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">سبد خرید<span
                            class="count-cart">{{ $carts_count }}</span></a>
                </div>
            </nav>
        </div>
        <div class="col-12">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        <div class="col-xl-9 col-lg-8 col-12 px-0">
                            <div class="table-responsive checkout-content dt-sl">
                                <table class="table table-cart">
                                    <tbody>
                                        @foreach (auth()->user()->carts as $item)
                                        <tr class="checkout-item border-bottom">
                                            <td>
                                                <img src="{{ url('/upload/products/' . $item->product->image) }}" alt="" width="105px" height="105px">
                                                <form action="{{ route('cart.destroy',$item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                <button class="checkout-btn-remove">&times;</button>
                                                </form>
                                            </td>
                                            <td class="text-right">
                                                <a href="#">
                                                    <h3 class="checkout-title">
                                                        {{ $item->product->title }}
                                                    </h3>
                                                </a>
                                                {{--  <p class="checkout-dealer">
                                                    فروشنده: ایرانیان قائم همراه(کاوش تیم)
                                                </p>
                                                <p class="checkout-guarantee">گارانتی 18 ماهه کاوش تیم</p>
                                                <div class="checkout-variant checkout-variant--color">
                                                    <span class="checkout-variant-title">رنگ :</span>
                                                    <span class="checkout-variant-value">
                                                        مشکی
                                                        <div class="checkout-variant-shape"
                                                            style="background-color:#212121"></div>
                                                    </span>
                                                </div>  --}}

                                            {{--  <td>
                                                <p class="mb-0">تعداد</p>
                                                <div class="number-input">
                                                    <button
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>
                                                    <input class="quantity" min="0" name="quantity" value="1"
                                                        type="number">
                                                    <button
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                        class="plus"></button>
                                                </div>
                                            </td>  --}}
                                            <td><strong>{{ $item->product->price }} تومان</strong></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-12 w-res-sidebar sticky-sidebar">
                            <div class="dt-sn dt-sn--box border mb-2">
                                <ul class="checkout-summary-summary">
                                    <li>
                                        <span>مبلغ کل ({{ $carts_count }} کالا)</span><span>{{ $carts_price }} تومان</span>
                                    </li>
                                    {{--  <li class="checkout-summary-discount">
                                        <span>سود شما از خرید</span><span><span>(۱٪)</span>۲۰۰,۰۰۰
                                            تومان</span>
                                    </li>  --}}
                                    {{--  <li>
                                        <span>هزینه ارسال<span class="help-sn" data-toggle="tooltip" data-html="true"
                                                data-placement="bottom"
                                                title="<div class='help-container is-right'><div class='help-arrow'></div><p class='help-text'>هزینه ارسال مرسولات می‌تواند وابسته به شهر و آدرس گیرنده متفاوت باشد. در صورتی که هر یک از مرسولات حداقل ارزشی برابر با ۱۵۰هزار تومان داشته باشد، آن مرسوله بصورت رایگان ارسال می‌شود.<br>'حداقل ارزش هر مرسوله برای ارسال رایگان، می تواند متغیر باشد.'</p></div>">
                                                <span class="mdi mdi-information-outline"></span>
                                            </span></span><span>وابسته به آدرس</span>
                                    </li>
                                    <li class="checkout-club-container">
                                        <span>دیدیکلاب<span class="help-sn" data-toggle="tooltip" data-html="true"
                                                data-placement="bottom"
                                                title="<div class='help-container is-right'><div class='help-arrow'></div><p class='help-text'>با امتیازهای خود در باشگاه مشتریان دیجی کالا (دیجی کلاب) از بین جوایز متنوع انتخاب کنید.</p></div>">
                                                <span class="mdi mdi-information-outline"></span>
                                            </span></span><span><span>۱۵۰+</span><span> امتیاز</span></span>
                                    </li>  --}}
                                </ul>
                                <div class="checkout-summary-devider">
                                    <div></div>
                                </div>
                                <div class="checkout-summary-content">
                                    <div class="checkout-summary-price-title">مبلغ قابل پرداخت:</div>
                                    <div class="checkout-summary-price-value">
                                        <span class="checkout-summary-price-value-amount">{{ $carts_price }}</span>
                                        تومان
                                    </div>
                                    <a href="{{ route('pay') }}" class="mb-2 d-block">
                                        <button class="btn-primary-cm btn-with-icon w-100 text-center pr-0">
                                            <i class="mdi mdi-arrow-left"></i>
                                            ادامه ثبت سفارش
                                        </button>
                                    </a>
                                    <div>
                                        <span>
                                            کالاهای موجود در سبد شما ثبت و رزرو نشده‌اند، برای ثبت سفارش
                                            مراحل بعدی را تکمیل کنید.
                                        </span><span class="help-sn" data-toggle="tooltip" data-html="true"
                                            data-placement="bottom"
                                            title="<div class='help-container is-right'><div class='help-arrow'></div><p class='help-text'>محصولات موجود در سبد خرید شما تنها در صورت ثبت و پرداخت سفارش برای شما رزرو می‌شوند. در صورت عدم ثبت سفارش، دیجی‌کالا هیچگونه مسئولیتی در قبال تغییر قیمت یا موجودی این کالاها ندارد.</p></div>">
                                            <span class="mdi mdi-information-outline"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="dt-sn dt-sn--box checkout-feature-aside pt-4">
                                <ul>
                                    @foreach ($attributes as $attribute)
                                    <li class="checkout-feature-aside-item">
                                        <img src="{{ url('/upload/attributes/' . $attribute->icon) }}" alt="">
                                        {{ $attribute->title }}
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row">
                        <div class="col-xl-9 col-lg-8 col-12 px-0">
                            <div class="dt-sn dt-sn--box mb-2">
                                <div class="cart-empty">
                                    <div class="circle-box-icon">
                                        <i class="mdi mdi-cart-remove"></i>
                                    </div>
                                    <p class="cart-empty-title">لیست خرید بعدی شما خالی است!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-12 w-res-sidebar sticky-sidebar">
                            <div class="dt-sn dt-sn--box border">
                                <div class="section-title text-sm-title title-wide mb-1 no-after-title-wide mb-2">
                                    <h2 class="text-dark">لیست خرید بعدی چیست؟</h2>
                                </div>
                                <p class="text-secondary">
                                    شما می‌توانید محصولاتی که به سبد خرید
                                    خود افزوده اید و موقتا قصد خرید آن‌ها را ندارید، در لیست خرید بعدی خود
                                    قرار داده و
                                    هر زمان مایل بودید آن‌ها را مجدداً به سبد خرید اضافه کرده و خرید آن‌ها
                                    را تکمیل کنید.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="row">
        <div class="col-12">
            <div class="dt sl dt-sn dt-sn--box border pt-3 pb-5">
                <div class="cart-page cart-empty">
                    <div class="circle-box-icon">
                        <i class="mdi mdi-cart-remove"></i>
                    </div>
                    <p class="cart-empty-title">سبد خرید شما خالیست!</p>
                    {{--  <p>می‌توانید برای مشاهده محصولات بیشتر به صفحات زیر بروید:</p>
                    <div class="cart-empty-links mb-5">
                        <a href="#" class="border-bottom-dt">لیست مورد علاقه من</a>
                        <a href="#" class="border-bottom-dt">محصولات شگفت‌انگیز</a>
                        <a href="#" class="border-bottom-dt">محصولات پرفروش روز</a>
                    </div>  --}}
                    <a href="{{ route('home') }}" class="btn-primary-cm">صفحه اصلی</a>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection

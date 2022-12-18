@extends('back.layouts.master')

@section('title', 'نمایش اطلاعات محصول')

@section('breadcrumb')
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <a href="{{ route('admin.dashboard.index') }}">
                <h4 class="content-title mb-0 my-auto">داشبورد</h4>
            </a>
            <a href="{{ route('admin.products.index') }}">
                <h4 class="content-title mb-0 my-auto">/ محصولات</h4>
            </a>
            <span class="text-muted mt-1 tx-13 ms-2 mb-0">/ نمایش اطلاعات محصول</span>
        </div>
    </div>
</div>
@endsection

@section('content')
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body h-100">
                    <div class="row row-sm ">
                        <div class=" col-xl-5 col-lg-12 col-md-12">
                            <div class="preview-pic tab-content">
                                <div class="tab-pane active"><img
                                        src="{{ url('/upload/products/' . $product->image) }}" alt="image" /></div>
                                @foreach ($product->product_images as $productimage)
                                    <div class="tab-pane" id="pic-{{ $productimage->id }}"><img
                                            src="{{ url('/upload/product-images/' . $productimage->image) }}"
                                            alt="image" /></div>
                                @endforeach
                            </div>

                            <ul class="preview-thumbnail nav nav-tabs">
                                @foreach ($product->product_images as $productimage)
                                <li class="active"><a data-bs-target="#pic-{{ $productimage->id }}" data-bs-toggle="tab"><img
                                            src="{{ url('/upload/product-images/' . $productimage->image) }}" alt="image" /></a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="details col-xl-7 col-lg-12 col-md-12 mt-4 mt-xl-0">
                            <h4 class="product-title mb-3">{{ $product->title }}</h4>
                            {{--  <p class="text-muted tx-13 mb-1">پیراهن معمولی قرمز و خاکستری مردانه</p>  --}}
                            <div class="rating mb-1">
                                {{--  Start Start  --}}
                                    <livewire:back.product.change-popular-show-product :product="$product" />
                                {{--  End Star  --}}
                                {{--  <span class="review-no">41 بررسی</span>  --}}
                            </div>
                            <h6 class="price">قیمت فعلی: <span class="h3 ml-2">{{ $product->price }} تومان</span></h6>
                            <p class="product-description">
                                {!! $product->description !!}
                            </p>
                            
                            {{--  <p class="vote"><strong>91٪</strong> خریداران از این محصول لذت برده اند! <strong>(87
                                    رأی)</strong></p>  --}}

                            {{--  <div class="sizes d-flex">اندازه ها:
                                <span class="size d-flex" data-toggle="tooltip" title="کم اهمیت"><label
                                        class="rdiobox mb-0"><input checked="" name="rdio" type="radio"> <span
                                            class="font-weight-bold">کوچک</span></label></span>
                                <span class="size d-flex" data-toggle="tooltip" title="متوسط"><label
                                        class="rdiobox mb-0"><input name="rdio" type="radio">
                                        <span>متوسط</span></label></span>
                                <span class="size d-flex" data-toggle="tooltip" title="بزرگ"><label
                                        class="rdiobox mb-0"><input name="rdio" type="radio">
                                        <span>بزرگ</span></label></span>
                                <span class="size d-flex" data-toggle="tooltip" title="فوق العاده بزرگ"><label
                                        class="rdiobox mb-0"><input name="rdio" type="radio"> <span>خیلی
                                            بزرگ</span></label></span>
                            </div>
                            <div class="colors d-flex me-3 mt-2">
                                <span class="mt-2">رنگ:</span>
                                <div class="row gutters-xs ms-4">
                                    <div class="w-auto  ps-0 pe-0" id="m-l-c-2">
                                        <label class="colorinput">
                                            <input name="color" type="radio" value="azure" class="colorinput-input"
                                                checked="">
                                            <span class="colorinput-color bg-danger"></span>
                                        </label>
                                    </div>
                                    <div class="w-auto  ps-0 pe-0" id="m-l-c-2">
                                        <label class="colorinput">
                                            <input name="color" type="radio" value="indigo" class="colorinput-input">
                                            <span class="colorinput-color bg-secondary"></span>
                                        </label>
                                    </div>
                                    <div class="w-auto  ps-0 pe-0" id="m-l-c-2">
                                        <label class="colorinput">
                                            <input name="color" type="radio" value="purple"
                                                class="colorinput-input">
                                            <span class="colorinput-color bg-dark"></span>
                                        </label>
                                    </div>
                                    <div class="w-auto  ps-0 pe-0" id="m-l-c-2">
                                        <label class="colorinput">
                                            <input name="color" type="radio" value="pink"
                                                class="colorinput-input">
                                            <span class="colorinput-color bg-pink"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex  mt-2">
                                <div class="mt-2 product-title">تعداد:</div>
                                <div class="d-flex ml-2">
                                    <ul class=" mb-0 qunatity-list">
                                        <li>
                                            <div class="form-group">
                                                <select name="quantity" id="select-countries17"
                                                    class="form-control nice-select wd-100">
                                                    <option value="1" selected="">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>  --}}

                            {{--  <div class="action">
                                <button class="add-to-cart btn btn-danger" type="button">افزودن به لیست علاقه مندی
                                    ها</button>
                                <button class="add-to-cart btn btn-success" type="button">افزودن به کارت</button>
                            </div>  --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

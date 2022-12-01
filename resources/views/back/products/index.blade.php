@extends('back.layouts.master')

@section('title', 'لیست محصولات')


@section('breadcrumb')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <a href="{{ route('admin.dashboard.index') }}">
                    <h4 class="content-title mb-0 my-auto">داشبورد</h4>
                </a>
                <span class="text-muted mt-1 tx-13 ms-2 mb-0">/ لیست محصولات</span>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <div class="row row-sm">
        @if (count($products) > 0)
            <div class="col-xl-3 col-lg-3 col-md-12 mb-3 mb-md-0">
                <div class="card">
                    <div class="card-header border-bottom pt-3 pb-3 mb-0 font-weight-bold text-uppercase">دسته بندی</div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <label class="form-label">مردانه</label>
                            <select name="beast" id="select-beast" class="form-control  nice-select  custom-select">
                                <option value="0">--انتخاب کنید--</option>
                                <option value="1">سایش پا</option>
                                <option value="2">سایش بالا</option>
                                <option value="3">سایش پایه</option>
                                <option value="4">گرومینگ مردان</option>
                                <option value="5">تجهیزات جانبی</option>
                            </select>
                        </div>
                        <div class="form-group mt-2">
                            <label class="form-label">زنان</label>
                            <select name="beast" id="select-beast1" class="form-control  nice-select  custom-select">
                                <option value="0">--انتخاب کنید--</option>
                                <option value="1">لباس غربی</option>
                                <option value="2">سایش پا</option>
                                <option value="3">سایش بالا</option>
                                <option value="4">سایش پایه</option>
                                <option value="5">بوتی گرومینگ</option>
                                <option value="6">تجهیزات جانبی</option>
                                <option value="7">جواهرات</option>
                            </select>
                        </div>
                        <div class="form-group mt-2">
                            <label class="form-label">کودک و بچه ها</label>
                            <select name="beast" id="select-beast2" class="form-control  nice-select  custom-select">
                                <option value="0">--انتخاب کنید--</option>
                                <option value="1">لباس پسرانه</option>
                                <option value="2">لباس دخترانه</option>
                                <option value="3">اسباب بازی ها</option>
                                <option value="4">مراقبت کودک</option>
                                <option value="5">کفش بچه گانه</option>
                            </select>
                        </div>
                        <div class="form-group mt-2">
                            <label class="form-label">الکترونیک</label>
                            <select name="beast" id="select-beast3" class="form-control  nice-select  custom-select">
                                <option value="0">--انتخاب کنید--</option>
                                <option value="1">موبایل ها</option>
                                <option value="2">لپ تاپ ها</option>
                                <option value="3">بازی و لوازم جانبی</option>
                                <option value="4">لوازم بهداشتی</option>
                            </select>
                        </div>
                        <div class="form-group mt-2">
                            <label class="form-label">ورزش ، کتاب و موارد دیگر </label>
                            <select name="beast" id="select-beast4" class="form-control  nice-select  custom-select">
                                <option value="0">--انتخاب کنید--</option>
                                <option value="1">لوازم التحریر</option>
                                <option value="2">کتابها</option>
                                <option value="3">بازی کردن</option>
                                <option value="4">موسیقی</option>
                                <option value="5">ورزش و تناسب اندام</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-header border-bottom border-top pt-3 pb-3 mb-0 font-weight-bold text-uppercase">فیلتر
                    </div>
                    <div class="card-body">
                        <form role="form product-form">
                            <div class="form-group">
                                <label>نام تجاری</label>
                                <select class="form-control nice-select">
                                    <option>برند</option>
                                    <option>برند</option>
                                    <option>برند</option>
                                    <option>برند</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>نوع</label>
                                <select class="form-control nice-select">
                                    <option>کم اهمیت</option>
                                    <option>متوسط</option>
                                    <option>بزرگ</option>
                                    <option>فوق العاده بزرگ</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="card-header border-bottom border-top pt-3 pb-3 mb-0 font-weight-bold text-uppercase">رتبه
                        بندی</div>
                    <div class="py-2 px-3">
                        <label class="p-1 mt-2 d-flex align-items-center">
                            <span class="check-box mb-0">
                                <span class="ckbox"><input checked="" type="checkbox"><span></span></span>
                            </span>
                            <span class="ml-3 tx-16 my-auto">
                                <i class="ion ion-md-star  text-warning"></i>
                                <i class="ion ion-md-star  text-warning"></i>
                                <i class="ion ion-md-star  text-warning"></i>
                                <i class="ion ion-md-star  text-warning"></i>
                                <i class="ion ion-md-star  text-warning"></i>
                            </span>
                        </label>
                        <label class="p-1 mt-2 d-flex align-items-center">
                            <span class="check-box mb-0">
                                <span class="ckbox"><input checked="" type="checkbox"><span></span></span>
                            </span>
                            <span class="ml-3 tx-16 my-auto">
                                <i class="ion ion-md-star  text-warning"></i>
                                <i class="ion ion-md-star  text-warning"></i>
                                <i class="ion ion-md-star  text-warning"></i>
                                <i class="ion ion-md-star  text-warning"></i>
                            </span>
                        </label>
                        <label class="p-1 mt-2 d-flex align-items-center">
                            <span class="check-box mb-0">
                                <span class="ckbox"><input checked="" type="checkbox"><span></span></span>
                            </span>
                            <span class="ml-3 tx-16 my-auto">
                                <i class="ion ion-md-star  text-warning"></i>
                                <i class="ion ion-md-star  text-warning"></i>
                                <i class="ion ion-md-star  text-warning"></i>
                            </span>
                        </label>
                        <label class="p-1 mt-2 d-flex align-items-center">
                            <span class="checkbox mb-0">
                                <span class="check-box">
                                    <span class="ckbox"><input type="checkbox"><span></span></span>
                                </span>
                            </span>
                            <span class="ml-3 tx-16 my-auto">
                                <i class="ion ion-md-star  text-warning"></i>
                                <i class="ion ion-md-star  text-warning"></i>
                            </span>
                        </label>
                        <label class="p-1 mt-2 d-flex align-items-center">
                            <span class="checkbox mb-0">
                                <span class="check-box">
                                    <span class="ckbox"><input type="checkbox"><span></span></span>
                                </span>
                            </span>
                            <span class="ml-3 tx-16 my-auto">
                                <i class="ion ion-md-star  text-warning"></i>
                            </span>
                        </label>
                        <button class="btn btn-primary-gradient mt-2 mb-2 pb-2" type="submit">فیلتر</button>
                    </div>
                </div>
            </div>
        @endif

        <div class="col-xl-9 col-lg-9 col-md-12">
            @if (count($products) > 0)
                <div class="card">
                    <div class="card-body p-2">
                        <form action="">
                            <div class="input-group search">
                                <input type="text" name="search" class="form-control" placeholder="جستجو کردن ..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-primary" type="button">جستجو کردن</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            @endif



            <div class="row row-sm">
                @foreach ($products as $product)
                    <div class="col-md-6 col-lg-6 col-xl-4  col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="pro-img-box">
                                    {{--  Start Suggest Button  --}}
                                    <livewire:back.product.change-suggest :prod="$product" />
                                    {{--  End Suggest Button  --}}
                                    <img class="w-100" src="{{ url('/upload/products/' . $product->image) }}"
                                        alt="تصویر محصول">
                                    <a href="{{ route('admin.productimages.index') }}" class="adtocart"> <i
                                            class="las la-image "></i>
                                    </a>
                                </div>
                                <div class="text-center pt-3">
                                    <a href="{{ route('admin.products.show',$product->id) }}"><h3 class="h6 mb-2 mt-4 font-weight-bold text-uppercase">{{ $product->title }}</h3></a>
                                    <livewire:back.product.change-popular-product :pop="$product" />
                                    <h4 class="h5 mb-0 mt-2 text-center font-weight-bold text-danger">{{ $product->price }}
                                        تومان</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{--  Start Pagination  --}}
                {{ $products->links('pagination::bootstrap-5') }}
                {{--  End Pagination  --}}

            </div>
        </div>
    </div>
@endsection

@extends('back.layouts.master')

@section('title', 'نمایش اطلاعات اپشن')

@section('breadcrumb')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">صفحات</h4><span class="text-muted mt-1 tx-13 ms-2 mb-0">/ سوالات
                    متداول</span>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="font-weight-semibold tx-15">عنوان:</h4>
                    <p class="text-muted mb-0 tx-13">{{ $option->title }}</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 col-md-6">
                            <h4 class="font-weight-semibold tx-15">ایکون:</h4>
                            <img alt="Responsive image" class="img-thumbnail"
                                src="{{ url('/upload/options/' . $option->icon) }}">
                        </div>
                        <div class="col-6 col-md-6">
                            <h4 class="font-weight-semibold tx-15">لوگو:</h4>
                            <img alt="Responsive image" class="img-thumbnail"
                                src="{{ url('/upload/options/' . $option->logo) }}">
                        </div>
                    </div>
                </div>
                <div class="card-body ">
                    <h4 class="font-weight-semibold tx-15">عنوان فوتر:</h4>
                    <p class="text-muted mb-0 tx-13">{{ $option->footer_title }}</p>
                </div>
                <div class="card-body">
                    <h4 class="font-weight-semibold tx-15">توضیحات فوتر:</h4>
                    {!! $option->footer_description !!}
                </div>
                <div class="card-body ">
                    <h4 class="font-weight-semibold tx-15">کپی رایت فوتر:</h4>
                    <p class="text-muted mb-0 tx-13">{{ $option->footer_copyright }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection

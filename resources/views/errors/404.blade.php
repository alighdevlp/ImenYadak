@extends('front.layouts.master')

@section('title', 'صفحه یافت نشد')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="dt-sl pt-3 pb-5">
            <div class="error-page text-center">
                <h1>صفحه‌ای که دنبال آن بودید پیدا نشد!</h1>
                <a href="{{ route('home') }}" class="btn-primary-cm">صفحه اصلی</a>
                <img src="{{ url('/front/img/theme/404.png') }}" class="img-fluid" width="60%" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
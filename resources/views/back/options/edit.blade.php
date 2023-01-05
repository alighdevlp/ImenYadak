{{--  Powered By Plague  --}}

@extends('back.layouts.master')

@section('title', 'ویرایش اپشن')

@section('breadcrumb')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <a href="{{ route('admin.dashboard.index') }}"><h4 class="content-title mb-0 my-auto">داشبورد</h4></a>
                <a href="{{ route('admin.options.index') }}"><h4 class="content-title mb-0 my-auto">/ اپشن</h4></a>
                <span class="text-muted mt-1 tx-13 ms-2 mb-0">/ ویرایش اپشن</span>
            </div>
        </div>
    </div>
@endsection


@section('content')

<script>
    $(".chosen-select").chosen({width: "95%"}); 
</script>

<div class="row row-sm">
    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
        <div class="card  box-shadow-0">
            <div class="card-header">
                <h4 class="card-title mb-1">فرم ویرایش منو</h4>
            </div>
            <div class="card-body pt-0">
                <form action="{{ route('admin.options.UpdateOrStore') }}" class="form-horizontal" enctype="multipart/form-data" method="POST">
                    @csrf

                    <div class="form-group">
                        <label class="form-label">عنوان: <span class="tx-danger">*</span></label>
                        <input type="text" class="form-control" name="title" value="@if($option->title != null){{ $option->title }}@endif">
                    </div>
                    {{--  <div class="form-group">
                        <div class="col-sm-12 col-md-4 mg-t-10 mg-sm-t-0">
                            <input type="file" class="dropify" data-default-file="assets/img/ecommerce/01.jpg" data-height="200">
                        </div>
                    </div>  --}}
                    <div class="form-group">
                        <label class="form-label">ایکون: <span class="tx-danger">*</span></label>
                        <input type="hidden" name="icon" value="@if($option->icon != null){{ $option->icon }}@endif">
                        <input type="file" class="form-control" name="icon">
                    </div>
                    <div class="form-group">
                        <label class="form-label">لوگو: <span class="tx-danger">*</span></label>
                        <input type="hidden" name="logo" value="@if($option->logo != null){{ $option->logo }}@endif">
                        <input type="file" class="form-control" name="logo">
                    </div>
                    <div class="form-group">
                        <label class="form-label">عکس تخفیف: <span class="tx-danger">*</span></label>
                        <input type="hidden" name="discount_image" value="@if($option->discount_image != null){{ $option->discount_image }}@endif">
                        <input type="file" class="form-control" name="discount_image">
                    </div>                    
                    <div class="form-group">
                        <label class="form-label">عنوان فوتر: <span class="tx-danger">*</span></label>
                        <input type="title" class="form-control" name="footer_title" value="@if($option->footer_title != null){{ $option->footer_title }}@endif">
                    </div>
                    <div class="form-group">
                        <label class="form-label">توضیحات فوتر: <span class="tx-danger">*</span></label>
                        <textarea class="form-control" name="footer_description" id="editor" cols="30" rows="10">@if($option->footer_description != null){{ $option->footer_description }}@endif</textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">کپی رایت فوتر: <span class="tx-danger">*</span></label>
                        <input type="title" class="form-control" name="footer_copyright" value="@if($option->footer_copyright != null){{ $option->footer_copyright }}@endif">
                    </div>
                    <div class="form-group mb-0 mt-3 justify-content-end">
                        <div>
                            <button type="submit" class="btn btn-primary">ثبت</button>
                            <a href="{{ route('admin.options.index') }}" type="submit" class="btn btn-secondary">لغو</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

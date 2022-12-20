{{--  Powered By Plague  --}}

@extends('back.layouts.master')

@section('title', 'ویرایش بنر')

@section('breadcrumb')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <a href="{{ route('admin.dashboard.index') }}">
                    <h4 class="content-title mb-0 my-auto">داشبورد</h4>
                </a>
                <a href="{{ route('admin.banners.index') }}">
                    <h4 class="content-title mb-0 my-auto">/ بنرها</h4>
                </a>
                <span class="text-muted mt-1 tx-13 ms-2 mb-0">/ ویرایش بنر</span>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <div class="row row-sm">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card  box-shadow-0">
                <div class="card-header">
                    <h4 class="card-title mb-1">فرم ویرایش بنر</h4>
                </div>
                <div class="card-body pt-0">
                    <form action="{{ route('admin.banners.update',$banner->id) }}" class="form-horizontal" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                                <label class="form-label">عکس بنر: <span class="tx-danger">*</span></label>
                                <input type="hidden" name="image" value="@if($banner->image != null){{ $banner->image }}@endif">
                                <input type="file" class="form-control" name="image">
                                @error('order')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">وضعیت بنر: <span class="tx-danger">*</span></label>
                                <select name="status" class="form-control">
                                    <option value="0" {{ $banner->status ? '' : 'selected'}}>نمایش داده نشود</option>
                                    <option value="1" {{ $banner->status ? 'selected' : ''}}>نمایش داده شود</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">ترتیب بنر: <span class="tx-danger">*</span></label>
                                <input type="number" class="form-control" name="order">
                                @error('order')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">موقعیت بنر: <span class="tx-danger">*</span></label>
                            <div class="row mg-t-10">
                                <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                                    <label class="rdiobox"><input type="radio" name="position" value="0" @if($banner->position == 0) checked @endif>
                                        <span>بالا</span></label>
                                </div>
                                <div class="col-lg-3">
                                    <label class="rdiobox"><input type="radio" name="position" value="1" @if($banner->position == 1) checked @endif>
                                        <span>وسط</span></label>
                                </div>
                                <div class="col-lg-3">
                                    <label class="rdiobox"><input type="radio" name="position" value="2" @if($banner->position == 2) checked @endif>
                                        <span>پایین</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-0 mt-3 justify-content-end">
                            <div>
                                <button type="submit" class="btn btn-primary">ثبت</button>
                                <a href="{{ route('admin.banners.index') }}" type="submit"
                                    class="btn btn-secondary">لغو</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

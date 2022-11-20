{{--  Powered By Plague  --}}

@extends('back.layouts.master')

@section('title', 'ویرایش ویژگی')

@section('breadcrumb')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <a href="{{ route('admin.dashboard.index') }}">
                    <h4 class="content-title mb-0 my-auto">داشبورد</h4>
                </a>
                <a href="{{ route('admin.attributes.index') }}">
                    <h4 class="content-title mb-0 my-auto">/ ویژگی ها</h4>
                </a>
                <span class="text-muted mt-1 tx-13 ms-2 mb-0">/ ویرایش ویژگی</span>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <div class="row row-sm">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card  box-shadow-0">
                <div class="card-header">
                    <h4 class="card-title mb-1">فرم ویرایش برند</h4>
                </div>
                <div class="card-body pt-0">
                    <form action="{{ route('admin.attributes.update', $attribute->id) }}" class="form-horizontal"
                        enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label class="form-label">عکس ویژگی: <span class="tx-danger">*</span></label>
                            <input type="hidden" name="icon" value="{{ $attribute->icon }}">
                            <input type="file" class="form-control" name="icon">
                            @error('icon')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">عنوان ویژگی: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control" name="title" value="{{ $attribute->title }}">
                            @error('title')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-0 mt-3 justify-content-end">
                            <div>
                                <button type="submit" class="btn btn-primary">ثبت</button>
                                <a href="{{ route('admin.attributes.index') }}" type="submit"
                                    class="btn btn-secondary">لغو</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

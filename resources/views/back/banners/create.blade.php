{{--  Powered By Plague  --}}

@extends('back.layouts.master')

@section('title', 'ایجاد بنر')

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
                <span class="text-muted mt-1 tx-13 ms-2 mb-0">/ ایجاد بنر</span>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <div class="row row-sm">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card  box-shadow-0">
                <div class="card-header">
                    <h4 class="card-title mb-1">فرم ایجاد بنر</h4>
                </div>
                <div class="card-body pt-0">
                    <form action="{{ route('admin.banners.store') }}" class="form-horizontal" enctype="multipart/form-data" method="POST">
                        @csrf

                        <div class="form-group">
                            <label class="form-label">عکس بنر: <span class="tx-danger">*</span></label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="form-group">
                            <label class="form-label">وضعیت بنر: <span class="tx-danger">*</span></label>
                            <select name="status" class="form-control">
                                <option value="0">نمایش داده نشود</option>
                                <option value="1">نمایش داده شود</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">اولویت بنر: <span class="tx-danger">*</span></label>
                            <select name="priority" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">موقعیت بنر: <span class="tx-danger">*</span></label>
                            <div class="row mg-t-10">
                                <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                                    <label class="rdiobox"><input type="radio" name="position" value="0">
                                        <span>بالا</span></label>
                                </div>
                                <div class="col-lg-3">
                                    <label class="rdiobox"><input type="radio" name="position" value="1">
                                        <span>وسط</span></label>
                                </div>
                                <div class="col-lg-3">
                                    <label class="rdiobox"><input type="radio" name="position" value="2">
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

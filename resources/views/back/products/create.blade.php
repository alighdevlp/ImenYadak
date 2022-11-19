{{--  Powered By Plague  --}}

@extends('back.layouts.master')

@section('title', 'ایجاد محصول')

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
                <span class="text-muted mt-1 tx-13 ms-2 mb-0">/ ایجاد محصول</span>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <div class="row row-sm">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card  box-shadow-0">
                <div class="card-header">
                    <h4 class="card-title mb-1">فرم ایجاد محصول</h4>
                </div>
                <div class="card-body pt-0">
                    <form action="{{ route('admin.products.store') }}" class="form-horizontal" method="POST">
                        @csrf

                        <div class="form-group">
                            <label class="form-label">عنوان محصول: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <label class="form-label">قیمت محصول: <span class="tx-danger">*</span></label>
                            <input type="number" class="form-control" name="price">
                        </div>
                        <div class="form-group">
                            <select class="chosen-select form-select" name="categories[]" multiple>
                                @foreach ($categories as $category)                                    
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                              </select>
                        </div>
                        <div class="form-group mb-0 mt-3 justify-content-end">
                            <div>
                                <button type="submit" class="btn btn-primary">ثبت</button>
                                <a href="{{ route('admin.products.index') }}" type="submit" class="btn btn-secondary">لغو</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

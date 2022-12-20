{{--  Powered By Plague  --}}

@extends('back.layouts.master')

@section('title', 'ایجاد ایتم منو')

@section('breadcrumb')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <a href="{{ route('admin.dashboard.index') }}">
                    <h4 class="content-title mb-0 my-auto">داشبورد</h4>
                </a>
                <a href="{{ route('admin.menucategories.index') }}">
                    <h4 class="content-title mb-0 my-auto">/ دسته ایتم های منو</h4>
                </a>
                <span class="text-muted mt-1 tx-13 ms-2 mb-0">/ ایجاد ایتم منو</span>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <div class="row row-sm">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card  box-shadow-0">
                <div class="card-header">
                    <h4 class="card-title mb-1">فرم ایتم منو</h4>
                </div>
                <div class="card-body pt-0">
                    <form action="{{ route('admin.menuitems.store') }}" class="form-horizontal" method="POST">
                        @csrf

                        <div class="form-group">
                            <label class="form-label">نام دسته بندی منو: <span class="tx-danger">*</span></label>
                            <select class="form-control" name="menu_category">
                                @foreach ($menucategories as $menucategory)                                    
                                <option value="{{ $menucategory->id }}">{{ $menucategory->menucategory_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">نام ایتم منو: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control" name="menuitem_name">
                            @error('menuitem_name')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">نوع ایتم منو: <span class="tx-danger">*</span></label>
                            <div class="row mg-t-10">
                                <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                                    <label class="rdiobox"><input type="radio" name="menu_class" value="--item" checked>
                                        <span>ساده</span></label>
                                </div>
                                <div class="col-lg-3">
                                    <label class="rdiobox"><input type="radio" name="menu_class" value="--title"> <span>سرتیتر</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-0 mt-3 justify-content-end">
                            <div>
                                <button type="submit" class="btn btn-primary">ثبت</button>
                                <a href="{{ route('admin.menuitems.index') }}" type="submit"
                                    class="btn btn-secondary">لغو</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

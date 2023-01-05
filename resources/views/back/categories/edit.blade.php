{{--  Powered By Plague  --}}

@extends('back.layouts.master')

@section('title', 'ویرایش دسته بندی')

@section('breadcrumb')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <a href="{{ route('admin.dashboard.index') }}">
                    <h4 class="content-title mb-0 my-auto">داشبورد</h4>
                </a>
                <a href="{{ route('admin.categories.index') }}">
                    <h4 class="content-title mb-0 my-auto">/ دسته بندی ها</h4>
                </a>
                <span class="text-muted mt-1 tx-13 ms-2 mb-0">/ ویرایش دسته بندی</span>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <div class="row row-sm">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card  box-shadow-0">
                <div class="card-header">
                    <h4 class="card-title mb-1">فرم ویرایش دسته بندی</h4>
                </div>
                <div class="card-body pt-0">
                    <form action="{{ route('admin.categories.update', $category->id) }}" class="form-horizontal" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label class="form-label">نام دسته بندی: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                            @error('name')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">نام مستعار دسته بندی: </label>
                            <input type="text" class="form-control" id="slug" name="slug" value="{{ $category->slug }}">
                            <input type="hidden" class="form-control" id="slug_hidden" name="slug_hidden">
                            @error('slug')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group mb-0 mt-3 justify-content-end">
                            <div>
                                <button type="submit" class="btn btn-primary">ثبت</button>
                                <a href="{{ route('admin.categories.index') }}" type="submit" class="btn btn-secondary">لغو</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

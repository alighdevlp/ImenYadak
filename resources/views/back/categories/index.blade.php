@extends('back.layouts.master')

@section('title', 'لیست دسته بندی ها')

@section('breadcrumb')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <a href="{{ route('admin.dashboard.index') }}">
                    <h4 class="content-title mb-0 my-auto">داشبورد</h4>
                </a>
                <span class="text-muted mt-1 tx-13 ms-2 mb-0">/ دسته بندی ها</span>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <div class="row row-sm">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">جدول دسته بندی ها</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive border-top userlist-table">
                        <table class="table card-table table-striped table-vcenter text-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th class="wd-lg-8p"><span>نام دسته بندی</span></th>
                                    <th class="wd-lg-20p"><span>نام مستعار دسته بندی</span></th>
                                    <th class="wd-lg-20p"><span>عمل</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->slug }}</td>
    
                                        <td>
                                            <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-sm btn-info">
                                                <i class="las la-pen"></i>
                                            </a>
                                            <a href="{{ route('admin.categories.destroy', $category->id) }}"
                                                class="btn btn-sm btn-danger">
                                                <i class="las la-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    {{--  Start Pagination  --}}
                    {{--  End Pagination  --}}
                </div>
            </div>
        </div><!-- COL END -->
    </div>
@endsection

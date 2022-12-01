@extends('back.layouts.master')

@section('title', 'لیست عکس محصولات')

@section('breadcrumb')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <a href="{{ route('admin.dashboard.index') }}">
                    <h4 class="content-title mb-0 my-auto">داشبورد</h4>
                </a>
                <span class="text-muted mt-1 tx-13 ms-2 mb-0">/ عکس محصولات</span>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
            <div class="mb-xl-0" id="p-r-c-1">
                <a href="{{ route('admin.productimages.create') }}" class="btn btn-success btn-with-icon btn-block"><i
                        class="typcn typcn-edit"></i> ایجاد</a>
                {{--  <button type="button" class="btn btn-info btn-icon btn-b" id="m-l-c-05">ایجاد / تغییر اپشن</button>  --}}
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
                        <h4 class="card-title mg-b-0">جدول عکس محصولات</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive border-top userlist-table">
                        <table class="table card-table table-striped table-vcenter text-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th class="wd-lg-20p"><span>عکس محصول</span></th>
                                    <th class="wd-lg-20p"><span>عمل</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productimages as $image)
                                    <tr>
                                        <td>
                                            <img alt="ایکون" class="rounded-circle avatar-md mr-2"
                                                src="{{ url('/upload/product-images/' . $image->image) }}">
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.productimages.edit', $image->id) }}"
                                                class="btn btn-sm btn-info">
                                                <i class="las la-pen"></i>
                                            </a>
                                            <a href="{{ route('admin.productimages.destroy', $image->id) }}"
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
        </div>
        {{--  <!-- COL END -->  --}}
    </div>
@endsection

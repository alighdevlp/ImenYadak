@extends('back.layouts.master')

@section('title', 'لیست اپشن')

@section('breadcrumb')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <a href="{{ route('admin.dashboard.index') }}">
                    <h4 class="content-title mb-0 my-auto">داشبورد</h4>
                </a>
                <span class="text-muted mt-1 tx-13 ms-2 mb-0">/ اپشن</span>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
            <div class="mb-xl-0" id="p-r-c-1">
                <a href="{{ route('admin.options.edit') }}" class="btn btn-success btn-with-icon btn-block"><i
                        class="typcn typcn-edit"></i> ویرایش</a>
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
                        <h4 class="card-title mg-b-0">جدول اپشن</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                    {{--  <p class="tx-12 tx-gray-500 mb-2">نمونه جدول ساده والکس. <a href="#">بیشتر بدانید</a></p>  --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive border-top userlist-table">
                        <table class="table card-table table-striped table-vcenter text-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th class="wd-lg-8p"><span>عنوان</span></th>
                                    <th class="wd-lg-20p"><span>ایکون</span></th>
                                    <th class="wd-lg-20p"><span>لوگو</span></th>
                                    <th class="wd-lg-20p"><span>عنوان فوتر</span></th>
                                    <th class="wd-lg-20p"><span>توضیحات فوتر</span></th>
                                    <th class="wd-lg-20p"><span>کپی رایت فوتر</span></th>
                                    <th class="wd-lg-20p"><span>عمل</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $option->title }}</td>
                                    @if ($option->icon == '#')
                                        <td>خالی</td>
                                    @else
                                        <td>
                                            <img alt="ایکون" class="rounded-circle avatar-md mr-2"
                                                src="{{ url('/upload/options/' . $option->icon) }}">
                                        </td>
                                    @endif
                                    @if ($option->logo == '#')
                                        <td>خالی</td>
                                    @else
                                        <td>
                                            <img alt="لوگو" class="rounded-circle avatar-md mr-2"
                                                src="{{ url('/upload/options/' . $option->logo) }}">
                                        </td>
                                    @endif

                                    <td>{{ str()->limit($option->footer_title, 60) }}</td>
                                    <td>{{ str()->limit($option->footer_description, 60) }}</td>
                                    <td>{{ str()->limit($option->footer_copyright, 60) }}</td>
                                    <td>
                                        <a href="{{ route('admin.options.show') }}" class="btn btn-sm btn-primary">
                                            <i class="las la-eye"></i>
                                        </a>
                                    </td>                                        
                                </tr>
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

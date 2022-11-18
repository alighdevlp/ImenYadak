@extends('back.layouts.master')

@section('title', 'لیست کاربران')

@section('breadcrumb')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <a href="{{ route('admin.dashboard.index') }}">
                    <h4 class="content-title mb-0 my-auto">داشبورد</h4>
                </a>
                <span class="text-muted mt-1 tx-13 ms-2 mb-0">/ کاربران</span>
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
                        <h4 class="card-title mg-b-0">جدول کاربران</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                    {{--  <p class="tx-12 tx-gray-500 mb-2">نمونه جدول ساده والکس. <a href="#">بیشتر بدانید</a></p>  --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive border-top userlist-table">
                        <table class="table card-table table-striped table-vcenter text-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th class="wd-lg-8p"><span>نام کاربری</span></th>
                                    <th class="wd-lg-20p"><span>پروفایل</span></th>
                                    <th class="wd-lg-20p"><span>نقش</span></th>
                                    <th class="wd-lg-20p"><span>شماره تماس</span></th>
                                    <th class="wd-lg-20p"><span>ایمیل</span></th>
                                    <th class="wd-lg-20p"><span>امتیاز</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>
                                            <img alt="ایکون" class="rounded-circle avatar-md mr-2"
                                                src="{{ url('/upload/users/' . $user->profile) }}">
                                        </td>
                                        @switch($user->role)
                                            @case(0)
                                                <td><button class="btn btn-danger">کاربر</button></td>
                                            @break

                                            @case(1)
                                                <td><button class="btn btn-success">ادمین</button></td>
                                            @break
                                        @endswitch
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->score }}</td>
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

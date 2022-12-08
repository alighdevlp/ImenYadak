@extends('back.layouts.master')

@section('title', 'نمایش اطلاعات نظر')

@section('breadcrumb')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <a href="{{ route('admin.dashboard.index') }}">
                    <h4 class="content-title mb-0 my-auto">داشبورد</h4>
                </a>
                <a href="{{ route('admin.comments.index') }}">
                    <h4 class="content-title mb-0 my-auto">/ نظرات</h4>
                </a>
                <span class="text-muted mt-1 tx-13 ms-2 mb-0">/ نمایش اطلاعات نظر</span>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row row-sm">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="card">

                {{--  Start Status Btn --}}
                <livewire:back.comment.change-status-comment :comment="$comment" />
                {{--  End Status Btn  --}}

                <div class="card-body">
                    <div class="email-media">
                        <div class="mt-0 d-sm-flex">
                            <img class="me-2 rounded-circle avatar-xl" src="{{ url('/upload/users/' . $comment->profile) }}"
                                alt="آواتار">
                            <div class="media-body">
                                <div class="float-left d-none d-md-flex fs-15">
                                    <span class="ms-3">{{ jdate()->forge('today')->format('%A, %d %B %Y') }}</span>


                                    <small class="ms-3"><i class="bx bx-reply tx-18" data-toggle="tooltip" title=""
                                            data-original-title="پاسخ"></i></small>

                                </div>
                                <div class="media-title  font-weight-bold mt-3">{{ $comment->name }} <span
                                        class="text-muted">({{ $comment->email }})</span></div>
                                {{--  <p class="mb-0">به آدام کوتر ({{ $comment->email }}) </p>  --}}
                                {{--  <small class="mr-2 d-md-none">13 دسامبر 2018 12:45 بعد از ظهر</small>
                                <small class="mr-2 d-md-none"><i class="fe fe-star text-muted" data-toggle="tooltip"
                                        title="" data-original-title="امتیاز"></i></small>
                                <small class="mr-2 d-md-none"><i class="fa fa-reply text-muted" data-toggle="tooltip"
                                        title="" data-original-title="پاسخ"></i></small>  --}}
                            </div>
                        </div>
                    </div>
                    <div class="eamil-body mt-5">
                        <h2>محصول: {{ $comment->product->title }}</h2>
                        <hr>
                        <p>{{ $comment->message }}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

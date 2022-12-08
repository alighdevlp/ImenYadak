@extends('back.layouts.master')

@section('title', 'لیست نظرات')

@section('breadcrumb')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <a href="{{ route('admin.dashboard.index') }}">
                    <h4 class="content-title mb-0 my-auto">داشبورد</h4>
                </a>
                <span class="text-muted mt-1 tx-13 ms-2 mb-0">/ نظرات</span>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row row-sm main-content-mail">
        <div class="col-lg-12 col-xl-12 col-md-12">
            <div class="card">
                <div class="main-content-body main-content-body-mail card-body">
                    <div class="main-mail-header">
                        <div>
                            <h4 class="main-content-title mg-b-5">لیست نظرات</h4>
                            @if ($unread_comments != 0)
                                <p>شما {{ $unread_comments }} پیام خوانده نشده دارید</p>
                            @endif
                        </div>
                        <div>
                            {{--  <span>1-50 از 1200</span>
                        <div class="btn-group" role="group">
                            <button class="btn btn-outline-secondary disabled" type="button"><i class="icon ion-ios-arrow-forward"></i></button> <button class="btn btn-outline-secondary" type="button"><i class="icon ion-ios-arrow-back"></i></button>
                        </div>  --}}
                            {{ $comments->links('pagination::bootstrap-4') }}

                        </div>
                    </div>

                    @if (count($comments) > 0)
                        <div class="main-mail-options">

                            <livewire:back.comment.change-all-read-comment />

                            <div class="btn-group">
                                <button class="btn btn-light"><i class="bx bx-refresh"></i></button>
                                 {{--  <button
                                    class="btn btn-light disabled"><i class="bx bx-archive"></i></button> <button
                                    class="btn btn-light disabled"><i class="bx bx-info-circle"></i></button> <button
                                    class="btn btn-light disabled"><i class="bx bx-trash"></i></button> <button
                                    class="btn btn-light disabled"><i class="bx bx-folder-open"></i></button> <button
                                    class="btn btn-light disabled"><i class="bx bx-purchase-tag-alt"></i></button>  --}}
                            </div>
                        </div>
                    @endif

                    <div class="main-mail-list">
                        @foreach ($comments as $comment)
                            <div class="main-mail-item unread">

                                {{--  Start CheckBox  --}}
                                <livewire:back.comment.change-read-comment :comment="$comment" />
                                {{--  End CheckBox  --}}

                                <div class="main-img-user"><img alt=""
                                        src="{{ url('/upload/users/' . $comment->profile) }}"></div>
                                <a href="{{ route('admin.comments.show', $comment->id) }}">
                                    <div class="main-mail-body">
                                        <div class="main-mail-from text-dark">
                                            {{ $comment->name }}
                                        </div>
                                        <div class="main-mail-subject">
                                            <span>{{ str()->limit($comment->message, 60) }}</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="main-mail-attachment">
                                    <a href="#"><i class="typcn typcn-ti"></i></a>
                                </div>
                                <div class="main-mail-date">
                                    {{ jdate()->forge('today')->format('%A, %d %B %Y') }}
                                </div>
                            </div>
                        @endforeach


                    </div>
                    <div class="mg-lg-b-30"></div>
                </div>
            </div>
        </div>
        <div class="main-mail-compose">
            <div>
                <div class="container">
                    <div class="main-mail-compose-box">
                        <div class="main-mail-compose-header">
                            <span>پیام جدید</span>
                            <nav class="nav">
                                <a class="nav-link" href="#"><i class="fas fa-minus"></i></a> <a class="nav-link"
                                    href="#"><i class="fas fa-compress"></i></a> <a class="nav-link" href="#"><i
                                        class="fas fa-times"></i></a>
                            </nav>
                        </div>
                        <div class="main-mail-compose-body">
                            <div class="form-group">
                                <label class="form-label">به</label>
                                <div>
                                    <input class="form-control" placeholder="آدرس ایمیل گیرنده را وارد کنید" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">موضوع</label>
                                <div>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="پیام خود را اینجا بنویسید ..." rows="8"></textarea>
                            </div>
                            <div class="form-group mg-b-0">
                                <nav class="nav">
                                    <a class="nav-link" data-toggle="tooltip" href="#" title="پیوست را اضافه کنید"><i
                                            class="fas fa-paperclip"></i></a> <a class="nav-link" data-toggle="tooltip"
                                        href="#" title="عکس اضافه کنید"><i class="far fa-image"></i></a> <a
                                        class="nav-link" data-toggle="tooltip" href="#" title="پیوند اضافه کنید"><i
                                            class="fas fa-link"></i></a> <a class="nav-link" data-toggle="tooltip"
                                        href="#" title="شکلک ها"><i class="far fa-smile"></i></a> <a class="nav-link"
                                        data-toggle="tooltip" href="#" title="دور انداختن"><i
                                            class="far fa-trash-alt"></i></a>
                                </nav><button class="btn btn-primary">ارسال</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

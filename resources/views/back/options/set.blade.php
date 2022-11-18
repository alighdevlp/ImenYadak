@extends('back.layouts.master')

@section('title', 'تنظیمات')

@section('breadcrumb')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">تنظیمات</h4>
                <span class="text-muted mt-1 tx-13 ms-2 mb-0">/ لیست تنظیمات</span>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <h6 class="card-title mb-1">سبک انتخاب تک</h6>
                        <p class="text-muted card-sub-title">ابتدا آخرین نسخه jquery را در صفحه خود وارد کنید. سپس
                            jquery.sumoselect.min.js و css آن (sumoselect.css)</p>
                    </div>
                    <form action="">
                        <div class="mb-4">
                            <p class="mg-b-10">تنها انتخاب کنید</p>
                            <select name="somename" class="form-control SlectBox" onclick="console.log($(this).val())"
                                onchange="console.log('change is firing')">
                                <!--placeholder-->
                                <option title="ولوو یک ماشین است" value="volvo">ولوو</option>
                                <option value="saab">ساب</option>
                                <option value="mercedes">مرسدس</option>
                                <option value="audi">آئودی</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <p class="mg-b-10">غیرفعال را انتخاب کنید</p>
                            <select class="SlectBox form-control" disabled="">
                                <option value="volvo">ولوو</option>
                                <option selected="" value="saab">ساب</option>
                                <option value="mercedes">مرسدس</option>
                                <option value="audi">آئودی</option>
                                <option disabled="" value="opt1">انتخاب 1</option>
                                <option value="opt2">گزینه 2</option>
                                <option value="opt3">گزینه 3</option>
                            </select>
                        </div>
                        <div>
                            <p class="mg-b-10">انتخاب درون خطی</p>
                            <select class="SlectBox form-control">
                                <option>انتخاب شد</option>
                                <option>ولوو</option>
                                <option>ساب</option>
                                <option value="mercedes">مرسدس</option>
                                <option value="audi">آئودی</option>
                                <option>ولوو</option>
                                <option>ساب</option>
                                <option value="mercedes">مرسدس</option>
                                <option value="audi">آئودی</option>
                                <option>ولوو</option>
                                <option>ساب</option>
                                <option value="mercedes">مرسدس</option>
                                <option value="audi">آئودی</option>
                                <option>ولوو</option>
                                <option>ساب</option>
                                <option value="mercedes">مرسدس</option>
                                <option value="audi">آئودی</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

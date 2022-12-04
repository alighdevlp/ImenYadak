{{--  Powered By Plague  --}}

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <meta name="Description" content="Valex – Laravel Admin & Dashboard Template">
    <meta name="Author" content="SPRUKO™">
    <meta name="Keywords"
        content="laravel admin panel, laravel admin panel template, laravel admin dashboard template, laravel bootstrap admin template, laravel ui, laravel dashboard, laravel dashboard template, admin, admin template, bootstrap dashboard, bootstrap 5 admin template, laravel blade, laravel blade template bootstrap, php laravel, laravel mix" />

    {{--  Title  --}}
    <title>@yield('title')</title>

    {{-- Start Styles  --}}

    {{--  Favicon  --}}
    <link rel="icon" href="{{ url('/back/img/brand/favicon.png') }}" type="image/x-icon" />

    {{--  Icons css  --}}
    <link href="{{ url('/back/plugins/icons/icons.css') }}" rel="stylesheet">

    {{--  Bootstrap css  --}}
    <link href="{{ url('/back/plugins/bootstrap/css/bootstrap.rtl.min.css') }}" rel="stylesheet">

    {{--  Right-sidemenu css  --}}
    <link href="{{ url('/back/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

    {{--  P-scroll bar css  --}}
    <link href="{{ url('/back/plugins/perfect-scrollbar/p-scrollbar.css') }}" rel="stylesheet" />

    {{--  Sidemenu css  --}}
    <link id="theme" rel="stylesheet" href="{{ url('/back/css-rtl/sidemenu.css') }}">


    {{--  Owl-carousel css  --}}
    <link href="{{ url('/back/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" />

    {{--  Maps css  --}}
    <link href="{{ url('/back/plugins/jqvmap/jqvmap.min.css') }}" rel="stylesheet">


    <link href="{{ url('/back/css-rtl/style.css') }}" rel="stylesheet">
    <link href="{{ url('/back/css-rtl/style-dark.css') }}" rel="stylesheet">
    <link href="{{ url('/back/css-rtl/boxed.css') }}" rel="stylesheet">
    <link href="{{ url('/back/css-rtl/dark-boxed.css') }}" rel="stylesheet">

    {{--  Skinmodes css  --}}
    <link href="{{ url('/back/css-rtl/skin-modes.css') }}" rel="stylesheet" />

    {{--  Animations css  --}}
    <link href="{{ url('/back/css-rtl/animate.css') }}" rel="stylesheet">

    {{--  Switcher css  --}}
    <link href="{{ url('/back/switcher/css/switcher-rtl.css') }}" rel="stylesheet">
    <link href="{{ url('/back/switcher/demo.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/back/plugins/sumoselect/sumoselect-rtl.css') }}">    

    <link rel="stylesheet" href="{{ url('/back/chosen/chosen.min.css') }}">

    {{--  End Styles  --}}

    @livewireStyles
</head>

<body class="main-body app sidebar-mini">

    {{--  <!-- Start Switcher -->  --}}
    <div class="switcher-wrapper ">
        <div class="demo_changer">
            <div class="demo-icon bg_dark"><i class="fa fa-cog fa-spin  text_primary"></i></div>
            <div class="form_holder sidebar-right1">
                <div class="row">
                    <div class="predefined_styles">
                        {{--  @livewire('web-status')  --}}
                        <livewire:back.web-status /> 


                        <div class="swichermainleft border-bottom">
                            <h4>تم طرح بندی منو </h4>
                            <div class="switch_section">
                                <div class="switch-toggle d-flex">
                                    <span class="me-auto">تم روشن</span>
                                    <div class="onoffswitch2"><input type="radio" name="onoffswitch7"
                                            id="myonoffswitch30" class="onoffswitch2-checkbox" checked>
                                        <label for="myonoffswitch30" class="onoffswitch2-label"></label>
                                    </div>
                                </div>
                                <div class="switch-toggle d-flex">
                                    <span class="me-auto">تم تیره</span>
                                    <div class="onoffswitch2"><input type="radio" name="onoffswitch7"
                                            id="myonoffswitch31" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch31" class="onoffswitch2-label"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft border-bottom">
                            <h4>حالت های پوستی</h4>
                            <div class="switch_section">
                                <div class="switch-toggle d-flex">
                                    <span class="me-auto">بدنه پیش فرض</span>
                                    <div class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                            id="myonoffswitch7" class="onoffswitch2-checkbox" checked>
                                        <label for="myonoffswitch7" class="onoffswitch2-label"></label>
                                    </div>
                                </div>
                                <div class="switch-toggle d-flex">
                                    <span class="me-auto">بدنه سبک 1</span>
                                    <div class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                            id="myonoffswitch6" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch6" class="onoffswitch2-label"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft border-bottom">
                            <h4 class="fs-14 font-weight-semibold">سبک های عرض طرح بندی منو</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex mt-4">
                                        <span class="me-auto">نوار کناری پیش فرض</span>
                                        <a class="onoffswitch2"><input type="radio" name="onoffswitch5"
                                                id="myonoffswitch18" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch18" class="onoffswitch2-label"></label>
                                        </a>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">جعبه</span>
                                        <a class="onoffswitch2"><input type="radio" name="onoffswitch5"
                                                id="myonoffswitch19" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch19" class="onoffswitch2-label"></label>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft border-bottom">
                            <h4 class="fs-14 font-weight-semibold">نسخه های طرح بندی منو</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex mt-4">
                                        <span class="me-auto">پیش فرض منو</span>
                                        <a class="onoffswitch2"><input type="radio" name="onoffswitch4"
                                                id="myonoffswitch26" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch26" class="onoffswitch2-label"></label>
                                        </a>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">منو بسته</span>
                                        <a class="onoffswitch2"><input type="radio" name="onoffswitch4"
                                                id="myonoffswitch27" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch27" class="onoffswitch2-label"></label>
                                        </a>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">زیر دریایی شناور</span>
                                        <a class="onoffswitch2"><input type="radio" name="onoffswitch4"
                                                id="myonoffswitch28" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch28" class="onoffswitch2-label"></label>
                                        </a>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">پوشش آیکون</span>
                                        <a class="onoffswitch2"><input type="radio" name="onoffswitch4"
                                                id="myonoffswitch29" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch29" class="onoffswitch2-label"></label>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swichermainleft border-bottom">
                            <h4>سبک های منو</h4>
                            <div class="switch_section">
                                <div class="switch-toggle d-flex">
                                    <span class="me-auto"> رنگ منو</span>
                                    <div class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                            id="myonoffswitch10" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch10" class="onoffswitch2-label"></label>
                                    </div>
                                </div>
                                <div class="switch-toggle horizontal-Dark-switcher d-flex">
                                    <span class="me-auto">منو تاریک</span>
                                    <div class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                            id="myonoffswitch11" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch11" class="onoffswitch2-label"></label>
                                    </div>
                                </div>
                                <div class="switch-toggle d-flex">
                                    <span class="me-auto">منو شیب رنگ</span>
                                    <div class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                            id="myonoffswitch12" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch12" class="onoffswitch2-label"></label>
                                    </div>
                                </div>
                                <div class="switch-toggle d-flex">
                                    <span class="me-auto">تنظیم سبک های منو</span>
                                    <div class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                            id="myonoffswitch13" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch13" class="onoffswitch2-label"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->


    {{--  Start Loader  --}}
    <div id="global-loader">
        <img src="{{ url('/back/img/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    {{--  End Loader  --}}

    {{--  Start Page  --}}
    <div class="page">

        {{--  Start Main Aside  --}}
        @include('back.layouts.aside')
        {{--  End Main Aside  --}}

        {{--  Start Main  --}}
        <div class='main-content app-content'>

            {{--  Start Main Header  --}}
            @include('back.layouts.header')
            {{--  End Main Header  --}}


            {{--  Start Container  --}}
            <div class="container-fluid">

                {{--  Start Breadcrumb  --}}
                @yield('breadcrumb')
                {{--  End Bread Crumb  --}}

                {{--  Start Content  --}}
                @yield('content')
                {{--  End Content  --}}

            </div>
            {{--  End Container  --}}


        </div>
        {{--  End Main  --}}



        {{--  Start Footer  --}}
        @include('back.layouts.footer')
        {{--  End Footer  --}}


    </div>
    {{--  End Page  --}}

    {{--  Start Scripts  --}}

    <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

    {{--  Jquery js  --}}
    <script src="{{ url('/back/plugins/jquery/jquery.min.js') }}"></script>

    {{--  Bootstrap js  --}}
    <script src="{{ url('/back/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ url('/back/plugins/bootstrap/js/bootstrap-rtl.js') }}"></script>

    {{--  Ionicons js  --}}
    <script src="{{ url('/back/plugins/ionicons/ionicons.js') }}"></script>

    {{--  Moment js  --}}
    <script src="{{ url('/back/plugins/moment/moment.js') }}"></script>

    {{--  P-scroll js  --}}
    <script src="{{ url('/back/plugins/perfect-scrollbar/perfect-scrollbar.min-rtl.js') }}"></script>
    <script src="{{ url('/back/plugins/perfect-scrollbar/p-scroll-rtl.js') }}"></script>

    {{--  Rating js  --}}
    <script src="{{ url('/back/plugins/rating/jquery.rating-stars.js') }}"></script>
    <script src="{{ url('/back/plugins/rating/jquery.barrating.js') }}"></script>

    {{--  Sticky js  --}}
    <script src="{{ url('/back/js/sticky.js') }}"></script>

    {{--  sidemenu js  --}}
    <script id="sidemenu" src="{{ url('/back/plugins/side-menu/sidemenu.js') }}"></script>

    {{--  Right-sidebar js  --}}
    <script src="{{ url('/back/plugins/sidebar/sidebar-rtl.js') }}"></script>
    <script src="{{ url('/back/plugins/sidebar/sidebar-custom.js') }}"></script>

    {{--  eva-icons js  --}}
    <script src="{{ url('/back/plugins/eva-icons/eva-icons.min.js') }}"></script>


    {{--  Moment js  --}}
    <script src="{{ url('/back/plugins/raphael/raphael.min.js') }}"></script>

    {{--  Internal  Chart.bundle js  --}}
    <script src="{{ url('/back/plugins/chartjs/Chart.bundle.min.html') }}"></script>

    {{--  Internal Sparkline js  --}}
    <script src="{{ url('/back/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    
    {{--  Internal Apexchart js  --}}
    <script src="{{ url('/back/js/apexcharts.js') }}"></script>

    {{--  Internal Map  --}}
    <script src="{{ url('/back/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ url('/back/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

    {{--  Internal  index js  --}}
    <script src="{{ url('/back/js/index.js') }}"></script>

    {{--  <!--Internal  Form-elements js-->  --}}
    <script src="{{ url('/back/js/advanced-form-elements.js') }}"></script>

    {{--  Apexchart js  --}}
    <script src="{{ url('/back/js/apexcharts.js') }}"></script>
    <script src="{{ url('/back/js/jquery.vmap.sampledata.js') }}"></script>

    <script src="{{ url('/back/plugins/eva-icons/eva-icons.min.js') }}"></script>

    {{--  custom js  --}}
    <script src="{{ url('/back/js/custom.js') }}"></script>

    {{--  Switcher js  --}}
    <script src="{{ url('/back/switcher/js/switcher-rtl.js') }}"></script> 

    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

    <script src="{{ url('/back/chosen/chosen.jquery.min.js') }}"></script>
    <script>
        $(".chosen-select").chosen(); 
    </script>

    <script src="{{ url('/back/js/check-all-mail.js') }}"></script>

    {{--  End Scripts  --}}

    @livewireScripts
</body>


</html>

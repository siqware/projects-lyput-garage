<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SiqWare - @yield('page-title')</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset('admin-ui/material/main_assets/css/icons/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin-ui/material/main_assets/css/icons/fontawesome/styles.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin-ui/material/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin-ui/material/assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin-ui/material/assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin-ui/material/assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin-ui/material/assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{asset('admin-ui/material/main_assets/js/main/jquery.min.js')}}"></script>
    <script src="{{asset('admin-ui/material/main_assets/js/main/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin-ui/material/main_assets/js/plugins/loaders/blockui.min.js')}}"></script>
    <script src="{{asset('admin-ui/material/main_assets/js/plugins/ui/ripple.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- /route JS files -->
    @routes
    <!-- route JS files -->

    <!-- Theme JS files -->
    <script src="{{asset('admin-ui/material/main_assets/js/plugins/internationalization/i18next.min.js')}}"></script>
    <script src="{{asset('admin-ui/material/main_assets/js/plugins/internationalization/jquery-i18next.min.js')}}"></script>
    <script src="{{asset('admin-ui/material/main_assets/js/plugins/internationalization/i18nextXHRBackend.min.js')}}"></script>
    <script src="{{asset('admin-ui/material/main_assets/js/plugins/internationalization/i18nextBrowserLanguageDetector.min.js')}}"></script>
    <script src="{{asset('admin-ui/material/assets/js/app.js')}}"></script>
    <script src="{{asset('js/languages-switch.js')}}"></script>
    @stack('page-js')

    <script src="{{asset('js/custom.js')}}"></script>
    <!-- /theme JS files -->

</head>

<body>

<!-- Main navbar -->
@include('admin-ui.navbar')
<!-- /main navbar -->


<!-- Page content -->
<div class="page-content">

    <!-- Main sidebar -->
    @include('admin-ui.sidebar')
    <!-- /main sidebar -->


    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        @yield('page-header')
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">

            <!-- Basic card -->
            @yield('page-content')
            <!-- /basic card -->
        </div>
        <!-- /content area -->


        <!-- Footer -->
        <div class="navbar navbar-expand-lg navbar-light">
            <div class="text-center d-lg-none w-100">
                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                    <i class="icon-unfold mr-2"></i>
                    Footer
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2019. <a href="#">SiqWare Web App</a> by <a href="http://siqware.com" target="_blank">SiqWare's Team</a>
					</span>

            </div>
        </div>
        <!-- /footer -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>

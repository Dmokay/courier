<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Courier Services</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <!-- plugins -->
        <link href="{{asset('assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <!-- Begin page -->
        <div id="wrapper">

            @include('layouts.includes.topbar')

            @include('layouts.includes.sidebar')
            
            @yield('content')

        </div>
        <!-- END wrapper -->

        @include('layouts.includes.right-sidebar')

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{asset('assets/js/vendor.min.js')}}"></script>

        <!-- optional plugins -->
        <script src="{{asset('assets/libs/moment/moment.min.js')}}"></script>
        <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{asset('assets/libs/flatpickr/flatpickr.min.js')}}"></script>

        <!-- page js -->
        <script src="{{asset('assets/js/pages/dashboard.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/app.min.js')}}"></script>

    </body>
    </html>
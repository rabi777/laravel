<!--
 * CoreUI - Open Source Bootstrap Admin Template
 * @version v1.0.0-alpha.6
 * @link http://coreui.io
 * Copyright (c) 2017 creativeLabs Łukasz Holeczek
 * @license MIT
 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,Angular 2,Angular4,Angular 4,jQuery,CSS,HTML,RWD,Dashboard,React,React.js,Vue,Vue.js">
    <link rel="shortcut icon" href="{{URL::to('img/favicon.png')}}">
    <title>CoreUI - Open Source Bootstrap Admin Template</title>

    <!-- Icons -->
    <link href="{{URL::to('public/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{URL::to('public/css/simple-line-icons.css')}}" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="{{URL::to('public/css/style.css')}}" rel="stylesheet">
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">





    @include('layouts.header.header')
    <div class="app-body">
        @include('layouts.sidebars.sidebar')
        {{-- main content --}}
            @yield('content');
    </div>
     @include('layouts.footer.footer')







    <!-- Bootstrap and necessary plugins -->
    <script src="{{URL::to('public/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{URL::to('public/bower_components/popper.js/index.js')}}"></script>
    <script src="{{URL::to('public/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::to('public/bower_components/pace/pace.min.js')}}"></script>


    <!-- Plugins and scripts required by all views -->
    <script src="{{URL::to('public/bower_components/chart.js/dist/Chart.min.js')}}"></script>


    <!-- GenesisUI main scripts -->

    <script src="{{URL::to('public/js/app.js')}}"></script>





    <!-- Plugins and scripts required by this views -->

    <!-- Custom scripts required by this view -->
    <script src="{{URL::to('public/js/views/main.js')}}"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/new1.css') }}" rel="stylesheet">
    <!-- <link href="{{asset('frontEnd/css/bootstrap.css')}}" rel="stylesheet" /> -->
     <!-- FONTAWESOME STYLES-->
    <!-- <link href="{{asset('frontEnd/css/font-awesome.css')}}" rel="stylesheet" /> -->
     <!-- MORRIS CHART STYLES-->
    <link href="{{asset('frontEnd/js/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{asset('frontEnd/css/custom.css')}}" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <script src="rcicons.js"></script>
    @yield('css')
    @yield('datepicker')
    
</head>
<body>
    <div id="wrapper">
    @include('frontEnd.includes.menu')
    <div id="page-wrapper" >
            <div id="page-inner">
    	<div class="col-md-12 col-sm-8 col-xs-10" style="float: left;">
        	@yield('content')
    	</div>
   	</div>
    </div>
    
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('frontEnd/js/custom.js')}}"></script>
    <script src="{{asset('frontEnd/js/jquery.metisMenu.js')}}"></script>
    @yield('js')
</body>
</html>

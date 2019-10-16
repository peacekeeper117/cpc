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
    <div id="app">
        <!-- <nav class="navbar navbar-dark text-white navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    
                    <ul class="nav navbar-nav navbar-right">
                        
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                                    <img src="/uploads/avatars/{{Auth::user()->avatar}}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav> -->
        <nav class="navbar navbar-default navbar-cls-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Computer Club</a> 
            </div>

            <!-- <ul class="nav navbar-nav navbar-right" style="padding-right: 20px">
                        
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown" style="padding-right: 10px; padding-left: 0px;">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                                    <img src="/uploads/avatars/{{Auth::user()->avatar}}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%"><div class="" style="color: #fff;"> {{ Auth::user()->name }}</div>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul> -->
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">   &nbsp;



 <a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();" class="btn btn-danger square-btn-adjust">Logout</a> 
<form id="logout-form" action="{{ route('logout')}}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
</form>
                                 
                                        
 
 </div>



</nav>
<div class="row">
<nav class="navbar-default navbar-side col-md-5" role="navigation" style="height: 100%;">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <!-- <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                    </li>
                 -->
                    
                    <li>
                        <a @yield('Active_home')  href="{{url('/home')}}">Home</a>
                    </li>

                    <!-- <li>
                        <a @yield('Active_contestlist') href="{{url('/upcoming-contest-list')}}"><i class="fas fa-flag-checkered fa-3x"></i>&emsp;Upcoming Contest &emsp;</a>
                    </li> -->
                    <!-- <li>
                        <a @yield('Active_ranking') href="#"> Ranking &emsp;<span class="fas fa-caret-right fa-2x"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a @yield('Active_msranking')  href="{{url('/ranking-on-cf')}}">My Session Ranking&emsp;</a>
   
                            </li>
                            <li>
                                <a href="#">Season&emsp;<span class="fas fa-caret-right fa-2x"></span></a>
                                 <ul class="nav nav-third-level">
                                        <li>
                                            <a @yield('Active_cfranking') href="#"> Monthly Season</a>
                                        </li>
                                    </ul>
                                
                            </li>
                        </ul>
                    
                    </li>    -->
                    <!-- <li>
                        <a  href="#" @yield('Active_exstdnt')><i class="fas fa-graduation-cap fa-3x"></i> Ex-Student </a>
                    </li>     -->  

                    <!-- <li>
                        <a href="#">Contributions<span class="fas fa-caret-right fa-2x"></span></a>
                            <ul class="nav nav-second-level">
                            <li>
                                <a @yield('Active_curated') href="{{url('/curated-contest')}}" > Contest schedule </a>
                            </li>
                            <li>
                                <a href="#">Problem Set</a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a @yield('Active_submit_problem') href="{{url('/submit-problem')}}" >Submit A Problem Set</a>
                                    </li>
                                    <li>
                                        <a href="#">Provide Data Set</a>
                                    </li>
                                </ul>             
                            </li>
                            </ul>
                    </li>   -->

                    <li>
                                <a @yield('Active_curated') href="{{url('/curated-contest')}}" > Contest schedule </a>
                            </li>
                            <li>
                                <a href="#">Problem Set</a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a @yield('Active_submit_problem') href="{{url('/submit-problem')}}" >Submit A Problem Set</a>
                                    </li>
                                    <li>
                                        <a href="#">Provide Data Set</a>
                                    </li>
                                </ul>             
                            </li> 
                                       
                    <li >
                        <a href="#">Settings</a>
                        <ul class="nav nav-second-level">
                            <li>
                            
                                <a href="/profile/{{ Auth::user()->username }}"@yield('Active_profile')> Profile </a>
                            </li>
                            <li>
                                <a href="/ex_register">Register as Ex Student</a>
                            </li>
                        </ul>
                      </li>     
                </ul>
               
            </div>
            
</nav>  
    <div class="col-md-12 col-sm-8 col-xs-12" style="float: right; padding-left: 8%;">
        @yield('content')
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

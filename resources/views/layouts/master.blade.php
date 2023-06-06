<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    {{--    <link rel="dns-prefetch" href="//fonts.bunny.net">--}}
    {{--    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">--}}

    <link href="{{ asset('admin/form/form.css') }}" rel="stylesheet"/>

    <link href="{{asset('admin/css/bootstrap.css')}}" rel="stylesheet"/>

    <!-- FONTAWESOME STYLES-->
    <link href="{{asset('admin/css/font-awesome.css')}}" rel="stylesheet"/>
    <!-- MORRIS CHART STYLES-->
    <link href="{{asset('admin/js/morris/morris-0.4.3.min.css')}}" rel="stylesheet"/>
    <!-- CUSTOM STYLES-->
    <link href="{{asset('admin/css/custom.css')}}" rel="stylesheet"/>

    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel='stylesheet' type='text/css'/>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">v

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Scripts -->
    {{--    @vite(['resources/sass/app.scss', 'resources/js/app.js'])--}}
</head>
<body>
<div id="app">

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Glxavor ej</a>
            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">
                <a class="btn btn-danger square-btn-adjust" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                {{--                <a href="#" class="btn btn-danger square-btn-adjust">Logout</a>--}}
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="{{asset('admin/img/find_user.png')}}" class="user-image img-responsive"/>
                    </li>


                    <li>
                        <a class="active-menu" href="/admin/index"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-print fa-3x"></i> Tpagrutyun<span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('printings.index')}}">Tpagrutyun</a>
                            </li>
                            <li>
                                <a href="{{route('millings.index')}}">Frezerovka</a>
                            </li>
                            <li>
                                <a href="#">Lazer</a>
                            </li>
                            <li>
                                <a href="#">Ploterayin Ktrvacqner</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Artaqin Govazd<span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Lusavorvox vahanaker</a>
                            </li>
                            <li>
                                <a href="#">Inqnakpchun taxantner</a>
                            </li>
                            <li>
                                <a href="#">Banerner</a>
                            </li>
                            <li>
                                <a href="#">Meqenaneri brendavorum</a>
                            </li>
                            <li>
                                <a href="#">Pastarneri texadrum</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Dizaynerakan carayutyun<span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Lusavorvox vahanaker</a>
                            </li>
                            <li>
                                <a href="#">Jurnali dizayn</a>
                            </li>
                            <li>
                                <a href="#">Artaqin govazdayin dizayn</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>

        </nav>


    <!--        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    &lt;!&ndash; Left Side Of Navbar &ndash;&gt;
                    <ul class="navbar-nav me-auto">

                    </ul>

                    &lt;!&ndash; Right Side Of Navbar &ndash;&gt;
                    <ul class="navbar-nav ms-auto">
                        &lt;!&ndash; Authentication Links &ndash;&gt;
                        @guest
        @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
{{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
            </form>
        </div>
    </li>
@endguest
        </ul>
    </div>
    </div>
    </nav>-->
        <div id="page-wrapper">

                    @yield('content')

        </div>
    </div>

</div>
<script src="{{asset('admin/form/form.js')}}"></script>
<script src="{{asset('admin/js/jquery-1.10.2.js')}}"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<!-- METISMENU SCRIPTS -->
<script src="{{asset('admin/js/jquery.metisMenu.js')}}"></script>
<!-- MORRIS CHART SCRIPTS -->
<script src="{{asset('admin/js/morris/raphael-2.1.0.min.js')}}"></script>
<script src="{{asset('admin/js/morris/morris.js')}}"></script>
<!-- CUSTOM SCRIPTS -->
<script src="{{asset('admin/js/custom.js')}}"></script>
</body>
</html>

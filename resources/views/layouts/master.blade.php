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
                <a class="navbar-brand" href="/">Գլխաոր էջ</a>
            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">
                <a class="btn btn-danger square-btn-adjust" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Դուրս գալ
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
                        <a class="active-menu" href="/admin/index"><i class="fa fa-dashboard fa-3x"></i>Գլխաոր</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-print fa-3x"></i>Tpagrutyunner<span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('printings.index')}}">Tpagrutyun</a>
                            </li>
                            <li>
                                <a href="{{route('millings.index')}}">Frezerovka </a>
                            </li>
                            <li>
                                <a href="{{route('lasers.index')}}">Lazerayin tpagrutyun</a>
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

        <div id="page-wrapper">
            @if(Session::has('success'))<div class="alert alert-success d-flex justify-content-center">
                <strong>{{session('success')}}</strong>
            </div>
            @endif
                    @yield('content')

        </div>
    </div>

</div>
<script>
    $('.nav ul li').each(function() {
        if ($(this).hasClass('active-menu')) {
            $(this).parents("ul").css('display', 'block');
        }
    })
</script>
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

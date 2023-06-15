<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    {{--    title images   --}}
    <link rel="icon" type="images/x-icon" href="{{asset('images/title.jpg')}}"/>


    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}"/>

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Roboto:400,700&display=swap"
          rel="stylesheet"/>

    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet"/>
    <!-- responsive style -->
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet"/>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    {{--    @vite(['resources/sass/app.scss', 'resources/js/app.js'])--}}
</head>
<body>

<div id="app" @if(Request::path() === 'admin/trifoliums') hidden @endif>
    <div class="hero_area" style="@if(Request::path() != '/' )   height: auto; @endif">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
                    <a class="navbar-brand" href="/">
                        <img src="{{asset('images/logo.png')}}" alt=""/>
                    </a>
                        <span>
                          Trifolium Grafics
                        </span>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" style="padding: "
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto mr-2">
                                <li class="nav-item active">
                                    <a class="nav-link pl-0" href="/">  {{ __('app.home')}} <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/about"> {{ __('app.about')}} </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/portfolio">{{ __('app.portfolio')}} </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/service"> {{ __('app.services')}}</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/contact">{{ __('app.contact')}}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="call_btn">
                            <a href="">
                                Call: +374(93-83-33-13)
                            </a>
                        </div>


                        <div style="margin-left: 16px;">
                            <select class="form-control changeLang">
                                <option value="am" {{ session()->get('locale') == 'am' ? 'selected' : '' }}>AM</option>
                                <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>EN</option>
                                <option value="ru" {{ session()->get('locale') == 'ru' ? 'selected' : '' }}>RU</option>
                            </select>
                        </div>

                </nav>
            </div>
        </header>
        <!-- end header section -->

        <section class="slider_section" @if(Request::path() != '/') hidden @endif>
            <div class="container-fluid">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-3 col-lg-2 offset-md-2">
                                    <div class="detail-box">
                                        <h1>
                                            Make Design
                                        </h1>
                                        <p>
                                            There are many variations of passages of Lorem Ipsum
                                            available, but the majority
                                        </p>
                                        <div>
                                            <a href="">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-8">
                                    <div class="img-box">
                                        <img src="{{asset('images/hero.png')}}" alt=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-3 col-lg-2 offset-md-2">
                                    <div class="detail-box">
                                        <h1>
                                            Make Design
                                        </h1>
                                        <p>
                                            There are many variations of passages of Lorem Ipsum
                                            available, but the majority
                                        </p>
                                        <div>
                                            <a href="">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-8">
                                    <div class="img-box">
                                        <img src="{{asset('images/hero.png')}}" alt=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-3 col-lg-2 offset-md-2">
                                    <div class="detail-box">
                                        <h1>
                                            Make Design
                                        </h1>
                                        <p>
                                            There are many variations of passages of Lorem Ipsum
                                            available, but the majority
                                        </p>
                                        <div>
                                            <a href="">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-8">
                                    <div class="img-box">
                                        <img src="{{asset('images/hero.png')}}" alt=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>
    </div>

@yield('content')



<!-- info section -->
    <section class="info_section layout_padding-top layout_padding2-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="info_links pl-lg-5">
                        <h4>
                            {{__('app.menu')}}
                        </h4>
                        <ul>
                            <li class="active">
                                <a href="/">
                                    {{ __('app.home')}}
                                </a>
                            </li>
                            <li>
                                <a href="/about">
                                    {{ __('app.about')}}
                                </a>
                            </li>
                            <li>
                                <a class="" href="/portfolio">
                                    {{ __('app.portfolio')}}
                                </a>
                            </li>
                            <li>
                                <a class="" href="/service">
                                    {{ __('app.services')}}
                                </a>
                            </li>
                            <li>
                                <a href="/contact">
                                    {{ __('app.contact')}}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="info_contact">
                        <h4>
                            {{ __('app.location')}}
                        </h4>
                        <div>
                            <img src="{{asset('images/location.png')}}" alt=""/>
                            <p>
                                {{ __('app.for_location')}}
                            </p>
                        </div>
                        <div>
                            <img src="{{asset('images/telephone.png')}}" alt=""/>
                            <p>
                                ( +01 1234567890 )
                            </p>
                        </div>
                        <div>
                            <img src="{{asset('images/envelope.png')}}" alt=""/>
                            <p>
                                trifoliumgrafics@gmail.com
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="info_social">
                        <h4>
                            {{ __('app.social_link')}}
                        </h4>
                        <div class="social_container">
                            <div>
                                <a href="">
                                    <img src="{{asset('images/facebook-logo.png')}}" alt=""/>
                                </a>
                            </div>
                            <div>
                                <a href="">
                                    <img src="{{asset('images/twitter-logo.png')}}" alt=""/>
                                </a>
                            </div>
                            <div>
                                <a href="">
                                    <img src="{{asset('images/instagram.png')}}" alt=""/>
                                </a>
                            </div>
                            <div>
                                <a href="">
                                    <img src="{{asset('images/linkedin-sign.png')}}" alt=""/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end info_section -->

    <!-- footer section -->
    <footer class="container-fluid footer_section">

    </footer>
    <!-- footer section -->

</div>
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/circles.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script>
    let url = "{{ route('changeLang') }}";
    $(".changeLang").change(function () {
        window.location.href = url + "?lang=" + $(this).val();
    });
</script>
</body>
</html>

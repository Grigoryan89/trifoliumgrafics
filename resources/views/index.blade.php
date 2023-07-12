@extends('layouts.app')
@section('content')

    <x-navbar/>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section class="slider_section" @if(Request::path() != '/') hidden @endif>
        <div class="container-fluid">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-3 col-lg-2 offset-md-2">
                                <div class="detail-box">
                                    <h1>
                                        Օֆֆսեթ
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
    <br>
    <br>


    <x-about/>
    <br>
    <br>



    <!-- end about section -->

    <!-- do section -->
    <section class="do_section layout_padding-bottom">
        <div class="container">
            <div class="custom_heading-container">
                <h2>
                    What we do
                </h2>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="content-box bg-red">
                        <div class="img-box">
                            <img src="images/idea.png" alt=""/>
                        </div>
                        <div class="detail-box">
                            <h6>
                                Original Ideas
                            </h6>
                            <p>
                                It is a long established fact that a reader will be distracted
                                by the readable content
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="content-box bg-green">
                        <div class="img-box">
                            <img src="images/controller.png" alt=""/>
                        </div>
                        <div class="detail-box">
                            <h6>
                                Great apps
                            </h6>
                            <p>
                                It is a long established fact that a reader will be distracted
                                by the readable content
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="content-box bg-red">
                        <div class="img-box">
                            <img src="images/monitor.png" alt=""/>
                        </div>
                        <div class="detail-box">
                            <h6>
                                High Resolution
                            </h6>
                            <p>
                                It is a long established fact that a reader will be distracted
                                by the readable content
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="content-box bg-green">
                        <div class="img-box">
                            <img src="images/rocket-ship.png" alt=""/>
                        </div>
                        <div class="detail-box">
                            <h6>
                                Fast Loading
                            </h6>
                            <p>
                                It is a long established fact that a reader will be distracted
                                by the readable content
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end do section -->
    <!-- skill section -->

    <section class="skill_section layout_padding2">
        <div class="container">
            <div class="custom_heading-container">
                <h2>
                    Our Skills
                </h2>
            </div>
            <div class="skill_padding">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="box">
                            <div class="circle" id="circles-1"></div>
                            <h6>
                                Adobe Photoshop
                            </h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="box">
                            <div class="circle" id="circles-2"></div>
                            <h6>
                                Adobe Ilustrator
                            </h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="box">
                            <div class="circle" id="circles-3"></div>
                            <h6>
                                After Effects
                            </h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="box">
                            <div class="circle" id="circles-4"></div>
                            <h6>
                                Adobe XD
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end skill section -->

    <!-- portfolio section -->
    <x-portfolio />

    <!-- end portfolio section -->

 <x-partners/>

    <!-- end client section -->

    <!-- contact section -->

<x-contact/>


@endsection

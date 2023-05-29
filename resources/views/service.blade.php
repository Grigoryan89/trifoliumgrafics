@extends('layouts.app')
@section('content')

    @include('navbar')
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<!-- Site Metas -->

<!-- do section -->
<section class="do_section layout_padding">
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
                        <img src="images/idea.png" alt="" />
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
                        <img src="images/controller.png" alt="" />
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
                        <img src="images/monitor.png" alt="" />
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
                        <img src="images/rocket-ship.png" alt="" />
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


@endsection

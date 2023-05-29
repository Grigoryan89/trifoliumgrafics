@extends('layouts.app')
@section('content')

    @include('navbar')
<!-- portfolio section -->
<section class="portfolio_section layout_padding">
    <div class="container">
        <div class="custom_heading-container">
            <h2>
                Our Portfolio
            </h2>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="box b-1">
                            <img src="images/p-1.png" alt=""/>
                            <h4>
                                Logo Design
                            </h4>
                        </div>
                        <div class="box b-2">
                            <img src="images/p-2.png" alt=""/>
                            <h4>
                                Coding
                            </h4>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="box b-3">
                            <img src="images/p-3.png" alt=""/>
                            <h4>
                                Bike Design
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="box b-4">
                            <img src="images/p-4.png" alt=""/>
                            <h4>
                                Flower Design
                            </h4>
                        </div>
                        <div class="box b-5">
                            <img src="images/p-5.png" alt=""/>
                            <h4>
                                Website Design
                            </h4>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="box b-6">
                            <img src="images/p-6.jpg" alt=""/>
                            <h4>
                                More Design
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end portfolio section -->

@endsection

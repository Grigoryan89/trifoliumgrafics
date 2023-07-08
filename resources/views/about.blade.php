@extends('layouts.app')
@section('content')

    <x-navbar/>

<!-- about section -->

<section class="about_section layout_padding mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="img-box">
                    <img src="images/about-img.png" alt="" />
                </div>
            </div>
            <div class="col-md-5">
                <div class="detail-box">
                    <div class="custom_heading-container">
                        <h2>
                            About Design
                        </h2>
                    </div>

                    <p>
                        It is a long established fact that a reader will be distracted
                        by the readable content of a page when looking at its layout.
                        The point of using Lorem Ipsum is that it has a more-or-less
                        normal distribution of letters, as opposed to using 'Content
                        here , content here', making it
                    </p>
                    <div>
                        <a href="">
                            About More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end about section -->

@endsection

@extends('layouts.app')
@section('content')

    <x-navbar/>


    <!-- about section -->

    <section class="about_section layout_padding mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="img-box">
                        <img src="images/about-img.png" alt=""/>
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

    <!-- client section -->
    <section class="client_section layout_padding-bottom">
        <div class="container">
            <div class="custom_heading-container">
                <h2>
                    Testimonial
                </h2>
            </div>
        </div>

        <div class="container">
            <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="client_container layout_padding2">
                            <div class="client_box b-1">
                                <div class="client-id">
                                    <div class="img-box">
                                        <img src="images/client-1.jpg" alt=""/>
                                    </div>
                                    <div class="name">
                                        <h5>
                                            smirth jon
                                        </h5>
                                        <p>
                                            client
                                        </p>
                                    </div>
                                </div>
                                <div class="detail">
                                    <p>
                                        It is a long established fact that a reader will be distracted
                                        by the readable content of a page when looking at its layout.
                                        The point of using Lorem Ipsum is that it has a more-or-less
                                        normal distribution of letters, as opposed to using 'Content
                                        here, content here', making it look like readable English. Many
                                        desktop publishing packages and web page editors now use Lorem
                                        Ipsum as their default model It is a long established fact that
                                        a reader will be distracted by the readable content of a page
                                        when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as
                                        opposed to using 'Content here, content here', making it look
                                        like readable English. Many desktop publishing packages and web
                                        page editors now use Lorem Ipsum as their default model
                                    </p>
                                </div>
                            </div>
                            <div class="client_box b-2">
                                <div class="client-id">
                                    <div class="img-box">
                                        <img src="images/client-2.jpg" alt=""/>
                                    </div>
                                    <div class="name">
                                        <h5>
                                            smirth den
                                        </h5>
                                        <p>
                                            client
                                        </p>
                                    </div>
                                </div>
                                <div class="detail">
                                    <p>
                                        It is a long established fact that a reader will be distracted
                                        by the readable content of a page when looking at its layout.
                                        The point of using Lorem Ipsum is that it has a more-or-less
                                        normal distribution of letters, as opposed to using 'Content
                                        here, content here', making it look like readable English. Many
                                        desktop publishing packages and web page editors now use Lorem
                                        Ipsum as their default model It is a long established fact that
                                        a reader will be distracted by the readable content of a page
                                        when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as
                                        opposed to using 'Content here, content here', making it look
                                        like readable English. Many desktop publishing packages and web
                                        page editors now use Lorem Ipsum as their default model
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="client_container layout_padding2">
                            <div class="client_box b-1">
                                <div class="client-id">
                                    <div class="img-box">
                                        <img src="images/client-1.jpg" alt=""/>
                                    </div>
                                    <div class="name">
                                        <h5>
                                            smirth jon
                                        </h5>
                                        <p>
                                            client
                                        </p>
                                    </div>
                                </div>
                                <div class="detail">
                                    <p>
                                        It is a long established fact that a reader will be distracted
                                        by the readable content of a page when looking at its layout.
                                        The point of using Lorem Ipsum is that it has a more-or-less
                                        normal distribution of letters, as opposed to using 'Content
                                        here, content here', making it look like readable English. Many
                                        desktop publishing packages and web page editors now use Lorem
                                        Ipsum as their default model It is a long established fact that
                                        a reader will be distracted by the readable content of a page
                                        when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as
                                        opposed to using 'Content here, content here', making it look
                                        like readable English. Many desktop publishing packages and web
                                        page editors now use Lorem Ipsum as their default model
                                    </p>
                                </div>
                            </div>
                            <div class="client_box b-2">
                                <div class="client-id">
                                    <div class="img-box">
                                        <img src="images/client-2.jpg" alt=""/>
                                    </div>
                                    <div class="name">
                                        <h5>
                                            smirth den
                                        </h5>
                                        <p>
                                            client
                                        </p>
                                    </div>
                                </div>
                                <div class="detail">
                                    <p>
                                        It is a long established fact that a reader will be distracted
                                        by the readable content of a page when looking at its layout.
                                        The point of using Lorem Ipsum is that it has a more-or-less
                                        normal distribution of letters, as opposed to using 'Content
                                        here, content here', making it look like readable English. Many
                                        desktop publishing packages and web page editors now use Lorem
                                        Ipsum as their default model It is a long established fact that
                                        a reader will be distracted by the readable content of a page
                                        when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as
                                        opposed to using 'Content here, content here', making it look
                                        like readable English. Many desktop publishing packages and web
                                        page editors now use Lorem Ipsum as their default model
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="client_container layout_padding2">
                            <div class="client_box b-1">
                                <div class="client-id">
                                    <div class="img-box">
                                        <img src="images/client-1.jpg" alt=""/>
                                    </div>
                                    <div class="name">
                                        <h5>
                                            smirth jon
                                        </h5>
                                        <p>
                                            client
                                        </p>
                                    </div>
                                </div>
                                <div class="detail">
                                    <p>
                                        It is a long established fact that a reader will be distracted
                                        by the readable content of a page when looking at its layout.
                                        The point of using Lorem Ipsum is that it has a more-or-less
                                        normal distribution of letters, as opposed to using 'Content
                                        here, content here', making it look like readable English. Many
                                        desktop publishing packages and web page editors now use Lorem
                                        Ipsum as their default model It is a long established fact that
                                        a reader will be distracted by the readable content of a page
                                        when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as
                                        opposed to using 'Content here, content here', making it look
                                        like readable English. Many desktop publishing packages and web
                                        page editors now use Lorem Ipsum as their default model
                                    </p>
                                </div>
                            </div>
                            <div class="client_box b-2">
                                <div class="client-id">
                                    <div class="img-box">
                                        <img src="images/client-2.jpg" alt=""/>
                                    </div>
                                    <div class="name">
                                        <h5>
                                            smirth den
                                        </h5>
                                        <p>
                                            client
                                        </p>
                                    </div>
                                </div>
                                <div class="detail">
                                    <p>
                                        It is a long established fact that a reader will be distracted
                                        by the readable content of a page when looking at its layout.
                                        The point of using Lorem Ipsum is that it has a more-or-less
                                        normal distribution of letters, as opposed to using 'Content
                                        here, content here', making it look like readable English. Many
                                        desktop publishing packages and web page editors now use Lorem
                                        Ipsum as their default model It is a long established fact that
                                        a reader will be distracted by the readable content of a page
                                        when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as
                                        opposed to using 'Content here, content here', making it look
                                        like readable English. Many desktop publishing packages and web
                                        page editors now use Lorem Ipsum as their default model
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <!-- end client section -->

    <!-- contact section -->

    <section class="contact_section ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-1">
                    <h2 class="custom_heading">Contact Us</h2>
                    <form action="#">
                        <div>
                            <input type="text" placeholder="Name"/>
                        </div>
                        <div>
                            <input type="email" placeholder="Email"/>
                        </div>
                        <div>
                            <input type="text" placeholder="Pone Number"/>
                        </div>
                        <div>
                            <input type="text" class="message-box" placeholder="Message"/>
                        </div>
                        <div class="d-flex  mt-4 ">
                            <button>
                                SEND
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 px-0">
                    <div class="img-box">
                        <img src="images/contact.jpg" alt="" class="w-100"/>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

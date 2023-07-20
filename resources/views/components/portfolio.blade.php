<!-- portfolio section -->
<section class="portfolio_section layout_padding">
    <div class="container">
        <div class="custom_heading-container">
            <h2>
                {{__('app.our_portfolio.our_portfolio')}}
            </h2>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="box b-1">
                            <a href="{{route('show.portfolio')}}">
                                <img src="{{asset('images/printing.jpg')}}" alt=""/>
                                <h4>
                                    {{__('app.our_portfolio.printings')}}
                                </h4>
                            </a>
                        </div>
                        <div class="box b-2">
                            <a href="{{route('mill.all')}}">
                                <img src="{{asset('images/milling.png')}}" alt=""/>
                                <h4>
                                    {{__('app.our_portfolio.milling')}}
                                </h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="box b-1">
                            <a href="{{route('las.all')}}">
                                <img src="{{asset('images/laser.png')}}" alt=""/>
                                <h4>
                                    {{__('app.our_portfolio.laser')}}
                                </h4>
                            </a>
                        </div>
                        <div class="box b-2">
                            <a href="{{route('las.all')}}">
                                <img src="{{asset('images/laser.png')}}" alt=""/>
                                <h4>
                                    {{__('app.our_portfolio.laser')}}
                                </h4>
                            </a>
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


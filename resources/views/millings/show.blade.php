@extends('layouts.app')
@section('content')

    <x-navbar/>

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12 text-center my-2">
                <h4>{{__('app.our_portfolio.show_all')}}</h4>
            </div>
        </div>
        <div class="portfolio-menu mt-2 mb-4">
            <ul>
                <li class="btn btn-outline-dark" data-filter="*"><a
                        href="{{route('show.portfolio')}}">{{__('app.our_portfolio.all')}}</a>
                </li>
                <li class="btn btn-outline-dark " data-filter=".prn"><a
                        href="{{route('print.all')}}">{{__('app.our_portfolio.printing')}}</a>
                </li>
                <li class="btn btn-outline-dark" data-filter=".mill"><a href="{{route('mill.all')}}">{{__('app.our_portfolio.milling')}}</a>
                </li>
            </ul>
        </div>

        <section class="gallery">
            <div class="container">
                <div class="grid">
                    @if(!$model->images->isEmpty())
                        @foreach($model->images as $item)
                    <div class="column-xs-12 column-md-4">
                        <figure class="img-container">
                            <img class="img"
                                 src="{{$item->url ? asset('storage/'.$item->url): asset('images/no-image.jpg')}}"
                                 alt=""
                            />
                            <figcaption class="img-content">
                                <h2 class="title">{{ $model->{app()->getLocale().'_name'} }}</h2>
                                <h3 class="category">{{ $model->{app()->getLocale().'_description'} }}</h3>
                            </figcaption>
                            <span class="img-content-hover">
                                <h2 class="title">{{ $model->{app()->getLocale().'_name'} }}</h2>
                                <h3 class="category">{{ $model->{app()->getLocale().'_description'} }}</h3>
                            </span>
                        </figure>
                    </div>
                        @endforeach
                    @else
                        <img
                            width="100%" height="150px"
                            src="{{ asset('images/no-image.jpg')}}"
                            alt=""
                        />
                    @endif
                </div>
            </div>
        </section>
    </div>
    <script>
        const imgContent = document.querySelectorAll('.img-content-hover');

        function showImgContent(e) {
            for (var i = 0; i < imgContent.length; i++) {
                x = e.pageX;
                y = e.pageY;
                imgContent[i].style.transform = `translate3d(${x}px, ${y}px, 0)`;
            }
        };

        document.addEventListener('mousemove', showImgContent);
    </script>
@endsection

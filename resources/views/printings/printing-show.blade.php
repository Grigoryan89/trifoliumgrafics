@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center my-2">
                <h4>{{__('app.our_portfolio.show_all_printings')}}</h4>
            </div>
        </div>
        <div class="portfolio-menu mt-2 mb-4">
            <ul>
                <li class="btn btn-outline-dark" data-filter="*"><a
                        href="{{route('print.index')}}">{{__('app.our_portfolio.all')}}</a>
                </li>
                <li class="btn btn-outline-dark active" data-filter=".prn"><a
                        href="#">{{__('app.our_portfolio.printing')}}</a>
                </li>
                <li class="btn btn-outline-dark" data-filter=".mill"><a href="">{{__('app.our_portfolio.milling')}}</a>
                </li>
            </ul>
        </div>

        <section class="gallery">
            <div class="container">
                <div class="grid">
                    @if(!$model1->images->isEmpty())
                        @foreach($model1->images as $item)
                    <div class="column-xs-12 column-md-4">
                        <figure class="img-container">
                            <img class="img"
                                 src="{{$item->url ? asset('storage/'.$item->url): asset('images/no-image.jpg')}}"
                                 alt=""
                            />
                            <figcaption class="img-content">
                                <h2 class="title">{{ $model1->{app()->getLocale().'_name'} }}</h2>
                                <h3 class="category">{{ $model1->{app()->getLocale().'_description'} }}</h3>
                            </figcaption>
                            <span class="img-content-hover">
                                <h2 class="title">{{ $model1->{app()->getLocale().'_name'} }}</h2>
                                <h3 class="category">{{ $model1->{app()->getLocale().'_description'} }}</h3>
                            </span>
                        </figure>
                    </div>
                        @endforeach
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
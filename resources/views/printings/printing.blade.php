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
                <li class="btn btn-outline-dark" data-filter="*"><a href="{{route('print.index')}}">{{__('app.our_portfolio.all')}}</a>
                </li>
                <li class="btn btn-outline-dark active" data-filter=".prn"><a href="#">{{__('app.our_portfolio.printing')}}</a>
                </li>
                <li class="btn btn-outline-dark" data-filter=".mill"><a href="">{{__('app.our_portfolio.milling')}}</a>
                </li>
            </ul>
        </div>
        <div class="portfolio-item row">
            @foreach($model1 as $item)
                <div class="item prn col-lg-3 col-md-4 col-6 col-sm">
                    @if(!$item->images->isEmpty())
                        <img
                            width="100%" height="150px"
                            src="{{ (asset('storage/'.$item->images[0]->url))}}"
                            alt=""
                        />
                    @else
                        <img
                            width="100%" height="150px"
                            src="{{ asset('images/no-image.jpg')}}"
                            alt=""
                        />
                    @endif
                    <div class="middle">
                        <a href="{{route('print.show',$item->id)}}">
                            <div class="text">{{ $item->{app()->getLocale().'_name'} }}</div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection

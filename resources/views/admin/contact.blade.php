@extends('layouts.master')
@section('content')


    <div class="row custyle">
        <table class="table table-striped custab">
            <thead>
            <tr>
                <th>{{__('app.about_contact.name')}}</th>
                <th>{{__('app.about_contact.email')}}</th>
                <th>{{__('app.about_contact.phone')}}</th>
                <th>Նամակ</th>
            </tr>
            </thead>
            @foreach($contact as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->message}}</td>
            </tr>
            @endforeach

        </table>
    </div>

@endsection

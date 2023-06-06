@extends('layouts.master')
@section('content')





        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Frezerovka</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('millings.create') }}">Stexcel nor@</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>No</th>
                <th>Anun</th>
                <th>Nkaragrutyun</th>
                <th>Nkar</th>
                <th width="280px">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($millings as $milling)
                <tr>
                    <td>{{ $milling->id }}</td>
                    <td>{{ $milling->name }}</td>
                    <td>{{ $milling->description }}</td>
                    <td>
                        @if(!$milling->images->isEmpty())
                            @foreach($milling->images as $item)
                                <img
                                    width="50px" height="50px"
                                    src="{{$item->url ? asset('storage/'.$item->url): asset('images/no-image.jpg')}}"
                                    alt=""
                                />
                            @endforeach
                        @else
                            <img
                                width="50px" height="50px"
                                src="{{ asset('images/no-image.jpg')}}"
                                alt=""
                            />
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('millings.destroy',$milling->id) }}" method="Post">
                            <a class="btn btn-primary" href="{{ route('millings.edit',$milling->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $millings->links() !!}




















{{--    @if(session()->has('success'))
        <div
            class="fixed  left-1/2 top-0 transform-translate-x-1/2 bg-laravel text-white px-48 py-3">
            <p>
                {{session('success')}}
            </p>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-8"><h1>Tpagrutyun <b>Detalner@</b></h1></div>
                <div class="col-sm-4">
                    <button type="button" class="btn btn-info add-new" data-toggle="modal"
                            data-target="#addModal"><i class="fa fa-plus"></i> Avelacnel Print
                    </button>
                </div>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Anun</th>
                <th>Nkaragrutyun</th>
                <th>Nkar</th>
                <th>Popoxel Jnjel</th>
            </tr>
            </thead>
            <tbody>
            @foreach($printings as $printing)

                <tr>
                    <td>{{$printing->id}}</td>
                    <td>{{$printing->name}}</td>
                    <td>{{$printing->description}}</td>
                    <td>
                        @if(!$printing->images->isEmpty())
                            @foreach($printing->images as $item)
                                <img
                                    width="50px" height="50px"
                                    src="{{$item->url ? asset('storage/'.$item->url): asset('images/no-image.jpg')}}"
                                    alt=""
                                />
                            @endforeach
                        @else
                            <img
                                width="50px" height="50px"
                                src="{{ asset('images/no-image.jpg')}}"
                                alt=""
                            />
                        @endif
                    </td>
                    <td>
                        <a href="{{route('printing.edit',$printing->id)}}"  class="edit" title="Edit" data-toggle="tooltip"><i
                                class="material-icons"></i></a>
                        <a class="delete" title="Delete" data-toggle="tooltip"><i
                                class="material-icons"></i></a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        {{ $printings->links() }}
    </div>




    <!-- Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModal"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{route('millings.store')}}" method="post" enctype="multipart/form-data">
                    @method('POST') @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add new Print</h5>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name" class="col-form-label">Name:</label><br>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                   name="name"><br>
                        </div>
                        @error('name ')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <div class="form-group">
                            <label for="description" class="col-form-label">Description</label><br>
                            <input type="text" class="form-control @error('description') is-invalid @enderror"
                                   id="description" name="description"><br>
                        </div>
                        @error('description ')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <div class="form-group">
                            <label for="image" class="col-form-label">Images</label><br>
                            <input type="file" class="form-control" id="image" name="image[]" multiple><br><br>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>--}}
@endsection

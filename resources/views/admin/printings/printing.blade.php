@extends('layouts.master')
@section('content')

    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">

                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-8"><h1>Tpagrutyun <b>Details</b></h1></div>
                            <div class="col-sm-4">
                                <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New
                                </button>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Photo</th>
                            <th>Created</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($printings as $printing)
                        <tr>
                            <td>{{$printing->id}}</td>
                            <td>{{$printing->name}}</td>
                            <td>{{$printing->description}}</td>
                            <td>{{$printing->image ?? 'null'}}</td>
                            <td>
                                <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons"></i></a>
                                <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"></i></a>
                                <a class="delete" title="Delete" data-toggle="tooltip"><i
                                        class="material-icons"></i></a>
                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                    {{ $printings->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

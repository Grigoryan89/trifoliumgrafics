@extends('layouts.master')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">

        </div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                <fieldset>

                    <div class="form-group">
                        <label for="name" class="col-md-2 control-label">Anun</label>

                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{ $printing->name }}" name="name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description" class="col-md-2 control-label">Nkaragrutyun</label>

                        <div class="col-md-10">
                            <input type="text" class="form-control" value="{{ $printing->description }}" name="description">
                        </div>
                    </div>




                </fieldset>
            </form>
        </div>
    </div>
    </div>






@endsection

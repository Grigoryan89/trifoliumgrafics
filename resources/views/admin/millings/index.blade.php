@extends('layouts.master')
@section('content')
    @if(session()->has('success'))
        <div
            class="fixed  left-1/2 top-0 transform-translate-x-1/2 bg-laravel text-white px-48 py-3">
            <p>
                {{session('success')}}
            </p>
        </div>
    @endif

    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-8"><h1>Ֆռեզեռովկա <b>Մանրամասներ</b></h1></div>
                <div class="col-sm-4">
                    <button type="button" class="btn btn-info add-new" data-toggle="modal"
                            data-target="#addModal"><i class="fa fa-plus"></i> Ավելացնել Ֆռեզ
                    </button>
                </div>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Անուն (EN)</th>
                <th>Նկարագ.(EN)</th>
                <th>Անուն (AM)</th>
                <th>Նկարագ.(AM)</th>
                <th>Անուն (RU)</th>
                <th>Նկարագ.(RU)</th>
                <th>Նկար</th>
                <th>Փոփոխել։ Ջնջել</th>
            </tr>
            </thead>
            <tbody>
            @foreach($millings as $item)

                <tr>
                    <td>{{$item->en_name}}</td>
                    <td>{{$item->en_description}}</td>
                    <td>{{$item->am_name}}</td>
                    <td>{{$item->am_description}}</td>
                    <td>{{$item->ru_name}}</td>
                    <td>{{$item->ru_description}}</td>
                    <td>
                        @if(!$item->images->isEmpty())
                            @foreach($item->images as $item)
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
                        <div class="row">


                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                <a href="{{route('millings.edit',$item->id)}}" class="edit" title="Edit"
                                   data-toggle="tooltip"><i
                                        class="material-icons"></i></a>
                            </div>
                            <button type="button" data-toggle="modal" class="deleteImage"
                                    style="cursor: pointer;display: inline;color: red"
                                    data-target="#delete-modal"
                                    data-url="{{route('millings.destroy', $item->id) }}"
                                    data-row="{{$item->id}}"
                                    data-name="delete_row"><i
                                    class="material-icons"></i></button>
                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            </div>
                        </div>

                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        {{ $millings->links() }}
    </div>


    <!-- Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModal"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <ul class="nav nav-tabs" style="margin-bottom: 25px">
                    <li class="active"><a data-toggle="tab" href="#en">EN</a></li>
                    <li><a data-toggle="tab" href="#am">Am</a></li>
                    <li><a data-toggle="tab" href="#ru">RU</a></li>
                </ul>
                <form action="{{route('millings.store')}}" method="post" enctype="multipart/form-data">
                    @method('POST') @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ավելացնել Նոր</h5>
                    </div>
                    <h1 style="background: red">Բոլոր դաշտերը պարտադիրեն</h1>
                    <div class="modal-body">
                        <div class="tab-content">

                            <div id="en" class="tab-pane fade in active">
                                <div class="form-group">
                                    <label class="required" for="en_name">Անուն: (EN)</label>
                                    <input class="form-control {{ $errors->has('en_name') ? 'is-invalid' : '' }}" type="text" name="en_name" id="en_name" value="{{ old('en_name') }}" required autofocus>
                                    @if($errors->has('en_name'))
                                        <div class="invalid-feedback" role="alert">
                                            {{ $errors->first('en_name') }}
                                        </div>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label for="en_description">Նկարագրություն (EN)</label>
                                    <textarea class="form-control {{ $errors->has('en_description') ? 'is-invalid' : '' }}" name="en_description" id="en_description" required>{{ old('en_description') }}</textarea>
                                    @if($errors->has('en_description'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('en_description') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div id="am" class="tab-pane fade">
                                <div class="form-group">
                                    <label class="required" for="en_name">Անուն: (AM)</label>
                                    <input class="form-control {{ $errors->has('am_name') ? 'is-invalid' : '' }}" type="text" name="am_name" id="am_name" value="{{ old('am_name') }}" required>
                                    @if($errors->has('am_name'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('am_name') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="en_description">Նկարագրություն (AM)</label>
                                    <textarea class="form-control {{ $errors->has('am_description') ? 'is-invalid' : '' }}" name="am_description" id="am_description">{{ old('am_description') }}</textarea>
                                    @if($errors->has('am_description'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('am_description') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div id="ru" class="tab-pane fade">
                                <div class="form-group">
                                    <label class="required" for="en_name">Անուն: (RU)</label>
                                    <input class="form-control {{ $errors->has('ru_name') ? 'is-invalid' : '' }}" type="text" name="ru_name" id="ru_name" value="{{ old('ru_name') }}" required>
                                    @if($errors->has('ru_name'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('ru_name') }}
                                        </div>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label for="ru_description">Նկարագրություն (RU)</label>
                                    <textarea class="form-control {{ $errors->has('ru_description') ? 'is-invalid' : '' }}" name="ru_description" id="ru_description">{{ old('ru_description') }}</textarea>
                                    @if($errors->has('ru_description'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('ru_description') }}
                                        </div>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="image" class="col-form-label">Նկար</label><br>
                            <input type="file" class="form-control" id="image" name="image[]" multiple><br><br>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Փակել</button>
                        <button type="submit" class="btn btn-primary">Պահպանել</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="delete-modal" tabindex="-1" aria-labelledby="delimglabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="delimglabel">Ջնջել տողը</h5>
                </div>
                <div class="modal-body">Իսկապե՞ս ուզում եք ջնջել տողը:</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="close-modal" data-dismiss="modal">Ոչ
                    </button>
                    <button type="button" class="delbtn btn btn-sm btn-secondary text-white btn-danger"
                            data-delete-imgid="">Ջնջել
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('.deleteImage').on('click', function () { // when the delete modal opens
                let rowId = $(this).attr('data-row'); // get the image id
                let rowName = $(this).attr('data-name'); // get the image id
                let URL = $(this).data('url');

                $(".delbtn").on("click", function (e) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    e.preventDefault();
                    jQuery.ajax({
                        type: 'POST',
                        url: URL,
                        data: {delete_row: rowName, id: rowId, '_method': 'delete'},
                        success: function (response) {
                            location.reload();
                        },
                        error: function (response) {
                            console.log('Image NOT Deleted !')
                        }
                    });
                });
            });
        });
    </script>

@endsection

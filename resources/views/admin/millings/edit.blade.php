@extends('layouts.master')
@section('content')

    <style>
        .btn:focus, .btn:active, button:focus, button:active {
            outline: none !important;
            box-shadow: none !important;
        }

        #image-gallery .modal-footer {
            display: block;
        }

        .thumb {
            margin-top: 15px;
            margin-bottom: 15px;
        }
    </style>
    <div class="-header">
        <h1 class="-name" id="exampleModalLabel">Փոփոխել</h1>
    </div>
    <h1 style="background: red">Բոլոր դաշտերը պարտադիրեն</h1>
    <ul class="nav nav-tabs" style="margin-bottom: 25px">
        <li class="active"><a data-toggle="tab" href="#en">EN</a></li>
        <li><a data-toggle="tab" href="#am">Am</a></li>
        <li><a data-toggle="tab" href="#ru">RU</a></li>
    </ul>
    <form action="{{route('millings.update',$item->id)}}" method="post"
          enctype="multipart/form-data">
        @method('PATCH') @csrf
        <div class="tab-content">

            <div id="en" class="tab-pane fade in active">
                <div class="form-group">
                    <label class="required" for="en_name">Անուն: (EN)</label>
                    <input class="form-control {{ $errors->has('en_name') ? 'is-invalid' : '' }}" type="text" name="en_name" id="en_name" value="{{ old('en_name',$item->en_name) }}" required>
                    @if($errors->has('en_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('en_name') }}
                        </div>
                    @endif

                </div>
                <div class="form-group">
                    <label for="en_description">Նկարագրություն (EN)</label>
                    <textarea class="form-control {{ $errors->has('en_description') ? 'is-invalid' : '' }}" name="en_description" id="en_description">{{ old('en_description',$item->en_description) }}</textarea>
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
                    <input class="form-control {{ $errors->has('am_name') ? 'is-invalid' : '' }}" type="text" name="am_name" id="am_name" value="{{ old('am_name',$item->am_name) }}" required>
                    @if($errors->has('am_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('am_name') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="en_description">Նկարագրություն (AM)</label>
                    <textarea class="form-control {{ $errors->has('am_description') ? 'is-invalid' : '' }}" name="am_description" id="am_description">{{ old('am_description',$item->am_description) }}</textarea>
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
                    <input class="form-control {{ $errors->has('ru_name') ? 'is-invalid' : '' }}" type="text" name="ru_name" id="ru_name" value="{{ old('ru_name',$item->ru_name) }}" required>
                    @if($errors->has('ru_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('ru_name') }}
                        </div>
                    @endif

                </div>
                <div class="form-group">
                    <label for="ru_description">Նկարագրություն (RU)</label>
                    <textarea class="form-control {{ $errors->has('ru_description') ? 'is-invalid' : '' }}" name="ru_description" id="ru_description">{{ old('ru_description',$item->ru_description) }}</textarea>
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

        <div class="-footer">
            <button type="submit" class="btn btn-primary">Փոփոխել</button>
        </div>
    </form>


    <div class="row">
        @foreach($item->images as $image)
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a data-toggle="modal" class="deleteImage" style="cursor: pointer;display: inline;"
                   data-target="#delete-modal"
                   data-url="{{route('millings.destroy', $item->id) }}"
                   data-imgId="{{$image->id}}"
                   data-name="delete_images">
                    <img
                        width="100%" height="200px"
                        src="{{ asset('storage/'.$image->url)}}"
                        alt="Preview"
                    />
                </a>
            </div>
        @endforeach
    </div>

    <div class="modal fade" id="delete-modal" tabindex="-1" aria-labelledby="delimglabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-name" id="delimglabel">Ջնջել նկարը</h5>
                </div>
                <div class="modal-body">Ուզում եք ջնջել նկարը:</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="close-modal" data-dismiss="modal">Ոչ
                    </button>
                    <button type="button" class="delbtn btn btn-sm btn-secondary text-white btn-danger"
                            data-delete-imgid="">Այո
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('.deleteImage').on('click', function () { // when the delete modal opens
                let imageId = $(this).attr('data-imgId'); // get the image id
                let imageName = $(this).attr('data-name'); // get the image id
                let URL = $(this).data('url');

                $(".delbtn").on("click", function (e) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    e.preventDefault();
                    jQuery.ajax({
                        type: "DELETE",
                        url: URL,
                        data: {delete_images: imageName, id: imageId},
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

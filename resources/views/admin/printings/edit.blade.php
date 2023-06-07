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

    <!-- Modal -->
    <div>
        <div class="dialog">
            <div class="-content">
                <form action="{{route('printings.update',$printing->id)}}" method="post"
                      enctype="multipart/form-data">
                    @method('PATCH') @csrf
                    <div class="-header">
                        <h1 class="-title" id="exampleModalLabel">Փոփոխել պրինտը</h1>
                    </div>
                    <div class="-body">
                        <div class="form-group">
                            <label for="name" class="col-form-label">Անուն:</label><br>
                            <input type="text" value="{{ $printing->name }}"
                                   class="form-control @error('name') is-invalid @enderror" id="name"
                                   name="name"><br>
                        </div>
                        @error('name ')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <div class="form-group">
                            <label for="description" class="col-form-label">Նկարագրություն</label><br>
                            <input type="text" value="{{ $printing->description }}"
                                   class="form-control @error('description') is-invalid @enderror"
                                   id="description" name="description"><br>
                        </div>
                        @error('description ')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                        <div class="form-group">
                            <label for="image" class="col-form-label">Նկար</label><br>
                            <input type="file" class="form-control" id="image" name="image[]" multiple><br><br>
                        </div>
                    </div>


                    <div class="-footer">
                        <button type="submit" class="btn btn-primary">Փոփոխել</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        <div class="row">
            @foreach($printing->images as $item)
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a data-toggle="modal" class="deleteImage" style="cursor: pointer;display: inline;"
                       data-target="#delete-modal"
                       data-url="{{route('printings.destroy', $printing->id) }}"
                       data-imgId="{{$item->id}}"
                       data-name="delete_images">
                        <img
                            width="100%" height="200px"
                            src="{{ asset('storage/'.$item->url)}}"
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
                    <h5 class="modal-title" id="delimglabel">Ջնջել նկարը</h5>
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

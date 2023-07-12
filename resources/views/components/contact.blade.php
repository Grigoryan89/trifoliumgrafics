
@if(Session::has('success'))<div class="alert alert-success d-flex justify-content-center">
    <strong>{{session('success')}}</strong>
</div>
@endif
<br>
<section class="contact_section" style="padding-bottom: 15px; padding-top: 15px">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-1">
                <h2 class="custom_heading">{{__('app.contact')}}</h2>
                <form action="{{route('contact.store')}}" method="post">
                    @method('POST') @csrf
                    <div>
                        <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" name="name"
                               value="{{ old('name') }}" placeholder="{{__('app.about_contact.name')}}" required/>
                        @if($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>
                    <div>
                        <input type="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" name="email"
                               value="{{ old('email') }}" placeholder="{{__('app.about_contact.email')}}" required/>
                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>
                    <div>
                        <input type="text" class="{{ $errors->has('phone') ? 'is-invalid' : '' }}" name="phone"
                               value="{{ old('phone') }}" placeholder="{{__('app.about_contact.phone')}} +37494000000"
                               required/>
                        @if($errors->has('phone'))
                            <div class="invalid-feedback">
                                {{ $errors->first('phone') }}
                            </div>
                        @endif
                    </div>
                    <div>
                        <input type="text" name="message" value="{{ old('message') }}" class="message-box"
                               placeholder="{{__('app.about_contact.message')}}" required/>
                        @if($errors->has('message'))
                            <div class="invalid-feedback">
                                {{ $errors->first('message') }}
                            </div>
                        @endif
                    </div>
                    <div class="d-flex  mt-4 ">
                        <button type="submit">
                            {{__('app.about_contact.send')}}
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 px-0">
                <div class="img-box">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3048.73391612941!2d44.50526327629311!3d40.170477670589875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abc5973e287db%3A0x9903156a6351e45b!2s2%20Arshakunyats%20Ave%2C%20Yerevan%200023!5e0!3m2!1sru!2sam!4v1688817420079!5m2!1sru!2sam"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<br>

@extends('layouts.app')


@section('content')
<div class="container-fluid" style="background-image: url('https://kelley.iu.edu/images/bloomington/programs/undergrad/academics/workshops/digital-transportation-logistics-workshop-topimage-768x450.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center top; width: 100vw; height: 100vh; margin-top: -20px;">
    <!-- Your content here -->


        <div class="row justify-content-center">
            <div class="col-md-8">
              
            <div class="card-header font-semibold"><h1>{{ __('Update User') }}</h1></div>


                    <div class=" card card-body shadow-black" style="background-color: rgba(184, 184, 148, 0.8);">
                        <form method="POST" action="{{ route('updateUser') }}">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <label for="firstname" class="col-md-4 col-form-label text-md-end"><h4>{{ __('Firstname') }}</h4></label>

                                <div class="col-md-6">
                                    <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                                    @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="lastname" class="col-md-4 col-form-label font-bold text-md-end"><h4>{{ __('lastname') }}</h4></label>

                                <div class="col-md-6">
                                    <input id="lastname" type="text" class="form-control @error('name') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                    @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end"><h4>{{ __('name') }}</h4></label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="mobileNumber" class="col-md-4 col-form-label text-md-end"><h4>{{ __('mobileNumber') }}</h4></label>

                                <div class="col-md-6">
                                    <input id="mobileNumber" type="text" class="form-control @error('dtp') is-invalid @enderror" name="mobileNumber" required autocomplete="mobileNumber">

                                    @error('mobileNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end"><h4>{{ __('Email Address') }}</h4></label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end"><h4>{{ __('Password') }}</h4></label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end"><h4>{{ __('Confirm Password') }}</h4></label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
    {{ __('Update User') }}
</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
@endsection



@extends('layouts.app')

@section('content')
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                <div class="card">
                    <div class="card-header">{{ __('Sign Up') }}</div>
                    <div class="content">

                    <div class="card" >
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="user-details">
                            <div class="input-box">
                            <div class="row mb-3">
                                <label for="firstname" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>

                                <div class="col-md-6">
                                    <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                                    @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
</div>
<div class="input-box">
                            <div class="row mb-3">
                                <label for="lastname" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

                                <div class="col-md-6">
                                    <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                    @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
</div>
<div class="input-box">
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            </div>
                            <div class="input-box">
                            <div class="row mb-3">
                                <label for="mobileNumber" class="col-md-4 col-form-label text-md-end">{{ __('Mobile Number') }}</label>

                                <div class="col-md-6">
                                    <input id="mobileNumber" type="text" class="form-control @error('mobileNumber') is-invalid @enderror" name="mobileNumber" required autocomplete="mobileNumber">

                                    @error('mobileNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            </div>
                            
                            <div class="input-box">
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            </div>
                            <div class="input-box">
                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            </div>
                            <div class="input-box">
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            
                            </div>
                            


<div class="input-box">

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Sign Up') }}
                                   
                                    </div>
                                </div>
</div>
                            </div>

</div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

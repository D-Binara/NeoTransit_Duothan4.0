@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background: linear-gradient(135deg, #71b7e6, #9b59b6); background-size: cover; background-repeat: no-repeat; background-position: center top; width: 100vw; height: 100vh; margin-top: -20px;">
     <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                <div class="card-header mt-6"><h1>{{ __('Login') }}</h1></div>
                <div class=" card content">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="user-details">
                        <div class="input-box">
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </div>
                        <div class="input-box">
                        <div class="row mb-3">
                            <label for="dtp" class="col-md-4 col-form-label text-md-end">{{ __('dtp') }}</label>

                            <div class="col-md-6">
                                <input id="dtp" type="number" class="form-control @error('dtp') is-invalid @enderror" name="dtp" required autocomplete="dtp">

                                @error('dtp')
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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </div>
                        <div class="box">
                        <div class="row mb-3">

</div>

</div>
                        <div class="input-box">
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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
</div>
@endsection
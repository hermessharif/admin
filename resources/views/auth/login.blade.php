@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card m-card shadow-sm">

                <div class="card-body">

                    <div class="text-center"><img src="/storage/logo.jpg" alt=""></div>

                    <form class="m-form-input" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6  offset-md-3">
                                <div class="text-center">
                                    <label for="name" class="">{{ __('پست الکترونیک') }}</label>
                                </div>
                                <div class="">
                                <input data-toggle="tooltip" data-placement="top" title="پست الکترونیک" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6  offset-md-3">
                                <div class="text-center">
                                    <label for="name" class="">{{ __('رمز ورود') }}</label>
                                </div>
                                <div class="">
                                <input data-toggle="tooltip" data-placement="top" title="رمز ورود"  id="password" type="password" class="m-form-input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-3 offset-md-4 text-center">
                                <div class="form-check text-center">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('به یاد داشته باش') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0 mt-5">
                            <div class="col-md-12 text-center" dir="rtl">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ورود') }}
                                </button>
                                <br>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('بازگردانی رمز') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card m-card shadow-sm">
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

                <div class="card-body">
                    <div class="text-center"><img src="/storage/logo.jpg" alt=""></div>

                    <form class="m-form-input" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-6  offset-md-3">
                                <div class="text-center">
                                    <label for="name" class="">{{ __('نام') }}</label>
                                </div>
                                <div class="">
                                    <input  data-toggle="tooltip" data-placement="top" title="نام" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                </div>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6  offset-md-3">
                                <div class="text-center">
                                    <label for="email" class="">{{ __('پست الکترونیک') }}</label>
                                </div>
                                <div class="">
                                    <input data-toggle="tooltip" data-placement="top" title="پست الکترونیک" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                </div>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                            <div class="col-md-6  offset-md-3">
                                <div class="text-center">
                                    <label for="name" class="">{{ __('رمز ورود') }}</label>
                                </div>
                                <div class="">
                                <input data-toggle="tooltip" data-placement="top" title="رمز ورود" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

                            <div class="col-md-6  offset-md-3">
                                <div class="text-center">
                                    <label for="name" class="">{{ __('تایید رمز') }}</label>
                                </div>
                                <div class="">
                                <input  data-toggle="tooltip" data-placement="top" title="تایید رمز" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0 mt-5">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ثبت نام') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

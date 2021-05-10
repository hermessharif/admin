@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card m-card shadow-sm">
{{--                <div class="card-header">{{ __('Reset Password') }}</div>--}}

                <div class="card-body">
                    <div class="text-center"><img src="/storage/logo.jpg" alt=""></div>

                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="m-form-input" method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            <div class="col-md-6 offset-md-3">
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

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ارسال لینک رمز جدید') }}
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

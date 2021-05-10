
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="text-center"><img src="/storage/logo.jpg" alt=""></div>
                        <div class="text-center">در دست ساخت</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    @guest--}}
{{--        <welcome-component></welcome-component>--}}
{{--    @else--}}
{{--        <welcome-component user="{{auth()->user()}}"></welcome-component>--}}
{{--    @endguest--}}
@endsection

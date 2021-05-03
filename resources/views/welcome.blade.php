
@extends('layouts.app')

@section('content')
    @guest
        <welcome-component></welcome-component>
    @else
        <welcome-component user="{{auth()->user()}}"></welcome-component>
    @endguest
@endsection

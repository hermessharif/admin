@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center" dir="rtl">
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-header">
<div class="row p-2 justify-content-between">
                        <h1 class="text-right h4">مدیریت کاربران</h1>
                        <div class="align-self-center"><a class="btn btn-sm btn-outline-success m-rad" href="{{ route('users.create') }}">+ کاربر جدید</a></div>
                    </div>
                    </div>
                    <div class="card-body" >
                        @if ($message = Session::get('success'))
                            <div dir="rtl" class="alert alert-success text-right alert-dismissible fade show" role="alert">
                                {{$message}}
                            </div>
                        @endif






    <table class="table table-hover table-striped text-right" dir="rtl">
        <thead>

        <tr>
            <th>@sortablelink('id','کد کاربری')
                </th>
            <th>@sortablelink('name','نام')</th>
            <th>@sortablelink('name','تاریخ عضویت')</th>
            <th>پست الکترونیک</th>

            <th>نقش کاربری</th>
            <th></th>
        </tr>
        </thead>
        @foreach ($data as $key => $user)
            <tr>

                <td>
                    <a class="" href="{{ route('users.show',$user->id) }}">
                        {{ $user->id }}
                    </a>
                </td>
                <td>
                    <a class="" href="{{ route('users.show',$user->id) }}">
                        {{ $user->name }}
                    </a>
                </td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->email }}</td>

                <td>
                    @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                            <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                    @endif
                </td>
                <td class="text-left">
                    <a class="btn btn-sm btn-link" href="{{ route('users.edit',$user->id) }}">ویرایش</a>
{{--                    {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}--}}
{{--                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}--}}
{{--                    {!! Form::close() !!}--}}
                </td>
            </tr>
        @endforeach
    </table>


    {!! $data->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

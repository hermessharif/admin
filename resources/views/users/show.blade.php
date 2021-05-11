@extends('layouts.app')


@section('content')
    <div class="container" dir="rtl">
        <div class="row justify-content-center" dir="rtl">
            <div class="col-md-12" dir="rtl">
                <div class="card shadow-sm" dir="rtl">
                    <div class="card-header" dir="rtl">
                        <div class="row p-2 justify-content-between">
                            <h1 class="text-right h4">{{$user->name}}</h1>
                            <div class="align-self-center"><a class="btn btn-sm btn-outline-secondary m-rad" href="{{ route('users.index') }}">برگشت به همه کاربران</a></div>
                        </div>
                    </div>
                    <div class="card-body" dir="rtl">
<div class="text-right">
    <strong>نام:</strong>
    {{ $user->name }}
</div>





                        <div class="text-right">

                <strong>پست الکترونیک:</strong>
                {{ $user->email }}
                        </div>
                        <div class="text-right">

                        <strong>نقش کاربری:</strong>
                @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                        <label class="badge badge-success">{{ $v }}</label>
                    @endforeach
                @endif
                        </div>
    </div>
                    </div>
                    </div>
                    </div>
                    </div>
    </div>
@endsection

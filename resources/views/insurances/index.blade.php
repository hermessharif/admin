@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Insurances</h2>
            </div>
            <div class="pull-right">
                @can('insurance-create')
                    <a class="btn btn-success" href="{{ route('insurances.create') }}"> Create New Insurance</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($insurances as $insurance)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $insurance->name }}</td>
                <td>{{ $insurance->detail }}</td>
                <td>
                    <form action="{{ route('insurances.destroy',$insurance->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('insurances.show',$insurance->id) }}">Show</a>
                        @can('insurance-edit')
                            <a class="btn btn-primary" href="{{ route('insurances.edit',$insurance->id) }}">Edit</a>
                        @endcan


                        @csrf
                        @method('DELETE')
                        @can('insurance-delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        @endcan
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


    {!! $insurances->links() !!}


@endsection

@extends('layouts.app')

@section('content')

    <h1></h1>



<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Customers <a href="{{ url('customers/create') }}" class="btn btn-primary pull-right btn-sm">Add New Customer</a>
                </div>
                <div class="panel-body">
                    <div class="table">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>S.No</th><th>Title</th><th>Forename</th><th>Surname</th><th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            {{-- */$x=0;/* --}}
                            @foreach($customers as $item)
                                {{-- */$x++;/* --}}
                                <tr>
                                    <td>{{ $x }}</td>
                                    <td><a href="{{ url('customers', $item->id) }}">{{ $item->title }}</a></td><td>{{ $item->forename }}</td><td>{{ $item->surname }}</td>
                                    <td>
                                        <a href="{{ url('customers/' . $item->id . '/edit') }}">
                                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                                        </a> /
                                        {!! Form::open([
                                            'method'=>'DELETE',
                                            'url' => ['customers', $item->id],
                                            'style' => 'display:inline'
                                        ]) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="pagination"> {!! $customers->render() !!} </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@extends('layouts.app')

@section('content')

    <h1></h1>



<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Jobs 
                </div>
                <div class="panel-body">
                    <div class="table">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>S.No</th><th>Date</th><th>Description</th><th>Customer Id</th><th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            {{-- */$x=0;/* --}}
                            @foreach($jobs as $item)
                                {{-- */$x++;/* --}}
                                <tr>
                                    <td>{{ $x }}</td>
                                    <td><a href="{{ url('jobs', $item->id) }}">{{ $item->date }}</a></td><td>{{ $item->description }}</td><td>{{ $item->customer_id }}</td>
                                    <td>
                                        <a href="{{ url('jobs/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                                        {!! Form::open([
                                            'method'=>'DELETE',
                                            'url' => ['jobs', $item->id],
                                            'style' => 'display:inline'
                                        ]) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="pagination"> {!! $jobs->render() !!} </div>
                        <a href="{{ url('jobs/create') }}" class="btn btn-primary pull-right btn-sm">Add New Job</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Personal Details</div>

                    <div class="panel-body">
                       <p> {{ $customer->ref }} </p>
                       <p> {{ $customer->title }} {{ $customer->forename }} {{ $customer->surname }}  </p>
                       <p> {{ $customer->telephone }} </p>
                       <p> <a href="mailto:{{ $customer->email }}">{{ $customer->email }}</a> </p>
                       <a href="{{ url('customers/' . $customer->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a>
                       {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['customers', $customer->id],
                            'style' => 'display:inline'
                        ]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!} 
                    </div>

            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Address</div>
                <div class="panel-body">
                   <p> {{ $customer->house }} {{ $customer->street }}</p>
                   <p> {{ $customer->town}} </p>
                   <p> {{ $customer->county }}  </p>
                   <p> {{ $customer->postcode }}  </p>
                   <br>
                </div>
            </div>
        </div>
    </div>
 
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Jobs 
                </div>
                <div class="panel-body">
                    <div class="table">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Date</th><th>Description</th><th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($customer->jobs as $item)
                                <tr>
                                    <td><a href="{{ url('jobs', $item->id) }}">{{ $item->date }}</a></td><td>{{ $item->description }}</td><td>{{ $item->Status }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                         <a href="{{ url('jobs/create?customer=' . $customer->id) }}" class="btn btn-primary pull-right btn-sm">Add New Job</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>



@endsection
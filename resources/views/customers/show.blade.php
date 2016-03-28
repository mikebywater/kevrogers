@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Personal Details</div>

                    <div class="panel-body">
                       <p> {{ $customer->id }} </p>
                       <p> {{ $customer->title }} </p>
                       <p> {{ $customer->forename }} </p>
                       <p> {{ $customer->surname }}  </p>
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
                                    <th>S.No</th><th>Date</th><th>Description</th><th>Customer Id</th>
                                </tr>
                            </thead>
                            <tbody>
                            {{-- */$x=0;/* --}}
                            @foreach($customer->jobs as $item)
                                {{-- */$x++;/* --}}
                                <tr>
                                    <td>{{ $x }}</td>
                                    <td><a href="{{ url('jobs', $item->id) }}">{{ $item->date }}</a></td><td>{{ $item->description }}</td><td>{{ $item->customer_id }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                         <a href="{{ url('jobs/create') }}" class="btn btn-primary pull-right btn-sm">Add New Job</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Job</div>

                <div class="panel-body">
                    {{ $job->date }}<br>
                    {{ $job->description }}<br>
                    {{ $job->customer->surname}}<br>
                    <a href="{{ url('estimates/create?job=' . $job->id) }}" class="btn btn-primary pull-right btn-sm">Create Estimate</a> 
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
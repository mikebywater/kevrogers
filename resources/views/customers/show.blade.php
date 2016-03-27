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
    </div>
</div>



@endsection
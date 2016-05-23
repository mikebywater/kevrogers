@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row bs-wizard" style="border-bottom:0;">
        
        <div class="col-xs-3 bs-wizard-step complete">
          <div class="text-center bs-wizard-stepnum">Calculate</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center"> Enter all the details of the job including materials. </div>
        </div>
        
        <div class="col-xs-3 bs-wizard-step active"><!-- complete -->
          <div class="text-center bs-wizard-stepnum">Estimate</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center"> Create an estimate from the currently entered job details. You can still go back and edit the job details at this stage and create further estimates. You can skip the stage. </div>
        </div>
        
        <div class="col-xs-3 bs-wizard-step disabled"><!-- complete -->
          <div class="text-center bs-wizard-stepnum">Invoice</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center"> Create an invoice for the job. This is should be done only after the job is complete as after the job is invoiced it cannot be amended. </div>
        </div>
        
        <div class="col-xs-3 bs-wizard-step disabled"><!-- active -->
          <div class="text-center bs-wizard-stepnum">Payment</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">Mark the generated invoice as paid. </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Job Details</div>

                <div class="panel-body">
                    {{ $job->date }}<br>
                    {{ $job->description }}<br>
                    {{ $job->customer->surname}}<br>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Estimates 
                </div>
                <div class="panel-body">
                    <div class="table">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Date</th><th>Description</th><th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            {{-- */$x=0;/* --}}
                            @foreach($job->estimates as $item)
                                {{-- */$x++;/* --}}
                                <tr>
                                    <td><a href="{{ url('estimates', $item->id) }}">{{ $item->date }}</a></td><td>{{ $item->description }}</td><td></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    <a href="{{ url('estimates/create?job=' . $job->id) }}" class="btn btn-primary pull-right btn-sm">Create Estimate</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Invoice 
                </div>
                <div class="panel-body">
                    <div class="table">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Date</th><th>Description</th><th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            {{-- */$x=0;/* --}}
                            @foreach($job->invoices as $item)
                                {{-- */$x++;/* --}}
                                <tr>
                                    <td><a href="{{ url('invoices', $item->id) }}">{{ $item->date }}</a></td><td>{{ $item->description }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <a href="{{ url('invoices/create') }}" class="btn btn-primary pull-right btn-sm">Add New Invoice</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
@extends('layouts.app')

@section('content')

<script>
    var items = {!!$job->items!!};
    var totalTime = {!!$job->time!!}
</script>



<div class="container" id="app">
    <div class="row bs-wizard" style="border-bottom:0;">
        
        <div class="col-xs-3 bs-wizard-step @if($job->status < 1) active @else complete @endif">
          <div class="text-center bs-wizard-stepnum">Calculate</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">
            @if($job->status < 1)
                Enter all the details of the job including materials.
            @endif
            </div>
        </div>
        
        <div class="col-xs-3 bs-wizard-step @if($job->status < 1) disabled @elseif($job->status == 1) active @else complete @endif"><!-- complete -->
          <div class="text-center bs-wizard-stepnum">Estimate</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">
            @if($job->status == 1)
                Create an estimate from the currently entered job details. You can still go back and edit the job details at this stage and create further estimates. You can skip the stage.
            @endif
           </div>
        </div>
        
        <div class="col-xs-3 bs-wizard-step @if($job->status < 2) disabled @elseif($job->status == 2) active @else complete @endif"><!-- complete -->
          <div class="text-center bs-wizard-stepnum">Invoice</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">
            @if($job->status == 2)
                Create an invoice for the job. This is should be done only after the job is complete as after the job is invoiced it cannot be amended.
            @endif
           </div>
        </div>
        
        <div class="col-xs-3 bs-wizard-step @if($job->status < 3) disabled @elseif($job->status == 3) active @else complete @endif"><!-- active -->
          <div class="text-center bs-wizard-stepnum">Payment</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">
            @if($job->status == 3)
                Mark the generated invoice as paid.
            @endif
           </div>
        </div>
    </div>
    <div class="row">

        <div class="col-md-1">
            <form method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put"/>
                <input type="hidden" name="status" value="{{$job->status - 1}}"/>
                <button class="btn btn-md btn-danger">Previous</button>
            </form>
          </div>

        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Basic Details</div>
                <div class="panel-body">
                    <strong> Date </strong> {{ $job->date }}<br>
                    <strong> Name </strong> {{ $job->customer->forename}} {{ $job->customer->surname}}<br>
                    <strong> Description</strong> {{ $job->description }}<br>
                    <span class="pull-right"><strong > Time</strong> @{{totalTime}}</span><br>
                </div>
            </div>
        </div>

        <div class="col-md-1">
            <form method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put"/>
                <input type="hidden" name="status" value="{{$job->status + 1}}"/>
                <input type="hidden" name="items" value="@{{itemString}}"/>
                <input type="hidden" name="time" value="@{{totalTime}}"/>
                <button class="btn btn-md btn-success">Next</button>
            </form>
        </div>

    </div>
    <div class="row">
        @if($job->status < 1)
            @include('jobs._calculate')
        @endif
        @if($job->status >= 1)
            @include('jobs._estimates')
        @endif
        @if($job->status == 2)
            @include('jobs._invoices')
        @endif
    </div>
</div>


<script src="/js/job.js"></script>


@endsection
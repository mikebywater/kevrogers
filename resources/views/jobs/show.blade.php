@extends('layouts.app')

@section('content')

<script>
var items = {!!$job->items!!}
console.log(items)
</script>


<div class="container" id="app">

    <div class="row bs-wizard" style="border-bottom:0;">
        
        <div class="col-xs-3 bs-wizard-step complete">
          <div class="text-center bs-wizard-stepnum">Calculate</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">
            @if($job->status < 1)
                Enter all the details of the job including materials.
            @endif
            </div>
        </div>
        
        <div class="col-xs-3 bs-wizard-step active"><!-- complete -->
          <div class="text-center bs-wizard-stepnum">Estimate</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">
            @if($job->status == 1)
                Create an estimate from the currently entered job details. You can still go back and edit the job details at this stage and create further estimates. You can skip the stage.
            @endif
           </div>
        </div>
        
        <div class="col-xs-3 bs-wizard-step disabled"><!-- complete -->
          <div class="text-center bs-wizard-stepnum">Invoice</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">
            @if($job->status == 2)
                Create an invoice for the job. This is should be done only after the job is complete as after the job is invoiced it cannot be amended.
            @endif
           </div>
        </div>
        
        <div class="col-xs-3 bs-wizard-step disabled"><!-- active -->
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
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Job Details</div>

                <div class="panel-body">
                    {{ $job->date }}<br>
                    {{ $job->description }}<br>
                    {{ $job->customer->surname}}<br>
                    <ul>
                     <li v-for="wall in items.walls">@{{wall.type}}</li>
                     </ul>

                </div>

            </div>
        </div>
    </div>

@if($job->status > 1)

 @include('jobs._estimates')

@endif

@if($job->status > 2)

 @include('jobs._invoices')

@endif


</div>


<script src="/js/job.js"></script>


@endsection
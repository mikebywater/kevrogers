@extends('layouts.app')

@section('content')

<script>
var items = {!!$job->items!!}
console.log(items)
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
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Basic Details</div>

                <div class="panel-body">
                    <strong> Date </strong> {{ $job->date }}<br>
                    <strong> Name </strong> {{ $job->customer->forename}} {{ $job->customer->surname}}<br>
                    <strong> Description</strong> {{ $job->description }}<br>
                    
                    

                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Labour</div>

                <div class="panel-body">
                    <h4>Walls</h4>

                    <table class="table table-striped">
                        <tr>
                            <th>Type</th>
                            <th>Height</th>
                            <th>Width</th>
                            <th style="width:100px">Time</th>
                        </tr>
                        <tr v-for="wall in items.walls">
                            <td>@{{wall.type}}</td>
                            <td>@{{wall.height}}</td>
                            <td>@{{wall.width}}</td>
                            <td></td>
                        </tr>
                    </table>

                    <h4>Doors</h4>

                    <table class="table table-striped">
                        <tr>
                            <th>Type</th>
                            <th style="width:100px">Time</th>
                        </tr>
                        <tr v-for="door in items.doors">
                            <td>@{{door.type}}</td>
                            <td></td>
                        </tr>
                    </table>
                    <textarea>@{{itemString}}</textarea>

                </div>

            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Tasks</div>

                <div class="panel-body">
                    <h4>Walls / Ceilings</h4>
                    <select id = "wall-type">   
                        <option selected>Paper Wall</option>
                        <option>Paint Wall</option>
                        <option>Ceiling</option>


                    </select>
                                        <select id = "wall-type">   
                        <option selected>Living Room</option>
                        <option>Bedroom</option>
                        <option>Dining Room</option>


                    </select>
                    <input style="width:50px;" type = "number" id = "wall-height">
                    <input style="width:50px;" type = "number" id = "wall-width">
                    <button class="btn btn-primary btn-xs" v-on:click="addWall">Add Wall Task</button>

                    <h4>Doors</h4>
                    <select id = "door-type">   
                        <option selected>Sand Door</option>
                        <option>Paint Door</option>
                    </select>
                    <button class="btn btn-primary btn-xs" v-on:click="addDoor">Add Door Task</button>

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
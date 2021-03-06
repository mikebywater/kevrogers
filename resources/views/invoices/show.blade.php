@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Invoice</div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID.</th> <th>Date</th><th>Description</th><th>Job Id</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $invoice->id }}</td> <td> {{ $invoice->date }} </td><td> {{ $invoice->description }} </td><td> {{ $invoice->job_id }} </td>
                                </tr>
                            </tbody>    
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
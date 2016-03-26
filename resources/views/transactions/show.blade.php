@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Transaction</div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID.</th> <th>Date</th><th>Description</th><th>Invoice Id</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $transaction->id }}</td> <td> {{ $transaction->date }} </td><td> {{ $transaction->description }} </td><td> {{ $transaction->invoice_id }} </td>
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
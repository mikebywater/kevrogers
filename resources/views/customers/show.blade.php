@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Customer</div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID.</th> <th>Title</th><th>Forename</th><th>Surname</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $customer->id }}</td> <td> {{ $customer->title }} </td><td> {{ $customer->forename }} </td><td> {{ $customer->surname }} </td>
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
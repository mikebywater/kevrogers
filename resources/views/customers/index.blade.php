@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Customers 
                </div>
                <div class="panel-body">
                    <a href="#search" class="btn btn-primary btn-sm pull-right">Search</a>   
                    <div class="table">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Customer Number</th><th>Surname</th><th>Forename</th><th>Address</th><th>Postcode</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($customers as $item)
                                <tr>
                                    <td>
                                        <a href="{{ url('customers', $item->id) }}">{{ $item->ref}}</a>
                                    </td>
                                    <td>{{ $item->surname }}</td>
                                    <td>{{ $item->forename }}</td>
                                    <td>{{ $item->house }} {{ $item->street }}</td>
                                    <td>{{ $item->postcode }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="pagination"> {!! $customers->appends(Request::only('q'))->render() !!} </div>
                        <a href="{{ url('customers/create') }}" class="btn btn-primary pull-right btn-sm">Add New Customer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="search">
    <button type="button" class="close">×</button>
    <form method="get">
        <input type="search" name="q" value="" placeholder="type keyword(s) here" autocomplete="off" />
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>


@endsection

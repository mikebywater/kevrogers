@extends('layouts.pdf')

@section('content')

    <style>
        body{
            font-size : 14px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            border-style : solid;
            border-width : 2px;


        }

        .border {
            border-style : solid;
            border-width : 2px;
            padding: 4px;
            width:300px;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }
        .price {
            width : 100px;
            text-align: right;
        }
        .total
        {   border-style : solid;
            border-width : 2px;
            background-color : #ccc;
        }
        .pull-right{
            text-align : right;
            float:right;
        }
    </style>

<div class="container" id="app">
    <div class="pull-right">
        <p>31 The Savannahs</p>
        <p>Wellington</p>
        <p>Telford</p>
        <p>Shropshire</p>
        <p>TF1 3JD<</p>
        <h3>Estimate {{$estimate->ref}}</h3>
    </div>
    <div class="border">
        <p><strong>FAO </strong></p>
        <p>{{$estimate->house}} {{$estimate->street}}</p>
        <p>{{$estimate->town}}</p>
        <p>{{$estimate->county}}</p>
    </div>
    <h4>Labour</h4>
    <table class="invoice-table">
        <tbody>

            @foreach(json_decode($estimate->items)->walls as $wall)
                <tr>
                  <td> {{ $wall->type }} </td><td class="price">£ {{ number_format ( ($wall->time * 17), 2 ) }}</td>
                </tr>
            @endforeach

            @foreach(json_decode($estimate->items)->doors as $door)
                <tr>
                    <td> {{ $door->type }} </td><td class="price">£ {{ number_format ( ($door->time * 17) ,2)}}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="total">
                <th>Total Labour</th><th class="price">£ {{ $estimate->totalLabourPrice }}</th>
            </tr>
        </tfoot>
    </table>
    <br/>
    <h4>Materials</h4>
    <table class="invoice-table">
        <tbody>

            <tr>
                <td> Paint </td><td class="price">£  -- </td>
            </tr>
            <tr class="total">
                <th> Total Materials</th><th class="price">£ {{ $estimate->price }}</th>
            </tr>


        </tbody>
    </table>
</div>

<h1 class="pull-right">£ {{$estimate->totalPrice}}</h1>


@endsection
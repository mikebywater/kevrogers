@extends('layouts.pdf')

@section('content')

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border-style : solid;
            border-width : 2px;
            font-size : 14px;

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
    </style>

<div class="container" id="app">
    <h3>Estimate {{$estimate->ref}}</h3>
    <h4>Labour</h4>
    <table class="invoice-table">
        <tbody>

            @foreach(json_decode($estimate->items)->walls as $wall)
                <tr>
                  <td> {{ $wall->type }} </td><td class="price">£ {{ $wall->time * 17 }}</td>
                </tr>
            @endforeach

            @foreach(json_decode($estimate->items)->doors as $door)
                <tr>
                    <td> {{ $door->type }} </td><td class="price">£ {{ $door->time * 17 }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="total">
                <th>Total Labour</th><th class="price">£ {{ $estimate->price }}</th>
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




@endsection
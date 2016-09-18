@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-4">
          <div class="circle-tile ">
            <a href="#"><div class="circle-tile-heading dark-blue"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
            <div class="circle-tile-content dark-blue">
              <div class="circle-tile-description text-faded">Customers</div>
              <div class="circle-tile-number text-faded ">{{$customers}}</div>
              <a class="circle-tile-footer" href="/customers">More Info <i class="fa fa-chevron-circle-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="circle-tile ">
            <a href="#"><div class="circle-tile-heading orange"><i class="fa fa-paint-brush fa-fw fa-3x"></i></div></a>
            <div class="circle-tile-content orange">
              <div class="circle-tile-description text-faded"> Jobs Not Invoiced</div>
              <div class="circle-tile-number text-faded ">{{$notInvoiced}}</div>
              <a class="circle-tile-footer" href="/invoices">More Info <i class="fa fa-chevron-circle-right"></i></a>
            </div>
          </div>
        </div>
         
        <div class="col-md-4">
          <div class="circle-tile ">
            <a href="#"><div class="circle-tile-heading red"><i class="fa fa-gbp fa-fw fa-3x"></i></div></a>
            <div class="circle-tile-content red">
              <div class="circle-tile-description text-faded"> Invoices Not Paid </div>
              <div class="circle-tile-number text-faded ">{{$oustanding}}</div>
              <a class="circle-tile-footer" href="/invoices">More Info <i class="fa fa-chevron-circle-right"></i></a>
            </div>
          </div>
        </div>






      </div> 
    </div>  
</div>
@endsection

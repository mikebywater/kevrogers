<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests;
use App\Invoice;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::count();
        $outstanding = Invoice::count();
        $monthlyIncome = Invoice::count();
        $monthlyProjected = Invoice::count();
        return view('home' , ['customers' => $customers, 'oustanding' => $outstanding, 'monthlyIncome' => $monthlyIncome, 'monthlyProjected' => $monthlyProjected]);
    }
}

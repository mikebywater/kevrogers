<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Job;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Session;

class JobsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $jobs = Job::paginate(15);

        return view('jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $customerId = $_GET['customer'];

        if ($customerId)
        {
            $customer = Customer::findOrFail($customerId);
        }
        else
        {
            $customer="";
        }
        return view('jobs.create', ['customer' => $customer]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        $job = Job::create($request->all());

        Session::flash('flash_message', 'Job added!');

        return redirect('jobs/' . $job->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
       $job = Job::findOrFail($id);

        return view('jobs.show', compact('job'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $job = Job::findOrFail($id);

        return view('jobs.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $job = Job::findOrFail($id);
        $job->fill($request->all());


        $job->save();

        Session::flash('flash_message', 'Job updated!');

        return redirect('jobs/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        Job::destroy($id);

        Session::flash('flash_message', 'Job deleted!');

        return redirect('jobs');
    }

}

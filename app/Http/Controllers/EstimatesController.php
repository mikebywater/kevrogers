<?php

namespace App\Http\Controllers;

use App\Job;
use App\Estimate;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Session;

class EstimatesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $estimates = Estimate::paginate(15);

        return view('estimates.index', compact('estimates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $jobId = $_GET['job'];
        
        if ($jobId)
        {
            $job = Job::findOrFail($jobId);
        }
        else
        {
            $job="";
        }

        return view('estimates.create', ['job' => $job]);
    }

    /**
     * Store a newly created resource in storage. 
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Estimate::create($request->all());

        Session::flash('flash_message', 'Estimate added!');

        return redirect("jobs/$request->job_id");
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
        $estimate = Estimate::findOrFail($id);

        $pdf = \PDF::loadView('estimates.show', compact('estimate'));
        return $pdf->stream();
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
        $estimate = Estimate::findOrFail($id);

        return view('estimates.edit', compact('estimate'));
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
        
        $estimate = Estimate::findOrFail($id);
        $estimate->update($request->all());

        Session::flash('flash_message', 'Estimate updated!');

        return redirect('estimates');
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
        Estimate::destroy($id);

        Session::flash('flash_message', 'Estimate deleted!');

        return redirect('estimates');
    }

}

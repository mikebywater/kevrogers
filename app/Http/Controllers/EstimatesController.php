<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Estimate;
use Illuminate\Http\Request;
use Carbon\Carbon;
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
        return view('estimates.create');
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

        return redirect('estimates');
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

        return view('estimates.show', compact('estimate'));
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

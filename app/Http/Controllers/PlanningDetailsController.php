<?php

namespace App\Http\Controllers;

use App\Models\PlanningDetail;
use App\Models\Projects;
use Illuminate\Http\Request;

class PlanningDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $project = Projects::latest()->paginate(5);

        //render view with Plannings
        return view('pages.planning-details.index', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PlanningDetail $planningDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PlanningDetail $planningDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PlanningDetail $planningDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PlanningDetail $planningDetail)
    {
        //
    }
}

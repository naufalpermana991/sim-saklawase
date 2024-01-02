<?php

namespace App\Http\Controllers;

use App\Models\ManOfPower;
use App\Models\Projects;
use Illuminate\Http\Request;

class MopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.man-of-power.create');
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
    public function show($projectId)
    {

        $project = Projects::find($projectId);

        return view('pages.man-of-power.index', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ManOfPower $manOfPower)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ManOfPower $manOfPower)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ManOfPower $manOfPower)
    {
        //
    }
}

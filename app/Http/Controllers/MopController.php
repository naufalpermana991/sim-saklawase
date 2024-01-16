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
        $project = Projects::find(1);
        $mop = ManOfPower::all();
        return view('pages.man-of-power.index', compact('project', 'mop'));
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
        $request->validate([
            "worker_name1" => "required",
            "worker_name2" => "required",
            "worker_name3" => "required",
            "worker_name4" => "required",
        ]);

        $input = $request->all();
        ManOfPower::create($input);
        return redirect()->route('mop.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show($projectId)
    {

        $project = Projects::find(1);
        $mop = ManOfPower::all();

        return view('pages.man-of-power.index', compact('project', 'mop'));
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

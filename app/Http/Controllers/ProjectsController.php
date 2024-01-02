<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use App\Traits\showPlanning;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use GoogleMaps\ServiceProvider\GoogleMapsServiceProvider;
use Illuminate\Support\Str;

class ProjectsController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get posts
        $project = Projects::latest()->paginate(5);

        //render view with Plannings
        return view('pages.index', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'project_name' => 'required',
            'cost_center' => 'required',
            'wo_number' => 'required',
            'location' => 'required',
            'project_value' => 'required',
            'initial_project' => 'required'
        ]);

        $input = $request->all();

        $input['slug'] = Str::slug($request->initial_project);

        Projects::create($input);

        return redirect()->route('projects.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {

        $project = Projects::where('slug', $slug)->first();

        // Check if the project is not found
        if (!$project) {
            abort(404); // Or handle it in a way that fits your application
        }

        return view('pages.projects.detail', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projects $projects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projects $projects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // ...
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}

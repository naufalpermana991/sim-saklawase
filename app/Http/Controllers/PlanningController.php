<?php

namespace App\Http\Controllers;

use App\Models\Planning;
use App\Models\Projects;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;



class PlanningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get posts
        $project = Planning::with('project')->orderBy('id')->get();

        //render view with Plannings
        return view('pages.planning.index', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.planning.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'task_name' => 'required',
            'sub_task' => 'nullable',
            'date_started' => 'required',
            'date_finished' => 'required',
            'mop' => 'required',
            'percentage' => 'required'
        ]);

        $input = $request->all();

        Planning::create($input);

        return redirect()->route('planning.index')->with('success', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     */

    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $planning = Planning::findOrFail($id);
        return view('pages.planning.edit', compact('planning'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'task_name' => 'required',
            'sub_task' => 'nullable',
            'date_started' => 'required',
            'date_finished' => 'required',
            'mop' => 'required',
            'percentage' => 'required'
        ]);

        $planning = Planning::findOrFail($id);
        $planning->update([
            'task_name' => $request->task_name,
            'sub_task' => $request->sub_task,
            'date_started' => $request->date_started,
            'date_finished' => $request->date_finished,
            'mop' => $request->mop,
            'percentage' => $request->percentage
        ]);

        return redirect()->route('planning.index')->with(['success' => 'Data Berhasil Diperbarui!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $planning = Planning::findOrFail($id);
        $planning->delete();

        return redirect()->route('planning.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}

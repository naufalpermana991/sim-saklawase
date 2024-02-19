<?php

namespace App\Http\Controllers;

use App\Models\Actual;
use App\Models\Projects;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ActualController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project = Projects::find(1);
        $actual = Actual::all();
        return view('pages.actual.index', compact('project', 'actual'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.actual.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'task_name' => 'required',
            'start_date' => 'required|date',
            'activities' => 'required',
            'results' => 'required'
        ]);

        $input = $request->all();

        Actual::create($input);

        return redirect()->route('actual.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $project = Projects::where('slug', $slug)->first();
        $actual = Actual::all();

        return view('pages.actual.index', compact('project', 'actual'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $actual = Actual::findOrFail($id);
        return view('pages.actual.edit', compact('actual'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'task_name' => 'required',
            'start_date' => 'required|date',
            'activities' => 'required',
            'results' => 'required',
        ]);

        //get post by ID
        $actual = Actual::findOrFail($id);

        $actual->update([
            'task_name' => $request->task_name,
            'start_date' => $request->start_date,
            'activities' =>  $request->activities,
            'results' =>  $request->results,
        ]);

        return redirect()->route('actual.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): RedirectResponse
    {
        $actual = Actual::findOrFail($id);
        $actual->delete();

        return redirect()->route('actual.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}

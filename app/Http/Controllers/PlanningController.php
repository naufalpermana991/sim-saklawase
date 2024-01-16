<?php

namespace App\Http\Controllers;

use App\Models\Planning;
use App\Models\Projects;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlanningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Projects $project)
    {
        // Find the project with the specified ID
        $project = Projects::find(1);

        // Get all planning tasks related to the project
        $planning = Planning::all();

        return view('pages.planning.index', compact('project', 'planning'));
    }

    public function create()
    {
        // Retrieve projects for dropdown
        // $projects = Projects::all();

        return view('pages.planning.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'task_name' => 'required',
            'volume' => 'required',
            'unit' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'mop' => 'required',
            'percentage' => 'required',
            'sub_task' => $request->input('userChoice') == 'yes' ? 'required' : ''
        ]);

        $input = $request->all();

        Planning::create($input);

        return redirect()->route('planning.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show()
    {
        // Find the project with the specified ID
        $project = Projects::find(1);

        // Get all planning tasks related to the project
        $planning = Planning::all();

        return view('pages.planning.index', compact('project', 'planning'));
    }

    public function edit(string $id): View
    {
        //get planning by ID
        $planning = Planning::findOrFail($id);
        $sub_task = $planning->sub_task;

        //render view with planning
        return view('pages.planning.edit', compact('planning'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'task_name' => 'required',
            'volume' => 'required',
            'unit' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'mop' => 'required',
            'percentage' => 'required',
            'sub_task' => $request->input('userChoice') == 'yes' ? 'required' : '',
        ]);

        // unset($input['sub_task']);

        //get post by ID
        $planning = Planning::findOrFail($id);

        $planning->update([
            'task_name' => $request->task_name,
            'volume' => $request->volume,
            'unit' => $request->unit,
            'sub_task' => $request->sub_task,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'mop' => $request->mop,
            'percentage' => $request->percentage
        ]);

        return redirect()->route('planning.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(Projects $project, int $id): RedirectResponse
    {
        $planning = Planning::findOrFail($id);
        $planning->delete();

        return redirect()->route('planning.index', ['initial_project' => $project])->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function get()
    {
        $planning = Planning::all();

        $ganttData = [];
        foreach ($planning as $task) {
            $ganttData[] = [
                'id' => $task->id,
                'text' => $task->task_name,
                'start_date' => $task->start_date,
                'duration' => $task->end_date, // Adjust this field to match the one in your model
            ];
        }

        return response()->json([
            'data' => $ganttData,
        ]);
    }
}

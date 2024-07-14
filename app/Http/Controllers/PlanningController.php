<?php

namespace App\Http\Controllers;

use App\Models\Planning;
use App\Models\Projects;
use DateTime;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Carbon\Carbon;
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
        $projects = Projects::all();
        return view('pages.planning.create', compact('projects'));
    }

    public function store(Request $request, Projects $project)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'project_id' => 'required|exists:projects,id',
            'task_name' => 'required|string|max:255',
            'sub_task' => 'nullable|string|max:255',
            'volume' => 'required|numeric',
            'unit' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'mop' => 'required|numeric',
            'percentage' => 'required|numeric|between:0,100',
        ]);

        $startDate = new \DateTime($validatedData['start_date']);
        $endDate = new \DateTime($validatedData['end_date']);
        $duration = $startDate->diff($endDate)->days;

        // Create new Planning instance with validated data
        $planning = new Planning($validatedData);
        $planning->duration = $duration;
        $planning->save(); // Save the Planning instance

        // Redirect with success message
        return redirect()->route('planning.index')->with('success', 'Planning added successfully.');
    }

    public function show($slug)
    {
        // Find the project with the specified slug
        $project = Projects::where('slug', $slug)->first();

        // Get all planning tasks related to the project
        $planning = Planning::where('project_id', $project->id)->get();

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
            'duration' => 'required',
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
            'duration' => $request->duration,
            'end_date' => $request->end_date,
            'mop' => $request->mop,
            'percentage' => $request->percentage
        ]);

        return redirect()->route('planning.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(Projects $project, $id)
    {
        $planning = Planning::findOrFail($id);
        $planning->delete();

        return redirect()->route('planning.index')->with('success', 'Planning deleted successfully.');
    }


    public function get()
    {
        $planning = Planning::all();

        $ganttData = [];
        foreach ($planning as $task) {
            $startDate = new DateTime($task->start_date);
            $endDate = new DateTime($task->end_date);
            $duration = $endDate->diff($startDate)->days; // Adjust this line to match the duration format you need

            $ganttData[] = [
                'id' => $task->id,
                'text' => $task->task_name,
                'start_date' => $task->start_date,
                'duration' => $duration,
            ];
        }

        return response()->json([
            'data' => $ganttData,
        ]);
    }
}

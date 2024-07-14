<?php

namespace App\Http\Controllers;

use App\Models\Actuals;
use App\Models\Planning;
use App\Models\Projects;
use DateTime;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ActualsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Find the project with the specified ID
        $project = Projects::find(1);

        // Get all planning tasks related to the project
        $actuals = Actuals::all();
        return view('pages.actuals.index', compact('project', 'actuals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $plannings = Planning::all();
        return view('pages.actuals.create', compact('plannings'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate(
            $request,
            [
                "planning_id" => "required|exists:plannings,id",
                "days" => "required",
                "start_date" => "required|date",
                "activities" => "required",
                "results" => "required",
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]
        );

        $planning = Planning::where('start_date', $request->start_date)->first();
        $taskName = $planning ? $planning->task_name : '(No Task Name)';

        //upload image
        $image = $request->file('image');
        $imagePath = $image->storeAs('/public/img', $image->hashName());

        Actuals::create([
            "planning_id" => $request->planning_id,
            "days" => $request->days,
            "start_date" => $request->start_date,
            "activities" => $request->activities,
            "results" => $request->results,
            'image' => $imagePath,
            'task_name' => $taskName,
        ]);


        return redirect()->route('actuals.index', ['activeTab' => 'planning'])->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $project = Projects::where('slug', $slug)->first();
        $actuals = Actuals::all();

        return view('pages.actuals.index', compact('project', 'actuals'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Actuals $actuals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Actuals $actuals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Actuals $actuals)
    {
        //
    }

    public function getActual()
    {
        $actual = Actuals::all();

        $ganttData = [];
        foreach ($actual as $task) {
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

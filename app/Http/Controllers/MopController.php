<?php

namespace App\Http\Controllers;

use App\Models\ManOfPower;
use App\Models\Projects;
use App\Models\Planning;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class MopController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function fetchPlanningTask(Request $request)
    {
        $data['plannings'] = Planning::where("id", $request->id)->get("task_name");
        return response()->json($data);
    }
    public function fetchPlanningDate(Request $request)
    {
        $data['plannings'] = Planning::where("id", $request->id)->get("start_date");
        return response()->json($data);
    }
    public function index(Projects $project, $activeTab = null)
    {
        // Find the project with the specified ID
        $project = Projects::find(1);

        // Get all planning tasks related to the project
        $mop = ManofPower::all();
        return view('pages.man-of-power.index', compact('project', 'mop'));
    }

    public function getEmployeeDetails($empid = 0)
    {
        $employee = ManOfPower::find($empid);

        $html = "";
        if (!empty($employee)) {
            $html = "<tr>
              <td style='padding: 1rem; width='30%'><b>Worker (1):</b></td>
              <td style='padding: 1rem; width='70%'> " . $employee->worker_name1 . "</td>
           </tr>
           <tr>
              <td style='padding: 1rem; width='30%'><b>Responsiblity:</b></td>
              <td style='padding: 1rem; width='70%'> " . $employee->worker_responsibility1 . "</td>
           </tr>
           <tr>
              <td style='padding: 1rem; width='30%'><b>Worker (2):</b></td>
              <td style='padding: 1rem; width='70%'> " . $employee->worker_name2 . "</td>
           </tr>
           <tr>
              <td style='padding: 1rem; width='30%'><b>Responsiblity:</b></td>
              <td style='padding: 1rem; width='70%'> " . $employee->worker_responsibility2 . "</td>
           </tr>
           <tr>
              <td style='padding: 1rem; width='30%'><b>Worker (3):</b></td>
              <td style='padding: 1rem; width='70%'> " . $employee->worker_name3 . "</td>
           </tr>
           <tr>
              <td style='padding: 1rem; width='30%'><b>Responsiblity:</b></td>
              <td style='padding: 1rem; width='70%'> " . $employee->worker_responsibility3 . "</td>
           </tr>
           <tr>
              <td style='padding: 1rem; width='30%'><b>Worker (4):</b></td>
              <td style='padding: 1rem; width='70%'> " . $employee->worker_name4 . "</td>
           </tr>
           <tr>
              <td style='padding: 1rem; width='30%'><b>Responsiblity:</b></td>
              <td style='padding: 1rem; width='70%'> " . $employee->worker_responsibility4 . "</td>
           </tr>";
        }
        $response['html'] = $html;

        return response()->json($response);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projects = Projects::all();
        $plannings = Planning::all();
        return view('pages.man-of-power.create', compact('plannings', 'projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            "project_id" => "required|exists:projects,id",
            "planning_id" => "required|exists:plannings,id",
            "start_date" => "required|date",
            "worker_name1" => "nullable",
            "worker_name2" => "nullable",
            "worker_name3" => "nullable",
            "worker_name4" => "nullable",
            "worker_responsibility1" => "nullable",
            "worker_responsibility2" => "nullable",
            "worker_responsibility3" => "nullable",
            "worker_responsibility4" => "nullable",
            "additional_worker" => "nullable",
            "reason" => $request->input('userChoice') == 'yes' ? 'required' : ''
        ]);

        $planning = Planning::where('start_date', $request->start_date)->first();
        $taskName = $planning ? $planning->task_name : null;

        $input = $request->all();
        $input['planning_id'] = $request->planning_id;
        $input['task_name'] = $taskName;
        $input['project_id'] = $request->project_id; // Ensure project_id is included

        ManofPower::create($input);

        return redirect()->route('mop.index', ['activeTab' => 'planning'])->with(['success' => 'Data Berhasil Disimpan!']);
    }
    /**
     * Display the specified resource.
     */
    public function show($slug)
    {

        $project = Projects::where('slug', $slug)->first();

        // Get all planning tasks related to the project
        $mop = ManOfPower::where('project_id', $project->id)->get();

        return view('pages.man-of-power.index', compact('project', 'mop'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        //get planning by ID
        $manOfPower  = ManOfPower::findOrFail($id);
        $plannings = Planning::all();

        //render view with planning
        return view('pages.man-of-power.edit', compact('manOfPower', 'plannings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            "project_id" => "required|exists:projects,id",
            "planning_id" => "required|exists:plannings,id",
            "start_date" => "required|date",
            "worker_name1" => "nullable",
            "worker_name2" => "nullable",
            "worker_name3" => "nullable",
            "worker_name4" => "nullable",
            "worker_responsibility1" => "nullable",
            "worker_responsibility2" => "nullable",
            "worker_responsibility3" => "nullable",
            "worker_responsibility4" => "nullable",
            "additional_worker" => "nullable",
            "reason" => $request->input('userChoice') == 'yes' ? 'required' : 'nullable',
        ]);
        $planning = Planning::where('start_date', $request->start_date)->first();
        $taskName = $planning ? $planning->task_name : null;

        $manOfPower = ManOfPower::findOrFail($id);
        $manOfPower->update([
            'project_id' => $request->project_id,
            'planning_id' => $request->planning_id,
            'start_date' => $request->start_date,
            'task_name' => $taskName,
            'worker_name1' => $request->worker_name1,
            'worker_name2' => $request->worker_name2,
            'worker_name3' => $request->worker_name3,
            'worker_name4' => $request->worker_name4,
            'worker_responsibility1' => $request->worker_responsibility1,
            'worker_responsibility2' => $request->worker_responsibility2,
            'worker_responsibility3' => $request->worker_responsibility3,
            'worker_responsibility4' => $request->worker_responsibility4,
            'additional_worker' => $request->additional_worker,
            'reason' => $request->reason
        ]);

        return redirect()->route('mop.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projects $project, int $id): RedirectResponse
    {
        $mop = ManofPower::findOrFail($id);
        $mop->delete();

        return redirect()->route('mop.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}

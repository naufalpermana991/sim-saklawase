<?php

namespace App\Http\Controllers;

use App\Models\Planning;
use App\Models\Projects;
use Illuminate\Http\Request;

class DetailPlanningController extends Controller
{
    public function index()
    {
        // Find the project with the specified ID
        $project = Projects::find(1);
        $planning = Planning::all();
        return view('pages.planning.detail', compact('project', 'planning'));
    }
}

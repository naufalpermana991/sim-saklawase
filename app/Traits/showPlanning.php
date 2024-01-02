<?php

namespace App\Traits;

use App\Models\Planning;
use App\Models\Projects;

trait showPlanning
{
    public function index($id)
    {
        //get posts
        $project = Planning::with('project')->orderBy('id')->get();
        $project = Projects::find($id);
        $planning = Planning::where('id', $id)->get();

        //render view with Plannings
        return view('pages.planning.index', compact('project'));
    }
}

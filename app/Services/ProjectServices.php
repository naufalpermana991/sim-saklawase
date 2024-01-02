<?php

namespace App\Services;

use App\Models\Projects;

class ProjectServices
{
    /**
     * Get all projects.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllProjects()
    {
        return Projects::all();
    }

    /**
     * Find a project by ID.
     *
     * @param  int  $id
     * @return \App\Models\Projects|null
     */
    public function findProjectById($id)
    {
        return Projects::find($id);
    }
}

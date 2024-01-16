<?php

namespace App\Http\Controllers;

use App\Exports\ManPowerPlanningExport;
use App\Models\Projects; // Assuming you have a Project model that corresponds to the projects table
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function exportManPowerPlanning()
    {
        // Query the projects table to get the project with the name "initial_project"
        Projects::where('id')->first();

        // If the project exists, use its name as part of the filename
        $filename = "Saklawase-Planning.xlsx";

        // Pass the filename to the Excel download method
        return Excel::download(new ManPowerPlanningExport(), $filename);
    }
}

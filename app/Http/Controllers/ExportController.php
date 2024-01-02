<?php

namespace App\Http\Controllers;

use App\Exports\ManPowerPlanningExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function exportManPowerPlanning()
    {
        return Excel::download(new ManPowerPlanningExport(), 'Saklawase-Planning.xlsx');
    }
}

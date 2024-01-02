<?php

namespace App\Exports;

use App\Models\Planning;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ManPowerPlanningExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Planning::all();
    }

    public function headings(): array
    {
        return [
            'Task',
            'Sub-Task',
            'Volume',
            'Unit',
            'Date Started',
            'Date Finished',
            'Man Power Planning',
            'Percentage',
        ];
    }
}

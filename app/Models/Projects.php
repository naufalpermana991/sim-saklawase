<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_name', 'cost_center', 'wo_number', 'location', 'project_value', 'initial_project', 'slug'
    ];
}

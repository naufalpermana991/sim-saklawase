<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Projects;

class Planning extends Model
{
    use HasFactory;
    protected $fillable =
    ['project_id', 'task_name', 'sub_task', 'volume', 'unit', 'start_date', 'end_date', 'duration', 'mop', 'percentage'];

    protected $appends = ["open"];

    public function getOpenAttribute()
    {
        return true;
    }
    public function project()
    {
        return $this->belongsTo(Projects::class);
    }
}

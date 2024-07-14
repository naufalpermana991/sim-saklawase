<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManOfPower extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'planning_id', 'task_name', 'start_date', 'worker_name1', 'worker_name2', 'worker_name3', 'worker_name4',
        'worker_responsibility1', 'worker_responsibility2', 'worker_responsibility3', 'worker_responsibility4', 'additional_worker', 'reason'
    ];
    public function planning()
    {
        return $this->belongsTo(Planning::class);
    }
    public function project()
    {
        return $this->belongsTo(Projects::class);
    }
}

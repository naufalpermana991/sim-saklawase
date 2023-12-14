<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planning extends Model
{
    use HasFactory;
    protected $fillable =
    ['task_name', 'sub_task', 'date_started', 'date_finished', 'mop', 'percentage'];

    public function project()
    {
        return $this->belongsTo(Projects::class);
    }
}

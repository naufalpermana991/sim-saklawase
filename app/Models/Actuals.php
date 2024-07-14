<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actuals extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'planning_id', 'days', 'task_name', 'start_date', 'activities', 'results', 'image'];
    public function getOpenAttribute()
    {
        return true;
    }
    public function project()
    {
        return $this->belongsTo(Projects::class);
    }
}

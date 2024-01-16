<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planning extends Model
{
    use HasFactory;
    protected $fillable =
    ['task_name', 'sub_task', 'volume', 'unit', 'start_date', 'end_date', 'mop', 'percentage'];

    protected $appends = ["open"];

    public function getOpenAttribute()
    {
        return true;
    }
}

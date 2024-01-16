<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManOfPower extends Model
{
    use HasFactory;
    protected $fillable =
    ['worker_name1', 'worker_name2', 'worker_name3', 'worker_name4'];
}

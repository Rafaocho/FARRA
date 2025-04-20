<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
class Attendance extends Pivot
{
    
    protected $table= 'attendances';
}

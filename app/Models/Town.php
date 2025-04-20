<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    protected $fillable = ["name", "latitude", "longitude", "province_id"];

    public function province(){
        return $this->belongsTo(Province::class);
    }

    public function events(){
        return $this->hasMany(Event::class);
    }

    protected $table = "towns";
}

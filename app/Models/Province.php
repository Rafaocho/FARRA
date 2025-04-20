<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable = ['name', 'community_id'];

    public function community(){
        return $this->belongsTo(Community::class);
    }
    public function towns(){
        return $this->hasMany(Town::class);
    }
    protected $table = 'provinces';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    protected $fillable = ["name", "latitude", "longitude", "province_id"];

    protected $table = "towns";

    public function province(){
        return $this->belongsTo(Province::class);
    }

    public function events(){
        return $this->hasMany(Event::class);
    }

    public function favorites()
    {
        return $this->belongsToMany(User::class, 'favorite_towns')->withTimestamps();
    }

    protected $appends = ['favorite'];

    public function getFavoriteAttribute()
    {
        $user = auth()->user();
        if (!$user) return false;

        return $this->favorites()->where('user_id', $user->id)->exists();
    }
}
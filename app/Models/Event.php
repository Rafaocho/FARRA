<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title', 'description', 'date', 'town_id', 'creator_id'];

    public function town()
    {
        return $this->belongsTo(Town::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function creator()
    {
        return $this->belongsTo(User::class);
    }

    public function attendees()
    {
        return $this->belongsToMany(User::class, 'attendances', 'event_id', 'user_id');
    }



    protected $table = "events";
}

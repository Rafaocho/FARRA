<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Event;
class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'age',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function creator()
    {
        return $this->hasMany(Event::class);
    }
    public function events()
    {
        return $this->belongsToMany(Event::class, 'attendances', 'user_id', 'event_id');
    }
    public function following()
    {
        return $this->belongsToMany(User::class, 'follows', 'follower_id', 'followed_id');
    }
    public function followed()
    {
        return $this->belongsToMany(User::class, 'follows', 'followed_id', 'follower_id');
    }
    public function isCreator()
    {
        return $this->role === 'creator';
    }
    public function isAdmin()
    {
        return $this->role === 'user';
    }
    public function favoriteTowns()
    {
        return $this->belongsToMany(Town::class, 'favorite_towns')->withTimestamps();
    }
}

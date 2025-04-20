<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Province;
class Community extends Model
{
    protected $fillable = ['name'];

    public function provinces(){
        return $this->hasMany(Province::class);
    }
    protected $table = 'communities';


}

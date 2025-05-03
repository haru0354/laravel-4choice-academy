<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
    protected $fillable = [
        'user_id',
        'title',
    ];

    public function drills()
    {
        return $this->hasMany(Drills::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drill extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'lesson_id',
        'question',
        'choice_1',
        'choice_2',
        'choice_3',
        'choice_4',
        'correct_choice',
        'explanations',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}

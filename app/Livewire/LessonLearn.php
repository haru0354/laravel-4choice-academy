<?php

namespace App\Livewire;

use App\Models\Lesson;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LessonLearn extends Component
{
    public $user_id;
    public $lesson_id;
    public $lesson;
    public $drills = [];
    public $currentIndex = 0;

    public function mount($lesson_id)
    {
        $this->user_id = Auth::id();
        $this->getLesson($lesson_id);
    }

    public function getLesson($lesson_id)
    {
        $this->lesson = Lesson::where('id', $lesson_id)->with('drills')->first();
        $this->drills = $this->lesson->drills->values();
    }

    public function render()
    {
        return view('livewire.lesson-learn');
    }
}

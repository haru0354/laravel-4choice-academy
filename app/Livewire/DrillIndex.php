<?php

namespace App\Livewire;

use App\Models\Drill;
use App\Models\Lesson;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DrillIndex extends Component
{
    public $user_id;
    public $lesson_id;
    public $drills;
    public $lessonTitle;



    public function mount($lesson_id)
    {
        $this->user_id = Auth::id();
        $this->lesson_id = $lesson_id;

        $this->getDrills();
        $this->getLessonTitle();
    }

    public function getDrills()
    {
        $this->drills = Drill::where('lesson_id', $this->lesson_id)->get();
    }

    public function getLessonTitle()
    {
        $this->lessonTitle = Lesson::where('id', $this->lesson_id)->first()?->title;
    }

    public function render()
    {
        return view('livewire.drill-index');
    }
}

<?php

namespace App\Livewire;

use App\Models\Lesson;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LessonIndex extends Component
{
    public $user_id;
    public $lessons;
    public $lessonModal = false;

    public function mount()
    {
        $this->user_id = Auth::id();
        $this->lessons = Lesson::where('user_id', $this->user_id)->get();
    }

    public function openLessonModal()
    {
        $this->lessonModal = true;
    }

    public function closeLessonModal()
    {
        $this->lessonModal = false;
    }

    public function render()
    {
        return view('livewire.lesson-index');
    }
}

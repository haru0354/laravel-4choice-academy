<?php

namespace App\Livewire;

use App\Models\Drill;
use App\Models\Lesson;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LessonFlashcard extends Component
{
    public $user_id;
    public $lesson_id;
    public $lesson;

    public $drills = [];
    public $currentIndex = 0;

    public $answerCard = false;

    public $endModal = false;


    public function mount($lesson_id)
    {
        $this->user_id = Auth::id();
        $this->lesson_id = $lesson_id;

        $this->getLesson($lesson_id);
    }

    public function openQuestion()
    {
        $this->answerCard = false;
    }

    public function openAnswer()
    {
        $this->answerCard = true;
    }

    public function nextQuestion()
    {
        $this->currentIndex++;
        $this->answerCard = false;
    }

    public function backQuestion()
    {
        $this->currentIndex--;
        $this->answerCard = true;
    }

    public function openEndModal()
    {
        $this->endModal = true;
    }

    public function closeEndModal()
    {
        $this->endModal = false;
    }

    public function getLesson($lesson_id)
    {
        $this->lesson = Lesson::where('id', $lesson_id)->with('drills')->first();
        $this->drills = $this->lesson->drills->values();
    }

    public function render()
    {
        return view('livewire.lesson-flashcard');
    }
}

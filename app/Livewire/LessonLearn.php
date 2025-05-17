<?php

namespace App\Livewire;

use App\Models\Lesson;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class LessonLearn extends Component
{
    public $user_id;
    public $lesson_id;
    public $lesson;

    public $drills = [];
    public $currentIndex = 0;

    public $judgementModal = false;
    public $isCorrect;
    public $selectedChoice;

    public $isLessonEndModal = false;
    public $wrongQuestions = [];

    public function mount($lesson_id)
    {
        Session::forget('wrong_questions');

        $this->user_id = Auth::id();
        $this->getLesson($lesson_id);
    }

    public function selectChoice($choiceNo)
    {
        $this->judgementModal = true;
        $this->judgement($choiceNo);
    }

    public function judgement($choiceNo)
    {
        $drill = $this->drills[$this->currentIndex];
        $correctChoice = $drill->correct_choice;
        $correctChoiceKey = 'choice_' . $correctChoice;

        if ($choiceNo === $correctChoice) {
            $this->isCorrect = true;
        } else {
            session()->push('wrong_questions', [
                'question' => $drill->question,
                'explanations' => $drill->explanations,
                'correct' => $drill->$correctChoiceKey,
            ]);
            $this->isCorrect = false;
        }
    }

    public function nextQuestion()
    {
        if ($this->currentIndex >= count($this->drills) - 1) {
            $this->judgementModal = false;
            $this->isLessonEndModal = true;
            $this->wrongQuestions = Session::get('wrong_questions', []);
            return;
        }

        $this->currentIndex++;

        $this->isCorrect = null;
        $this->selectedChoice = null;
        $this->judgementModal = false;
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

<?php

namespace App\Livewire;

use App\Models\Drill;
use App\Models\Lesson;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DrillIndex extends Component
{
    public $user_id;
    public $drills;
    public $lessonTitle;
    public $drillModal = false;
    public $lesson_id, $editingDrillId, $question, $choice_1, $choice_2, $choice_3, $choice_4, $correct_choice, $explanations;

    public function mount($lesson_id)
    {
        $this->user_id = Auth::id();
        $this->lesson_id = $lesson_id;

        $this->getDrills();
        $this->getLessonTitle();
    }

    public function openDrillModal()
    {
        $this->drillModal = true;
    }

    public function closeDrillModal()
    {
        $this->drillModal = false;
        $this->resetDrillForm();
    }

    public function getDrills()
    {
        $this->drills = Drill::where('lesson_id', $this->lesson_id)->get();
    }

    public function getLessonTitle()
    {
        $this->lessonTitle = Lesson::where('id', $this->lesson_id)->first()?->title;
    }

    public function resetDrillForm()
    {
        $this->reset(['editingDrillId', 'question', 'choice_1', 'choice_2', 'choice_3', 'choice_4', 'correct_choice', 'explanations']);
    }

    public function render()
    {
        return view('livewire.drill-index');
    }
}

<?php

namespace App\Livewire;

use App\Models\Drill;
use App\Models\Lesson;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class DrillIndex extends Component
{
    public $user_id;
    public $drills;
    public $lessonTitle;
    public $drillModal = false;
    public $deleteDrillModal = false;
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

    public function openEditDrillModal($editingDrillId)
    {
        $drill = Drill::findOrFail($editingDrillId);

        $this->editingDrillId = $editingDrillId;
        $this->question = $drill->question;
        $this->choice_1 = $drill->choice_1;
        $this->choice_2 = $drill->choice_2;
        $this->choice_3 = $drill->choice_3;
        $this->choice_4 = $drill->choice_4;
        $this->correct_choice = $drill->correct_choice;
        $this->explanations = $drill->explanations;

        $this->drillModal = true;
    }

    public function openDeleteDrillModal()
    {
        $this->deleteDrillModal = true;
    }

    public function closeDrillModal()
    {
        $this->drillModal = false;
        $this->resetDrillForm();
    }

    public function closeDeleteDrillModal()
    {
        $this->deleteDrillModal = false;
    }

    public function drillStore()
    {
        $validated = $this->validateDrill();

        Drill::create($validated);

        $this->getDrills();
        $this->closeDrillModal();
    }

    public function drillUpdate()
    {
        $drill = Drill::findOrFail($this->editingDrillId);
        $validated = $this->validateDrill();

        $drill->update($validated);

        $this->getDrills();
        $this->closeDrillModal();
    }

    public function drillDestroy()
    {
        $drill = Drill::findOrFail($this->editingDrillId);
        $drill->delete();

        $this->getDrills();
        $this->closeDeleteDrillModal();
        $this->closeDrillModal();
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
        $this->reset([
            'editingDrillId',
            'question',
            'choice_1',
            'choice_2',
            'choice_3',
            'choice_4',
            'correct_choice',
            'explanations'
        ]);
    }

    public function rules()
    {
        return [
            'user_id' => 'required|exists:users,id',
            'lesson_id' => 'required|exists:lessons,id',
            'question' => 'required|string',
            'choice_1' => 'required|string|max:50',
            'choice_2' => 'required|string|max:50',
            'choice_3' => 'required|string|max:50',
            'choice_4' => 'required|string|max:50',
            'correct_choice' => 'required|integer|between:1,4',
            'explanations' => 'nullable|string',
        ];
    }

    public function attributes()
    {
        return [
            'question' => '問題',
            'choice_1' => '解答.1',
            'choice_2' => '解答.2',
            'choice_3' => '解答.3',
            'choice_4' => '解答.4',
            'correct_choice' => '答え',
            'explanations' => '解説',
        ];
    }

    protected function validateDrill()
    {
        return Validator::make(
            $this->only([
                'user_id',
                'lesson_id',
                'question',
                'choice_1',
                'choice_2',
                'choice_3',
                'choice_4',
                'correct_choice',
                'explanations'
            ]),
            $this->rules(),
            [],
            $this->attributes()
        )->validate();
    }

    public function render()
    {
        return view('livewire.drill-index');
    }
}

<?php

namespace App\Livewire;

use App\Models\Lesson;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LessonIndex extends Component
{
    public $user_id;
    public $editingLessonId;
    public $title;
    public $lessons;
    public $lessonModal = false;

    public function mount()
    {
        $this->user_id = Auth::id();
        $this->getLessons();
    }

    public function openLessonModal()
    {
        $this->lessonModal = true;
    }

    public function openEditLessonModal($editingLessonId)
    {
        $lesson = Lesson::findOrFail($editingLessonId);

        $this->editingLessonId = $editingLessonId;
        $this->title = $lesson->title;
        $this->lessonModal = true;
    }

    public function closeLessonModal()
    {
        $this->lessonModal = false;
        $this->resetLessonForm();
    }

    public function lessonStore()
    {
        Lesson::create([
            'user_id' => $this->user_id,
            'title' => $this->title,
        ]);

        $this->getLessons();
        $this->closeLessonModal();
    }

    public function lessonUpdate()
    {
        $lesson = Lesson::findOrFail($this->editingLessonId);

        $lesson->update([
            'title' => $this->title,
        ]);
    
        $this->closeLessonModal();
        $this->getLessons();

    }

    public function lessonDestroy()
    {
        $lesson = Lesson::findOrFail($this->editingLessonId);
        $lesson->delete();

        $this->getLessons();
        $this->closeLessonModal();
    }

    public function getLessons()
    {
        $this->lessons = Lesson::where('user_id', $this->user_id)->get();
    }

    public function resetLessonForm()
    {
        $this->reset(['editingLessonId', 'title']);
    }

    public function render()
    {
        return view('livewire.lesson-index');
    }
}

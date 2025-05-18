<?php

namespace App\Livewire;

use App\Models\Lesson;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class LessonIndex extends Component
{
    public $user_id;
    public $editingLessonId;
    public $title;
    public $lessons;
    public $lessonModal = false;
    public $deleteLessonModal = false;

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

    public function openDeleteLessonModal()
    {
        $this->deleteLessonModal = true;
    }

    public function closeLessonModal()
    {
        $this->lessonModal = false;
        $this->resetErrorBag();
        $this->resetLessonForm();
    }

    public function closeDeleteLessonModal()
    {
        $this->deleteLessonModal = false;
    }

    public function lessonStore()
    {
        $validated = $this->validateLesson();

        Lesson::create($validated);

        $this->getLessons();
        $this->closeLessonModal();
    }

    public function lessonUpdate()
    {
        $lesson = Lesson::findOrFail($this->editingLessonId);

        $validated = $this->validateLesson();

        $lesson->update($validated);

        $this->closeLessonModal();
        $this->getLessons();
    }

    public function lessonDestroy()
    {
        $lesson = Lesson::findOrFail($this->editingLessonId);
        $lesson->delete();

        $this->getLessons();

        $this->closeDeleteLessonModal();
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

    public function rules()
    {
        return [
            'user_id' => 'required|exists:users,id',
            'title' => 'required|string|min:2|max:25',
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'レッスン名',
        ];
    }

    protected function validateLesson()
    {
        return Validator::make(
            $this->only(['user_id', 'title']),
            $this->rules(),
            [],
            $this->attributes()
        )->validate();
    }

    public function render()
    {
        return view('livewire.lesson-index');
    }
}

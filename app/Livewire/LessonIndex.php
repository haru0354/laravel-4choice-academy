<?php

namespace App\Livewire;

use App\Models\Lessons;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LessonIndex extends Component
{
    public $user_id;
    public $lessons;

    public function mount()
    {
        $this->user_id = Auth::id();
        $this->lessons = Lessons::where('user_id', $this->user_id)->get();
    }

    public function render()
    {
        return view('livewire.lesson-index');
    }
}

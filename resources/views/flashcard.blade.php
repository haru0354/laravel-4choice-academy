<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            暗記カードの開始
        </h2>
    </x-slot>

    <div>
        <livewire:lesson-flashcard :lesson_id="$lesson_id" />
    </div>
</x-app-layout>
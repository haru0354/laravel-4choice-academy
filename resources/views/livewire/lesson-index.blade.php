<section>
    <h2 class="mb-6 text-2xl font-semibold">レッスンの一覧</h2>
    <table class="table-auto w-full text-left">
        <thead>
            <tr>
                <th class="px-4 py-3 font-semibold bg-gray-100">登録日</th>
                <th class="px-4 py-3 font-semibold bg-gray-100">レッスン名</th>
                <th class="px-4 py-3 font-semibold bg-gray-100">学習</th>
                <th class="px-4 py-3 font-semibold bg-gray-100">カード</th>
                <th class="px-4 py-3 font-semibold bg-gray-100">詳細</th>
                <th class="px-4 py-3 font-semibold bg-gray-100">編集</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lessons as $lesson)
            <tr>
                <td class="px-4 py-3 border-t-2 border-gray-200">{{ $lesson->created_at->format('Y-m-d') }}</td>
                <td class="px-4 py-3 border-t-2 border-gray-200">{{ $lesson->title }}</td>
                <td class="px-4 py-3 border-t-2  border-gray-200"><a href="{{ route('learn', ['lesson_id' => $lesson->id]) }}" class="text-sky-500 hover:text-sky-700">学習</a></td>
                <td class="px-4 py-3 border-t-2  border-gray-200"><a href="{{ route('flashcard', ['lesson_id' => $lesson->id]) }}" class="text-sky-500 hover:text-sky-700">カード</a></td>
                <td class="px-4 py-3 border-t-2  border-gray-200"><a href="{{ route('drills', ['lesson_id' => $lesson->id]) }}" class="text-sky-500 hover:text-sky-700">詳細</a></td>
                <td class="px-4 py-3 border-t-2 text-sky-500 hover:text-sky-700 border-gray-200 cursor-pointer" wire:click="openEditLessonModal({{ $lesson->id }})">編集</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <x-ui.button wire="openLessonModal" class="block mx-auto my-4 rounded">レッスンの作成</x-ui.button>

    @if($lessonModal)
    <x-ui.modal-container wire="closeLessonModal" id="lesson">
        <x-form.livewire-form-container
            title="{{ $editingLessonId ? 'レッスンの編集' : 'レッスンの作成' }}" buttonTitle="{{ $editingLessonId ? '編集' : '作成' }}"
            submitWire="{{ $editingLessonId ? 'lessonUpdate' : 'lessonStore' }}" closeWire="closeLessonModal">
            <x-form.input name="title">レッスン名</x-form.input>

            @if(isset($editingLessonId))
            <x-slot name="deleteSlot">
                <x-ui.button type="button" color="red" wire="openDeleteLessonModal" class="block mx-auto my-4 rounded">削除</x-ui.button>
                @if($deleteLessonModal)
                <x-ui.delete-modal-container title="{{ $lesson->title }}" closeWire="closeDeleteLessonModal" deleteWire="lessonDestroy" />
                @endif
            </x-slot>
            @endif

        </x-form.livewire-form-container>
    </x-ui.modal-container>
    @endif
</section>
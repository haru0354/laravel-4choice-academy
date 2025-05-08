<section>
    <h2>レッスンの一覧</h2>
    <table class="table-auto w-full text-left">
        <thead>
            <tr>
                <th class="px-4 py-3 font-semibold bg-gray-100">No.</th>
                <th class="px-4 py-3 font-semibold bg-gray-100">レッスン名</th>
                <th class="px-4 py-3 font-semibold bg-gray-100">登録日</th>
                <th class="px-4 py-3 font-semibold bg-gray-100">学ぶ</th>
                <th class="px-4 py-3 font-semibold bg-gray-100">編集</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lessons as $lesson)
            <tr>
                <td class="px-4 py-3 border-t-2 border-gray-200">{{ $lesson->id }}</td>
                <td class="px-4 py-3 border-t-2 border-gray-200">{{ $lesson->title }}</td>
                <td class="px-4 py-3 border-t-2 border-gray-200">{{ $lesson->created_at }}</td>
                <td class="px-4 py-3 border-t-2 border-gray-200">開始</td>
                <td class="px-4 py-3 border-t-2 text-sky-500 hover:text-sky-700 border-gray-200 cursor-pointer" wire:click="openEditLessonModal({{ $lesson->id }})">編集</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <x-ui.button wire="openLessonModal">開く</x-ui.button>

    @if($lessonModal)
    <x-ui.modal-container wire="closeLessonModal" id="lesson">
        <x-form.livewire-form-container title="レッスンの作成" buttonTitle="作成" submitWire="lessonStore" closeWire="closeLessonModal">
            <x-form.input name="title">レッスン名</x-form.input>
        </x-form.livewire-form-container>
    </x-ui.modal-container>
    @endif

</section>
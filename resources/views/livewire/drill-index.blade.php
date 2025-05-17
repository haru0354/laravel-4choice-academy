<section>
    <h2 class="mb-6 text-2xl font-semibold">{{ $lessonTitle }}の詳細</h2>
    <table class="table-auto w-full text-left">
        <thead>
            <tr>
                <th class="px-4 py-3 font-semibold bg-gray-100">No.</th>
                <th class="px-4 py-3 font-semibold bg-gray-100">問題</th>
                <th class="px-4 py-3 font-semibold bg-gray-100">登録日</th>
                <th class="px-4 py-3 font-semibold bg-gray-100">編集</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($drills as $drill)
            <tr>
                <td class="px-4 py-3 border-t-2 border-gray-200">{{ $drill->id }}</td>
                <td class="px-4 py-3 border-t-2 border-gray-200">{{ $drill->question }}</td>
                <td class="px-4 py-3 border-t-2 border-gray-200">{{ $drill->created_at }}</td>
                <td class="px-4 py-3 border-t-2 text-sky-500 hover:text-sky-700 border-gray-200 cursor-pointer" wire:click="openEditDrillModal({{ $drill->id }})">編集</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="flex items-center justify-center my-8">
        <x-ui.button wire="openDrillModal" class="mx-4 rounded">問題の追加</x-ui.button>
        <x-ui.button-link route="{{ route('dashboard')}}" color="gray" class="mx-4 rounded">レッスンの一覧へ</x-ui.button-link>
    </div>

    <h2 class="mb-6 text-2xl font-semibold">問題の一覧で学習</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        @foreach ($drills as $drill)
        <div class="p-4 rounded-lg shadow-md bg-red-100 border hover:border-gray-600">
            <h4 class="my-2 font-semibold">{{ $drill->question }}</h4>
            <div class="my-2">
                <span class="font-semibold text-green-700">✅ 正解</span>
                <p class="ml-8">{{ $drill->{"choice_" . $drill->correct_choice} }}</p>
            </div>
            <div class="my-2">
                <span class="font-semibold text-blue-700">📘 解説</span>
                <p class="ml-8">{{ $drill->explanations }}</p>
            </div>
        </div>
        @endforeach
    </div>

    @if($drillModal)
    <x-ui.modal-container wire="closeDrillModal" id="drill">
        <x-form.livewire-form-container
            title="{{ $editingDrillId ? '問題の編集' : '問題の作成' }}" buttonTitle="{{ $editingDrillId ? '問題の編集' : '問題の作成' }}"
            submitWire="{{ $editingDrillId ? 'drillUpdate' : 'drillStore' }}" closeWire="closeDrillModal">
            <x-form.input name="question">問題</x-form.input>
            <x-form.input name="choice_1">解答.1</x-form.input>
            <x-form.input name="choice_2">解答.2</x-form.input>
            <x-form.input name="choice_3">解答.3</x-form.input>
            <x-form.input name="choice_4">解答.4</x-form.input>
            <x-form.select name="correct_choice" :options="[1 => 1, 2 => 2, 3 => 3, 4 => 4]">
                答え
            </x-form.select>
            <x-form.textarea name="explanations">解説</x-form.textarea>

            @if(isset($editingDrillId))
            <x-slot name="deleteSlot">
                <x-ui.button type="button" color="red" wire="openDeleteDrillModal" class="block mx-auto my-4 rounded">削除</x-ui.button>
                @if($deleteDrillModal)
                <x-ui.delete-modal-container title="{{ $question }}" closeWire="closeDeleteDrillModal" deleteWire="drillDestroy" />
                @endif
            </x-slot>
            @endif

        </x-form.livewire-form-container>
    </x-ui.modal-container>
    @endif
</section>
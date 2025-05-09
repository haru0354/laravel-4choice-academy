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
                <td class="px-4 py-3 border-t-2 border-gray-200">編集</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <x-ui.button wire="openDrillModal" class="block mx-auto my-4 rounded">問題の追加</x-ui.button>

    @if($drillModal)
    <x-ui.modal-container wire="closeDrillModal" id="drill">
        <x-form.livewire-form-container
            title="ドリルの作成" buttonTitle="作成"
            closeWire="closeDrillModal">
            <x-form.input name="question">問題</x-form.input>
            <x-form.input name="choice_1">解答.1</x-form.input>
            <x-form.input name="choice_2">解答.2</x-form.input>
            <x-form.input name="choice_3">解答.3</x-form.input>
            <x-form.input name="choice_4">解答.4</x-form.input>
            <x-form.select name="correct_choice" :options="[1 => 1, 2 => 2, 3 => 3, 4 => 4]">
                答え
            </x-form.select>
            <x-form.textarea name="explanations">解説</x-form.textarea>
        </x-form.livewire-form-container>
    </x-ui.modal-container>
    @endif
</section>
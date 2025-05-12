@props([
    'maxWidth' => 'max-w-[580px]',
    'id' => 'deleteModal',
    'title',
    'closeWire' => null,
    'deleteWire' => null,
])

<x-ui.modal-container wire="{{ $closeWire }}" id="{{ $id }}" class="text-center">
    <p class="my-4 font-semibold text-lg">「{{$title}}」</p>
    <p>を削除しますか？</p>
    <div class="flex justify-center items-center my-4">
        <x-ui.button type="button" size="normal" color="gray" wire="{{ $closeWire }}" class="mx-6 rounded">キャンセル</x-ui.button>
        <x-ui.button type="button" wire="{{ $deleteWire }}" color="red" class="mx-6 rounded">削除</x-ui.button>
    </div>
</x-ui.modal-container>
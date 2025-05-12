@props([
    'title' => null,
    'buttonTitle' => "送信",
    'submitWire' => null,
    'closeWire' => null,
])

<form wire:submit.prevent="{{ $submitWire }}"
    {{ $attributes->merge(['class' => 'w-full mx-auto p-6 border rounded border-gray-300 bg-white']) }}>
    @if ($title) <p class="text-center mt-2 mb-6 pb-2 text-xl sm:text-2xl font-semibold border-b text-gray-500 border-gray-300">{{ $title }}</p>@endif
    {{ $slot }}
    <div class="mb-2 text-center">
        <x-ui.button size="normal" color="blue" class="mt-8 block mx-auto rounded">{{ $buttonTitle }}</x-ui.button>
        <x-ui.button type="button" size="normal" color="gray" wire="{{ $closeWire }}" class="block mx-auto rounded">閉じる</x-ui.button>
    </div>

    @if (isset($deleteSlot))
        <div class="mt-6 pt-2 border-t border-dashed border-gray-300">
        {{ $deleteSlot }}
        </div>
    @endif
</form>
@props([
    'method' => 'POST',
    'action' => null,
    'title' => null,
    'buttonTitle' => "送信",
    'backRoute' => null,
    'wire' => null,
])

<form method="{{ $method }}" action="{{ $action }}"
    {{ $attributes->merge(['class' => 'w-full max-w-[480px] mx-auto m-6 p-6 border rounded border-gray-300 bg-white']) }}>
    @if ($title) <p class="text-center mt-2 mb-6 pb-2 text-xl sm:text-2xl font-semibold border-b text-gray-500 border-gray-300">{{ $title }}</p>@endif
    @csrf
    {{ $slot }}
    <div class="mb-2 text-center">
        <x-ui.button size="normal" color="blue" class="mt-8 block mx-auto rounded">{{ $buttonTitle }}</x-ui.button>
        @if($backRoute)
        <x-ui.button-link size="normal" color="gray" route="{{ $backRoute }}" class="block mx-auto rounded">キャンセル</x-ui.button-link>
        @endif
        @if($wire)
        <x-ui.button type="button" size="normal" color="gray" wire="{{ $wire }}" class="block mx-auto rounded">閉じる</x-ui.button>
        @endif
    </div>
</form>
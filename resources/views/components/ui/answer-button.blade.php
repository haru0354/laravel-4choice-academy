@props([
    'wire' => null,
    'listName' => null,
])

<button
    {{ $attributes->merge(['class' => 'w-full my-4 p-4 text-left text-lg font-semibold border border-transparent shadow-xl text-white bg-gradient-to-r from-orange-400 to-yellow-500 transform transition duration-500 hover:scale-105 hover:shadow-2xl hover:border-transparent hover:bg-gradient-to-l hover:from-green-400 hover:to-teal-500']) }}
    @if ($wire) wire:click="{{ $wire }}" @endif>
    <span class="mr-1 font-semibold text-gray-600">
        {{$listName}}：
    </span>
    {{ $slot }}
</button>
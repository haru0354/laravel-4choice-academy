@props([
    'type' => 'text',
    'name' => null,
    'value' => null,
])

<div class="w-full my-2">
    <label for="{{ $name }}" class="leading-7 text-sm text-gray-600">{{ $slot }}</label>
    <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}"
        value="{{ old($name, $value) }}"
        wire:model="{{ $name }}"
        {{ $attributes->merge(['class' => "w-full py-2 border rounded border-gray-300 bg-gray-50 focus:bg-white transition-colors duration-200 ease-in-out"]) }}>
    @error($name)
    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
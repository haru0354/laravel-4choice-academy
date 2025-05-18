@props([
'name' => null,
'options' => [],
'selected' => null,
'maxWidth' => 'max-w-[120px]',
])

<div class="flex flex-col my-2">
    <label for="{{ $name }}" class="leading-7 text-sm text-gray-600">{{ $slot }}</label>
    <select id="{{ $name }}" name="{{ $name }}" wire:model="{{ $name }}"
        class="{{ $maxWidth }} border rounded border-gray-300 bg-gray-50 focus:bg-white transition-colors duration-200 ease-in-out">
        <option value="" disabled {{ old($name, $selected) === null || old($name, $selected) === '' ? 'selected' : '' }}>
            選択してください
        </option>
        @foreach ($options as $value => $label)
            <option value="{{ $value }}" {{ old($name, $selected) == $value ? 'selected' : '' }}>
                {{ $label }}
            </option>
        @endforeach
    </select>
</div>
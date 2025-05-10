@props(['maxWidth' => 'max-w-[580px]', 'id' => 'modal', 'wire' => null])

<div id="{{ $id }}"
    @if($wire) wire:click="{{ $wire }}" @endif
    class="flex fixed inset-0 items-center justify-center w-full h-full bg-gray-900 bg-opacity-50 z-50">
    <div
        @click.stop
        {{ $attributes->merge(['class' => "$maxWidth w-full max-h-[80%] mx-2 p-6 rounded-lg shadow-lg scroll-y-auto overflow-auto bg-white"]) }}>
        {{ $slot }}
    </div>
</div>
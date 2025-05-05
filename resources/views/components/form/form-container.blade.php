@props(['method' => 'POST', 'action' => 'null', 'title' => null])

<form method="{{ $method }}" action="{{ $action }}"
    {{ $attributes->merge(['class' => 'w-full max-w-[480px] mx-auto p-6 border rounded border-gray-300 bg-white']) }}>
    @if ($title) <p class="text-center mt-2 mb-6 pb-2 text-xl sm:text-2xl font-semibold border-b text-gray-500 border-gray-300">{{ $title }}</p>@endif
    @csrf
    {{ $slot }}
</form>
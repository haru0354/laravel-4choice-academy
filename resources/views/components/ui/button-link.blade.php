@props([
    'color' => 'blue',
    'size' => 'normal',
    'route' => null,
])

@php
    $colors = [
        'blue' => 'text-white shadow-md bg-blue-500 hover:bg-blue-700',
        'red' => 'text-white shadow-md bg-red-500 hover:bg-red-700',
        'green' => 'text-white shadow-md bg-green-500 hover:bg-green-700',
        'gray' => 'text-white shadow-md bg-gray-500 hover:bg-gray-700',
        'white' => 'hover:bg-gray-200',
    ];

    $sizes = [
        'full' => 'w-full my-2 py-3 px-6',
        'normal' => 'min-w-[180px] my-2 py-3 px-8',
        'small' => 'min-w-[120px] my-2 py-3 px-4',
    ];

    $colorClass = $colors[$color] ?? $colors['blue'];
    $sizeClass = $sizes[$size] ?? $sizes['normal'];
@endphp

<a href="{{ $route }}"
    {{ $attributes->merge(['class' => "$colorClass $sizeClass inline-block text-center font-bold  transition duration-200"]) }}>
    {{ $slot }}
</a>

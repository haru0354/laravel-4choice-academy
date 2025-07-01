@props([
    'title',
    'contents' => null,
    'src' => '/src',
    'alt' => '画像のaltが未設定',
    'imageRight' => true,
])

@php
    $position = $imageRight ? 'md:flex-row' : 'md:flex-row-reverse';
@endphp

<section class="py-10">
    <div class="{{ $position }} w-full md:w-[90%] mx-auto flex flex-col justify-center items-center md:items-start">
        <div class="w-full py-8 px-4">
            <h3 class="mb-10 text-center text-2xl font-bold">{{ $title }}</h3>
            @if (is_array($contents))
                @foreach ($contents as $content)
                    <p class="text-center md:text-left mb-4">{{ $content }}</p>
                @endforeach
            @endif
        </div>
        <div class="p-4 w-full">
            <img src="{{ asset($src) }}" alt="{{ $alt }}" class="border rounded hover:scale-125 transition duration-300 border-gray-300 bg-gray-200">
        </div>
    </div>
</section>
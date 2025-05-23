@props([
    'title',
    'contents' => null,
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
                    <p class="text-center md:text-left mb-2">{{ $content }}</p>
                @endforeach
            @endif
        </div>
        <div class="p-4">
            <img src="{{ asset('images/sample.jpg') }}" alt="サンプル画像" class="w-[350px] h-[260px] bg-gray-200">
        </div>
    </div>
</section>
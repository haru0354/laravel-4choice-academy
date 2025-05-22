@props([
    'title',
    'contents' => null,
    'imageRight' => true,
])

@php
    $position = $imageRight ? 'md:flex-row' : 'md:flex-row-reverse';
@endphp

<section class="w-full my-4">
    <div class="w-[85%] mx-auto flex flex-col {{ $position }} justify-center">
        <div class="w-full p-4">
            <h2 class="my-8 text-center text-2xl font-bold">{{ $title }}</h2>
            @if (is_array($contents))
                @foreach ($contents as $content)
                    <p class="mb-2">{{ $content }}</p>
                @endforeach
            @endif
        </div>
        <div class="p-4">
            <img src="{{ asset('images/sample.jpg') }}" alt="サンプル画像" class="w-[350px] h-[260px] bg-gray-200">
        </div>
    </div>
</section>
@props([
    'title',
    'contents' => [
        'title' => null,
        'content' => null
    ],
])

@php
    $bgColors = ['bg-blue-100 text-blue-600', 'bg-green-100 text-green-600', 'bg-pink-100 text-pink-600'];
@endphp

<x-layout.section-container title="{{ $title }}">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
        @foreach ($contents as $content)
            @php
                $colorClass = $bgColors[($loop->index) % count($bgColors)];
            @endphp
            <div class="flex flex-col items-center">
                <div class="{{ $colorClass }} flex items-center justify-center w-16 h-16 mb-4 text-xl font-bold rounded-full">
                    {{ $loop->iteration }}
                </div>
                <h3 class="text-xl font-semibold mb-4">{{ $content['title'] }}</h3>
                <p>{{ $content['content'] }}</p>
            </div>
        @endforeach
    </div>
</x-layout.section-container>
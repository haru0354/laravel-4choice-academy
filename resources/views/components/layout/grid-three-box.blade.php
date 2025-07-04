@props([
    'title' => null,
    'contents' => [
        'title' => null,
        'content' => null
    ],
])

<x-layout.section-container title="{{ $title }}">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach ($contents as $content)
        <div class="p-4 rounded shadow border border-gray-400">
            <h3 class="text-xl font-semibold my-2">{{ $content['title'] }}</h3>
            <p>{{ $content['content'] }}</p>
        </div>
        @endforeach
    </div>
</x-layout.section-container>
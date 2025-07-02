@props([
    'title',
    'contents' => [
        'title' => null,
        'content' => null,
        'src' => '/src',
        'alt' => '画像の準備中',
    ],
])

<x-layout.section-container title="{{ $title }}">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
         @foreach ($contents as $content)
            <div class="flex flex-col items-center">
                <h3 class="text-xl font-semibold mb-4">{{ $content['title'] }}</h3>
                <img src="{{ asset($content['src']) }}" alt="{{ $content['alt'] }}" class="mb-4 bg-gray-200">
                <p>{{ $content['content'] }}</p>
            </div>
        @endforeach
    </div>
</x-layout.section-container>
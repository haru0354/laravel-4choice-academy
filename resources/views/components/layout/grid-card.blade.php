@props([
    'title',
    'contents' => [
        'title' => null,
        'content' => null
    ],
])

<section class="w-full py-16">
    <div>
        <h2 class="mb-10 text-center text-3xl font-bold">{{ $title }}</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            @foreach ($contents as $content)
                <div class="flex flex-col items-center">
                    <h3 class="text-xl font-semibold mb-4">{{ $content['title'] }}</h3>
                    <img src="{{ asset('images/sample.jpg') }}" alt="サンプル画像" class="w-[350px] h-[260px] mb-4 bg-gray-200">
                    <p>{{ $content['content'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
@props([
    'title' => null,
    'contents' => null,
])

<x-layout.section-container bg="bg-[#738CA1]">
    <div class="flex flex-col items-center justify-center text-center p-8 rounded text-gray-500 bg-white">
        <h2 class="mb-4 text-3xl font-bold">{{ $title }}</h2>
        @if ($contents)
            @foreach ($contents as $content) 
                <p class="mb-4">{{ $content }}</p> 
            @endforeach
        @endif
        <x-ui.button-link route="{{ route('register') }}" color="blue" size="normal" class="rounded">登録</x-ui.button-link>
    </div>
</x-layout.section-container>
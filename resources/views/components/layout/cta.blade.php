@props([
    'title' => null,
    'content' => null,
])

<section class="p-6 md:p-16">
    <div class="flex flex-col items-center justify-center text-center text-gray-500 ">
        <h2 class="mb-4 text-2xl font-bold">{{ $title }}</h2>
        @if ($content) <p class="mb-4">{{ $content }}</p> @endif
        <x-ui.button-link route="{{ route('register') }}" color="blue" size="normal" class="rounded">登録</x-ui.button-link>
    </div>
</section>
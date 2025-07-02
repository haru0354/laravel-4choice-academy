@props([
    'title' => null,
    'bg' => 'bg-white',
])

<section class="{{ $bg }} flex items-center justify-center w-full py-16 px-4">
    <div class="max-w-[1120px]">
        @if ($title)
            <h2 class="mb-16 text-center text-3xl font-bold">{{ $title }}</h2>
        @endif

        {{ $slot }}
    </div>
</section>
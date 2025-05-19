<section>
    @php
    $drill = $drills[$currentIndex];
    @endphp

    <div class="flex fixed inset-0 items-center justify-center w-full h-full bg-gray-700 bg-opacity-50 z-50">
        <div class="flex items-center justify-center w-full max-w-[600px] min-h-[250px] mx-2 p-6 shadow-lg scroll-y-auto overflow-auto border border-gray-400 bg-white">
            <h2 class="my-2 text-2xl font-semibold break-words">{{ $drill->question }}</h2>
        </div>
    </div>
    
</section>
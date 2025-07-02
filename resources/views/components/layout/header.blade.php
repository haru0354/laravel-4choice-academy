<header class="flex items-center justify-center w-full px-4">
    <div class="flex items-center justify-between w-full max-w-[1120px] h-16">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <x-application-logo class="h-9" />
            <span class="ml-3 text-xl">サイトタイトル</span>
        </a>
        @if (Route::has('login'))
            <livewire:welcome.navigation />
        @endif
    </div>
</header>
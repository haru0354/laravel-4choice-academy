<nav>
    @auth
    <a
        href="{{ url('/dashboard') }}"
        class="px-3 py-2 hover:text-sky-400">
        ダッシュボード
    </a>
    @else
    <a
        href="{{ route('login') }}"
        class="px-3 py-2 hover:text-sky-400">
        ログイン
    </a>

    @if (Route::has('register'))
    <a
        href="{{ route('register') }}"
        class="px-3 py-2 hover:text-sky-400">
        登録
    </a>
    @endif
    @endauth
</nav>
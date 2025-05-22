<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans">
    <div class="flex flex-col items-center justify-start">
        <div class="max-w-[1120px] mx-4">
            <header>
                @if (Route::has('login'))
                <livewire:welcome.navigation />
                @endif
            </header>

            <main class="py-6">
                <h1>📚 学習アプリへようこそ！</h1>
                <p>このアプリは、4択クイズとフラッシュカードを使って効率的に学習できるシンプルな学習支援ツールです。スマートフォン・PC問わずご利用いただけます。</p>

                <h2>🔍 主な機能</h2>
                <div class="features">
                    <div class="feature">
                        <strong>✔️ 4択クイズ</strong>
                        <p>ランダムまたはカテゴリ別に出題されるクイズで知識を確認できます。解答後には正解・解説も表示。</p>
                    </div>
                    <div class="feature">
                        <strong>✔️ フラッシュカード</strong>
                        <p>覚えたい単語や用語をカード形式で繰り返し復習できます。シンプルな操作で暗記効率UP！</p>
                    </div>
                    <div class="feature">
                        <strong>✔️ 学習履歴（※オプション）</strong>
                        <p>今後のアップデートで、自分の学習記録や正答率の推移も確認可能になります。</p>
                    </div>
                </div>

                <h2>🧑‍🏫 使い方</h2>
                <p>「クイズを始める」または「フラッシュカードで学習」ボタンから、すぐに学習をスタートできます。</p>
            </main>

            <x-layout.footer />
        </div>
    </div>

</body>

</html>
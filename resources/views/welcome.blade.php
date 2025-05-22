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
    <div class="flex flex-col items-center justify-start ">
        <div class="max-w-[1120px] mx-4">
            <x-layout.header />

            <main>
                <x-layout.hero />

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
                </div>

                <div>
                    CTA
                </div>
                <div>
                    QA
                </div>
                <div>
                    CTA
                </div>



            </main>

            <x-layout.footer />
        </div>
    </div>

</body>

</html>
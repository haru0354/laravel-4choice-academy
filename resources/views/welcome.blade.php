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
                <h2 class="mb-10 text-center text-3xl font-bold">簡単・手軽な学習アプリ</h2>
                <x-layout.flex-box
                    title='4択での学習レッスン'
                    :contents="[
                        'ランダムまたはカテゴリ別に出題されるクイズで知識を確認できます。',
                        '解答後には正解・解説も表示。'
                ]" />
                <x-layout.flex-box
                    :imageRight="false"
                    title='フラッシュカードによる暗記'
                    :contents="[
                        '覚えたい単語や用語をカード形式で繰り返し復習できます。',
                        'シンプルな操作で暗記効率UP'
                ]" />
                <x-layout.flex-box
                    title='レッスンの自作が可能'
                    :contents="[
                        '最初は「初期レッスン」が登録されているので、すぐにでも学習をすることができます。',
                        '「自作のレッスン」の作成が可能なので、オリジナルのレッスンを試すことができます。'
                ]" />
                <x-layout.grid-card title="様々な学習に利用可能！" :contents="[
                    ['title' => '初期レッスンの学習', 'content' => '初期のレッスンには「」や「」や「」などがあります。'],
                    ['title' => '英単語学習', 'content' => '英語の勉強に'],
                    ['title' => '資格の取得に！', 'content' => '資格の取得に利用が可能'],
                    ]" />
                <x-layout.cta title="レッスンの自作も可能" content='簡単にレッスンを作成することができます。また、フラッシュカードモードは自動で作成されます。' />
                <x-layout.grid-three-box title='●●の6つの特徴' :contents="[
                    ['title' => '完全無料', 'content' => '完全無料で利用をすることができます完全無料で利用をすることができます。'],
                    ['title' => '完全無料', 'content' => '完全無料で利用をすることができます完全無料で利用をすることができます。'],
                    ['title' => '完全無料', 'content' => '完全無料で利用をすることができます完全無料で利用をすることができます。'],
                    ['title' => '完全無料', 'content' => '完全無料で利用をすることができます完全無料で利用をすることができます。'],
                    ['title' => '完全無料', 'content' => '完全無料で利用をすることができます完全無料で利用をすることができます。'],
                    ['title' => '完全無料', 'content' => '完全無料で利用をすることができます完全無料で利用をすることができます。'],
                    ]" />
                <x-layout.three-step title='使い方はとっても簡単！' :contents="[
                    ['title' => 'アカウント登録', 'content' => 'メールアドレスかSNSアカウントで簡単にサインアップ。無料ですぐに始められます。'],
                    ['title' => 'レッスンを選択', 'content' => '用意されたクイズやフラッシュカードから学習コンテンツを選びましょう。'],
                    ['title' => '学習スタート！', 'content' => '用意されたクイズやフラッシュカードから学習コンテンツを選びましょう。'],
                    ]" />
                <x-layout.cta title='いますぐ無料ではじめる' />
            </main>

            <x-layout.footer />
        </div>
    </div>

</body>

</html>
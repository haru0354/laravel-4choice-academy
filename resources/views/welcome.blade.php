<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>レッスンアカデミー</title>

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

            <main class="">
                <x-layout.hero />
                <h2 class="mb-10 text-center text-3xl font-bold">簡単・手軽な学習アプリ</h2>
                <x-layout.flex-box
                    title='4択での学習レッスン'
                    src='images/thumbnail/lesson-start.webp'
                    alt="サンプル画像"
                    :contents="[
                        '次々と出題される問題から、4択で解答を選択していく学習ができます。',
                        '特に学習の最初の段階で利用がおすすめです',
                        '選択肢から選ぶ形式なので、「なんとなくの理解でも解答」をしていくことができるからです。',
                        '解答後には「正誤判定」と「解説」が表示されます。',
                ]" />
                <x-layout.flex-box
                    :imageRight="false"
                    title='フラッシュカードによる学習'
                    src='images/thumbnail/flashcard.webp'
                    alt="サンプル画像"
                    :contents="[
                        'フラッシュカードでの学習をしていくことができます。',
                        '単語の暗記などでも有効ですが、4択の次の学習段階での利用もおすすめです。',
                        '選択肢はなく頭の中で解答をしていくので、「解答にはきちんとした理解が必要」となるためです。',
                        '次へで裏面には「解答」と「解説」が表示されます。'
                ]" />
                <x-layout.flex-box
                    title='レッスンの自作が可能'
                    src='images/thumbnail/lesson-create.webp'
                    alt="サンプル画像"
                    :contents="[
                        '学習したいレッスンは自作をしていくことができます。',
                        'また、4択のレッスンを作成することで、フラッシュカードも自動で作成されます',
                        '「学校の勉強」「資格の学習」「個人的な仕事の学習」などなど、あなたが必要となるレッスンの作成をしていきましょう。',
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
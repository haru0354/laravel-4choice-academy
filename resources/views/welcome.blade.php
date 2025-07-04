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
        <x-layout.header />
        <main>
            <x-layout.hero />
            <x-layout.section-container title="簡単・手軽な学習アプリ">
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
            </x-layout.section-container>
            <x-layout.grid-card title="様々な学習に利用可能！" :contents="[
                    [
                        'title' => '初期登録レッスンの学習',
                        'src'=>'images/thumbnail/preparation.webp',
                        'alt' => '学習レッスンの準備中',
                        'content' => '初期のレッスンは現在準備中です。',
                    ],
                    [
                        'title' => '英語学習に！',
                        'src'=>'images/thumbnail/lesson-english.webp',
                        'alt' => 'サンプル画像',
                        'content' => '英語の学習にも利用できます。',
                    ],                    
                    [
                        'title' => '資格の取得に！',
                        'src'=>'images/thumbnail/qualification.webp',
                        'alt' => 'サンプル画像',
                        'content' => '資格取得の為の学習にも利用できます。',
                    ],
                ]" />
            <x-layout.cta title="どこでも手軽に学習" :contents="[
                    'PC・スマホ・タブレットから、手軽に学習をすることができます。',
                    'アプリなので面倒な準備はなく、すき間時間を利用して、学習をすることが可能。',
                    '「待ち時間」「移動時間」を利用してスキルアップし、周りと差を付けましょう'
                ]" />
            <x-layout.grid-three-box title='6つの特徴' :contents="[
                    ['title' => 'すき間時間で学習', 'content' => 'スマホ1つでどこでも学習ができます。たとえ30秒でも1つのレッスンを行ったり、着実に進む意味のある学習が可能です。'],
                    ['title' => '自作の学習ができる', 'content' => '学習する為のレッスンは自分でオリジナルのを作成することができます。今、あなたが必要と思っている事を勉強することができます。'],
                    ['title' => 'フラッシュカードを自動生成', 'content' => 'フラッシュカードは作成したレッスンを元に自動で生成がされます。そのため、1つ作成すれば2つのモードで学習ができます。'],
                    ['title' => '完全無料', 'content' => '完全無料で利用をすることができます。'],
                    ['title' => '登録が簡単', 'content' => 'アカウント登録に必要なのは「メールアドレス」「パスワード」「ニックネーム」の3種類のみです。'],
                    ['title' => 'あらゆる端末対応', 'content' => '「Android」「iphone」に限らず、PC・スマホ・タブレットでの利用で同じアカウントを利用できます。'],
                ]" />
            <x-layout.three-step title='使い方はとっても簡単！' :contents="[
                    ['title' => 'アカウント登録', 'content' => '「メールアドレス」「パスワード」「ニックネーム」で簡単にアカウント作成。無料ですぐに始められます。'],
                    ['title' => 'レッスンの作成', 'content' => '「英単語を覚える」「文法を学ぶ」「資格の勉強」。あなたの学習したいレッスンの作成をしましょう。'],
                    ['title' => '学習スタート！', 'content' => '「レッスン」「フラッシュカード」を選択肢し学習を開始です。'],
                ]" />
            <x-layout.cta title="いますぐ無料ではじめる" :contents="[
                    '完全に無料で利用できる学習アプリです。',
                    '「メールアドレス」 「パスワード」 「ニックネーム」で登録し、試しにはじめてみましょう。',
                ]" />
        </main>
        <x-layout.footer />
</body>

</html>
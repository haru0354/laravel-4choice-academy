# 学習アプリ（4 択 / フラッシュカード）の概要

|複数旅のプランの作成 | 各しおりにメモのCRUD |
|-------|-------|
| ![4択で学習するレッスン](/public/images/thumbnail/lesson-start.webp) | ![フラッシュカード（暗記カード）](/public/images/thumbnail/flashcard.webp) |

このアプリは、「4択クイズ」と「フラッシュカード」機能を備えた学習用 Web アプリケーションです。

各クイズは「レッスン」として分類されており、レッスンごとに問題を解いて学習をしていくことができます。

- 電車での移動中
- 待ち合わせ時間
- すき間時間の利用

などなど、私自信のエンジニアの学習手段の利用目的に、作成をしはじめました。

また、個人的にPHP / Laravel の学習をしたので、アウトプット目的としても、作成を開始したアプリでもあります。

## 主な機能

✅ 4 択モード（レッスン形式）

|1.レッスンの選択 | 2.4択から答えを選択） |
|-------|-------|
|　![レッスン一覧](/public/images/thumbnail/dashboard.webp) | ![4択で学習するレッスン](/public/images/thumbnail/lesson-start.webp) | |

|3.選択後に正誤判定と解説） | 4.レッスン終了時に間違え一覧| 
|-------|-------|
| ![正誤判定画面](/public/images/thumbnail/lesson-failed.webp) | ![レッスンの終了画面](/public/images/thumbnail/lesson-end.webp) |

各レッスンには複数の 4 択クイズが含まれます。

解答選択後に正誤判定と解説の表示がされます。

レッスン終了後には間違えた問題を一覧表示。

✅ フラッシュカードモード

|フラッシュカード（表面） | フラッシュカード（裏面） |
|-------|-------|
| ![フラッシュカード（表面）](/public/images/thumbnail/flashcard-front.webp) | ![フラッシュカード（裏面）](/public/images/thumbnail/flashcard-back.webp) |

レッスンで作成したデータを元にフラッシュカード（暗記カード）モードが利用できます。

表に「問題」、裏に「答え」「解説」が表示されます。

カードをめくっていき、表⇒裏⇒次のカードの表と進んでいきます。

復習に最適なシンプルモード。

4択モード用のレッスンを作成することで、自動でフラッシュカードモードが作成されます。

### アプリのサムネイル画像

|4択で学習するレッスン | フラッシュカード（暗記カード） |
|-------|-------|
| ![4択で学習するレッスン](/public/images/thumbnail/lesson-start.webp) | ![フラッシュカード（暗記カード）](/public/images/thumbnail/flashcard.webp) |


|正誤判定画面 | レッスンの終了画面 |
|-------|-------|
| ![正誤判定画面](/public/images/thumbnail/lesson-failed.webp) | ![レッスンの終了画面](/public/images/thumbnail/lesson-end.webp) |


|フラッシュカード（表面） | フラッシュカード（裏面） |
|-------|-------|
| ![フラッシュカード（表面）](/public/images/thumbnail/flashcard-front.webp) | ![フラッシュカード（裏面）](/public/images/thumbnail/flashcard-back.webp) |


|レッスン一覧 | 問題一覧 |
|-------|-------|
| ![レッスン一覧](/public/images/thumbnail/dashboard.webp) | ![問題一覧](/public/images/thumbnail/drill.webp) |


|レッスンの作成 | 問題の作成 |
|-------|-------|
| ![レッスンの作成](/public/images/thumbnail/lesson-create.webp) | ![問題の作成](/public/images/thumbnail/drill-create.webp) |


|フォームバリデーション| レッスンの削除 |
|-------|-------|
| ![フォームバリデーション](/public/images/thumbnail/validate.webp)| ![レッスンの削除](/public/images/thumbnail/delete-modal.webp) | 


### 2つの学習モードを使い分け

2つの学習モードを使い分けることで、効率良く学習するのを想定しています。

1. 初期学習時は「4択モード」で学習。

答えが選択式なので、正確な知識がなくても、解答がしやすい。

2. ある程度理解できたら「フラッシュカードモード」で学習

フラッシュカードでは、解答を頭で思い浮かべる必要があります。

そのため、問題に対しての知識がなければ、解答を思い浮かべることはできません。

## 使用技術

-   Laravel 10（バックエンド）
-   Blade（テンプレートエンジン）
-   Tailwind CSS（スタイリング）
-   Alpine.js（簡易的なフロントエンド動作）
-   MySQL(DB)

## セットアップ手順

1. リポジトリをクローン：

```
git clone https://github.com/haru0354/laravel-4choice-academy.git

cd laravel-4choice-academy
```

2. 依存関係をインストール：

```
composer install

npm install
```

3. 環境ファイルを設定：

```
cp .env.example .env

php artisan key:generate
```

4. データベースを準備：
```
php artisan migrate --seed
```

5. サーバーを起動：
```
npm run dev

php artisan serve
```

### コマンドの概要

| コマンド                     | 説明                                   |
| ---------------------------- | -------------------------------------- |
| `npm install`                | フロントエンドの依存関係をインストール |
| `composer install`           | PHP（Laravel）の依存関係をインストール |
| `php artisan key:generate`   | アプリケーションキーを生成             |
| `php artisan migrate --seed` | DB に初期データの挿入                  |
| `php artisan serve`          | Laravel のローカル開発サーバーを起動   |
| `npm run dev`                | フロントエンドのビルドと監視を開始     |

## 作成した目的

このアプリを作成した目的は主に2つです。

1. Laravel学習後のアウトプット目的
2. 私自身がエンジニア勉強目的に移動時間などに利用

主に私自身がプログラミングの学修目的に作成しています。

1. AIを利用し問題を作成
2. seedersにて一括で登録
3. 通勤時間・すき間時間に学習

会社への通勤時間を利用して、学習をできるように開発をしました。

どんだけ疲れていようが、必ず1歩ずつ前に学習していくことができるよう、作成をしようと思った次第です。

## 実装検討中の機能

今後は「自分が利用」ではなく、「他人が利用」も考えて機能を追加していこうと思っています。

### 作成したレッスンの共有設定

自己作成したレッスンを他人と共有できるようにする。

### 共有されてるレッスンを取得

共有されてるレッスンを取得して、学習できるようにする。

### 一括でレッスンの問題を登録

現状、自分で作成する分には一括で登録ができるが、誰でも可能にできるようにする。

但し、問題数は最大20問までなど、制限はする予定。

個人利用者がAIなどを利用してアプリを登録し、一括でコピー貼り付けで問題を登録できるようにする。

必要性に応じてエクセルなどの形式も検討。


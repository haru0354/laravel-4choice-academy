<?php

namespace Database\Seeders;

use App\Models\Drill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DrillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $drills = [
            // lesson_id: 1  Laravelの問題
            [
                'user_id' => 1,
                'lesson_id' => 1,
                'question' => 'Laravelの最新バージョンは何ですか？',
                'choice_1' => '9.x',
                'choice_2' => '10.x',
                'choice_3' => '11.x',
                'choice_4' => '12.x',
                'correct_choice' => 4,
                'explanations' => 'Laravel 12.xは最新の安定バージョンです。',
            ],
            [
                'user_id' => 1,
                'lesson_id' => 1,
                'question' => 'Laravelのルーティングファイルはどこにありますか？',
                'choice_1' => 'app/Routes',
                'choice_2' => 'routes/web.php',
                'choice_3' => 'config/routes.php',
                'choice_4' => 'resources/routes/web.php',
                'correct_choice' => 2,
                'explanations' => 'ルーティングは基本的に routes/web.php に定義します。',
            ],
            [
                'user_id' => 1,
                'lesson_id' => 1,
                'question' => 'Laravelの公式テンプレートエンジンは何ですか？',
                'choice_1' => 'Twig',
                'choice_2' => 'Blade',
                'choice_3' => 'Smarty',
                'choice_4' => 'React',
                'correct_choice' => 2,
                'explanations' => 'BladeはLaravelのデフォルトのテンプレートエンジンです。',
            ],
            [
                'user_id' => 1,
                'lesson_id' => 1,
                'question' => 'Eloquent ORMは何の役割を果たしますか？',
                'choice_1' => 'メール送信',
                'choice_2' => 'ファイルアップロード',
                'choice_3' => 'データベースとのやり取り',
                'choice_4' => 'セッション管理',
                'correct_choice' => 3,
                'explanations' => 'EloquentはLaravelのORMで、データベース操作を簡潔に記述できます。',
            ],
            [
                'user_id' => 1,
                'lesson_id' => 1,
                'question' => 'Laravelでマイグレーションを実行するコマンドは？',
                'choice_1' => 'php artisan migrate',
                'choice_2' => 'php artisan seed',
                'choice_3' => 'php artisan db:create',
                'choice_4' => 'php artisan migrate:reset',
                'correct_choice' => 1,
                'explanations' => 'マイグレーションは "php artisan migrate" で実行します。',
            ],

            // lesson_id: 2  PHPの問題
            [
                'user_id' => 1,
                'lesson_id' => 2,
                'question' => 'PHPで変数を定義する際の記号は？',
                'choice_1' => '&',
                'choice_2' => '$',
                'choice_3' => '@',
                'choice_4' => '#',
                'correct_choice' => 2,
                'explanations' => 'PHPの変数は $ 記号で始まります。',
            ],
            [
                'user_id' => 1,
                'lesson_id' => 2,
                'question' => 'PHPの配列に値を追加する方法は？',
                'choice_1' => '$array[] = 値;',
                'choice_2' => '$array->add(値);',
                'choice_3' => 'push($array, 値);',
                'choice_4' => '$array.add(値);',
                'correct_choice' => 1,
                'explanations' => '$array[] = 値; で末尾に追加できます。',
            ],
            [
                'user_id' => 1,
                'lesson_id' => 2,
                'question' => 'PHPで関数を定義するキーワードは？',
                'choice_1' => 'function',
                'choice_2' => 'def',
                'choice_3' => 'fun',
                'choice_4' => 'define',
                'correct_choice' => 1,
                'explanations' => 'PHPでは function キーワードで関数を定義します。',
            ],
            [
                'user_id' => 1,
                'lesson_id' => 2,
                'question' => 'PHPの終了タグは？',
                'choice_1' => '?>',
                'choice_2' => '</php>',
                'choice_3' => '%%>',
                'choice_4' => '!!>',
                'correct_choice' => 1,
                'explanations' => 'PHPのコードブロックは ?> で終了します。',
            ],
            [
                'user_id' => 1,
                'lesson_id' => 2,
                'question' => 'PHPのデフォルトファイル拡張子は？',
                'choice_1' => '.html',
                'choice_2' => '.js',
                'choice_3' => '.php',
                'choice_4' => '.phtml',
                'correct_choice' => 3,
                'explanations' => 'PHPファイルは .php 拡張子が基本です。',
            ],

            // lesson_id: 3  Reactの問題
            [
                'user_id' => 1,
                'lesson_id' => 3,
                'question' => 'Reactでコンポーネントを定義する方法は？',
                'choice_1' => 'function MyComponent() {}',
                'choice_2' => 'component MyComponent {}',
                'choice_3' => 'def MyComponent() {}',
                'choice_4' => 'React.createComponent()',
                'correct_choice' => 1,
                'explanations' => 'React関数コンポーネントは function で定義します。',
            ],
            [
                'user_id' => 1,
                'lesson_id' => 3,
                'question' => 'ReactのJSX内でコメントを書くには？',
                'choice_1' => '// コメント',
                'choice_2' => '/* コメント */',
                'choice_3' => '{/* コメント */}',
                'choice_4' => '<!-- コメント -->',
                'correct_choice' => 3,
                'explanations' => 'JSXでは {/* コメント */} の形式を使います。',
            ],
            [
                'user_id' => 1,
                'lesson_id' => 3,
                'question' => 'Reactで状態管理に使うフックは？',
                'choice_1' => 'useContext',
                'choice_2' => 'useState',
                'choice_3' => 'useEffect',
                'choice_4' => 'useReducer',
                'correct_choice' => 2,
                'explanations' => 'useStateはコンポーネントの状態を管理するためのフックです。',
            ],
            [
                'user_id' => 1,
                'lesson_id' => 3,
                'question' => 'Reactの仮想DOMの目的は？',
                'choice_1' => 'デザイン用',
                'choice_2' => '高速なUI更新',
                'choice_3' => 'セキュリティ強化',
                'choice_4' => 'バックエンド連携',
                'correct_choice' => 2,
                'explanations' => '仮想DOMは変更を最小限にし、UI更新を高速化します。',
            ],
            [
                'user_id' => 1,
                'lesson_id' => 3,
                'question' => 'Reactでライフサイクル管理に使うフックは？',
                'choice_1' => 'useMemo',
                'choice_2' => 'useRef',
                'choice_3' => 'useEffect',
                'choice_4' => 'useCallback',
                'correct_choice' => 3,
                'explanations' => 'useEffectは副作用処理やライフサイクル管理に使用されます。',
            ],

            // lesson_id: 4  JavaScriptの問題
            [
                'user_id' => 1,
                'lesson_id' => 4,
                'question' => 'JavaScriptで変数を定義する方法は？',
                'choice_1' => 'int x = 10;',
                'choice_2' => 'define x = 10;',
                'choice_3' => 'let x = 10;',
                'choice_4' => 'dim x = 10;',
                'correct_choice' => 3,
                'explanations' => 'let は ES6 以降の変数定義方法です。',
            ],
            [
                'user_id' => 1,
                'lesson_id' => 4,
                'question' => 'JavaScriptで配列の長さを取得するには？',
                'choice_1' => 'array.size()',
                'choice_2' => 'array.length',
                'choice_3' => 'array.count()',
                'choice_4' => 'array.length()',
                'correct_choice' => 2,
                'explanations' => '配列.length で配列の要素数が取得できます。',
            ],
            [
                'user_id' => 1,
                'lesson_id' => 4,
                'question' => 'JavaScriptの非同期処理で使われるのは？',
                'choice_1' => 'async/await',
                'choice_2' => 'try/catch',
                'choice_3' => 'loop',
                'choice_4' => 'thread',
                'correct_choice' => 1,
                'explanations' => 'async/await は Promise ベースの非同期処理を扱う構文です。',
            ],
            [
                'user_id' => 1,
                'lesson_id' => 4,
                'question' => 'JavaScriptのデータ型で存在しないものは？',
                'choice_1' => 'string',
                'choice_2' => 'number',
                'choice_3' => 'character',
                'choice_4' => 'boolean',
                'correct_choice' => 3,
                'explanations' => 'JavaScriptには character 型は存在しません。string を使用します。',
            ],
            [
                'user_id' => 1,
                'lesson_id' => 4,
                'question' => 'JavaScriptでオブジェクトのプロパティにアクセスする方法は？',
                'choice_1' => 'object->property',
                'choice_2' => 'object.property',
                'choice_3' => 'object::property',
                'choice_4' => 'object[property]',
                'correct_choice' => 2,
                'explanations' => 'ドット記法で object.property にアクセスします。',
            ],
        ];

        foreach ($drills as $drill) {
            Drill::create($drill);
        }
    }
}

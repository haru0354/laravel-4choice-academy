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
        ];

        foreach ($drills as $drill) {
            Drill::create($drill);
        }
    }
}

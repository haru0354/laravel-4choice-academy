<?php

namespace Database\Seeders;

use App\Models\Lesson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Pest\ArchPresets\Laravel;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lessons = [
            [
                'id' => 1,
                'user_id' => 1,
                'title' => "Laravelの問題集",
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'title' => "PHPの問題集",
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'title' => "Reactの問題集",
            ],
            [
                'id' => 4,
                'user_id' => 1,
                'title' => "Javascriptの問題集",
            ],
        ];

        foreach ($lessons as $lesson) {
            Lesson::create($lesson);
        }
    }
}

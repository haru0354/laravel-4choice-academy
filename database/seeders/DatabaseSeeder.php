<?php

namespace Database\Seeders;

use App\Models\Drill;
use App\Models\Lesson;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            LessonSeeder::class,
            DrillSeeder::class,
        ]);


        // 開発中に使用していたfactory
        // Lesson::factory()->count(5)->create();
        // Drill::factory()->count(20)->create();
    }
}

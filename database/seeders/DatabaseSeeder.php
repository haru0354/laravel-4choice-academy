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
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UserSeeder::class,
            DrillSeeder::class,
        ]);

        // Lesson::factory()->count(5)->create();
        // Drill::factory()->count(20)->create();
    }
}

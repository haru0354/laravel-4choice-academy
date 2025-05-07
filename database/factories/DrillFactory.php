<?php

namespace Database\Factories;

use App\Models\Drill;
use App\Models\Lesson;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Drills>
 */
class DrillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Drill::class;

    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'lesson_id' => Lesson::inRandomOrder()->first()->id,
            'question' => $this->faker->sentence,
            'choice_1' => $this->faker->word,
            'choice_2' => $this->faker->word,
            'choice_3' => $this->faker->word,
            'choice_4' => $this->faker->word,
            'correct_choice' => $this->faker->numberBetween(1, 4),
            'explanations' => $this->faker->paragraph,
        ];
    }
}

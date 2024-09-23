<?php

namespace Database\Factories;

use App\Models\Quiz;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuizFactory extends Factory
{
    protected $model = Quiz::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence, // Random sentence for the quiz name
            'description' => $this->faker->paragraph, // Random paragraph for the description
        ];
    }
}
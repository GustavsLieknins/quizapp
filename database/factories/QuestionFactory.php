<?php

namespace Database\Factories;

use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    protected $model = Question::class;

    public function definition(): array
    {
        return [
            'question' => $this->faker->sentence, // Random sentence for the question
            'option1' => $this->faker->word,     // Random word for option 1
            'option2' => $this->faker->word,     // Random word for option 2
            'option3' => $this->faker->word,     // Random word for option 3
            'option4' => $this->faker->word,     // Random word for option 4
            'answer' => 'option1',               // Default answer
            'quiz_id' => Quiz::factory(),        // Link the question to a quiz
        ];
    }
}
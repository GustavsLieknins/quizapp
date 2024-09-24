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
        // Define the options
        $options = [
            $this->faker->word, // Option1
            $this->faker->word, // Option2
            $this->faker->word, // Option3
            $this->faker->word, // Option4
        ];

        // Randomly select the correct answer index (0, 1)
        $correctAnswerIndex = $this->faker->numberBetween(0, 1);

        return [
            'question' => $this->faker->sentence,  // Random sentence for the question
            'option1' => $options[0],              // Assign first option
            'option2' => $options[1],              // Assign second option
            'option3' => $options[2],              // Assign third option
            'option4' => $options[3],              // Assign fourth option
            'answer'  => $correctAnswerIndex,      // Store the index of the correct option
            'quiz_id' => Quiz::factory(),          // Link to a quiz
        ];
    }
}
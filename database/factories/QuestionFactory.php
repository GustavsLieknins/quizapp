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
            'question' => 'Who is the founder of Microsoft?',
            'option1' => 'Bill Gates',
            'option2' => 'Steve Jobs',
            'option3' => 'Larry Page',
            'option4' => 'Mark Zuckerberg',
            'answer'  => 0,
            'quiz_id' => Quiz::factory()->sequence(fn($sequence) => [
                'name' => 'Quiz ' . $sequence->index . ': General Technology Knowledge',
                'description' => 'Questions about general technology knowledge.'
            ]),
        ];

        return [
            'question' => 'What does "HTTP" stand for?',
            'option1' => 'HyperText Transfer Protocol',
            'option2' => 'Hyperlink Text Transfer Procedure',
            'option3' => 'HyperTransfer Text Process',
            'option4' => 'HighText Transfer Protocol',
            'answer'  => 0,
            'quiz_id' => Quiz::factory(),
        ];

        return [
            'question' => 'Which company developed the Android operating system?',
            'option1' => 'Apple',
            'option2' => 'Microsoft',
            'option3' => 'Google',
            'option4' => 'IBM',
            'answer'  => 2,
            'quiz_id' => Quiz::factory(),
        ];

        return [
            'question' => 'What year was the first iPhone released?',
            'option1' => '2005',
            'option2' => '2007',
            'option3' => '2008',
            'option4' => '2010',
            'answer'  => 1,
            'quiz_id' => Quiz::factory(),
        ];

        return [
            'question' => 'What does "RAM" stand for?',
            'option1' => 'Random Application Memory',
            'option2' => 'Real Access Memory',
            'option3' => 'Random Access Memory',
            'option4' => 'Read Application Memory',
            'answer'  => 2,
            'quiz_id' => Quiz::factory(),
        ];

        return [
            'question' => 'Which company manufactures the PlayStation?',
            'option1' => 'Microsoft',
            'option2' => 'Sony',
            'option3' => 'Nintendo',
            'option4' => 'Sega',
            'answer'  => 1,
            'quiz_id' => Quiz::factory(),
        ];

        return [
            'question' => 'What programming language is primarily used for web development?',
            'option1' => 'Python',
            'option2' => 'HTML',
            'option3' => 'Java',
            'option4' => 'Swift',
            'answer'  => 1,
            'quiz_id' => Quiz::factory(),
        ];

        return [
            'question' => 'Who invented the World Wide Web?',
            'option1' => 'Tim Berners-Lee',
            'option2' => 'Bill Gates',
            'option3' => 'Steve Wozniak',
            'option4' => 'Vint Cerf',
            'answer'  => 0,
            'quiz_id' => Quiz::factory(),
        ];

        return [
            'question' => 'What does "VPN" stand for?',
            'option1' => 'Virtual Public Network',
            'option2' => 'Virtual Private Network',
            'option3' => 'Visual Protocol Network',
            'option4' => 'Virtual Password Network',
            'answer'  => 1,
            'quiz_id' => Quiz::factory(),
        ];

        return [
            'question' => 'Which company owns the Java programming language?',
            'option1' => 'Oracle',
            'option2' => 'Microsoft',
            'option3' => 'Apple',
            'option4' => 'Google',
            'answer'  => 0,
            'quiz_id' => Quiz::factory(),
        ];

        return [
            'question' => 'What type of malware is designed to take control of a computer and demand ransom?',
            'option1' => 'Virus',
            'option2' => 'Trojan',
            'option3' => 'Spyware',
            'option4' => 'Ransomware',
            'answer'  => 3,
            'quiz_id' => Quiz::factory(),
        ];

        return [
            'question' => 'In which year was the company Apple founded?',
            'option1' => '1975',
            'option2' => '1976',
            'option3' => '1980',
            'option4' => '1984',
            'answer'  => 1,
            'quiz_id' => Quiz::factory(),
        ];

        return [
            'question' => 'What is the name of Apple\'s macOS web browser?',
            'option1' => 'Chrome',
            'option2' => 'Firefox',
            'option3' => 'Safari',
            'option4' => 'Edge',
            'answer'  => 2,
            'quiz_id' => Quiz::factory(),
        ];

        return [
            'question' => 'Which programming language is used primarily for Android app development?',
            'option1' => 'Swift',
            'option2' => 'Kotlin',
            'option3' => 'Ruby',
            'option4' => 'C++',
            'answer'  => 1,
            'quiz_id' => Quiz::factory(),
        ];

        return [
            'question' => 'What does "SSD" stand for in computing?',
            'option1' => 'Solid State Device',
            'option2' => 'Standard Storage Disk',
            'option3' => 'Solid State Drive',
            'option4' => 'Secure Storage Device',
            'answer'  => 2,
            'quiz_id' => Quiz::factory(),
        ];
    }
}
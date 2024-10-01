<x-app-layout>
    <style>
        .container
        {
            margin-top: 10px;
        }
    </style>

    <div class="container">
        <h1 class="text-3xl font-bold mb-4">Quiz Leaderboards</h1>
        <ol class="list-decimal ml-6">
            @foreach ($quizzes as $quiz)
                <li class="mb-2">
                    <a class="text-blue-500 hover:text-blue-700 hover:underline" href="{{ route('leaderboard.show', $quiz->id) }}">{{ $quiz->name }}</a>
                </li>
            @endforeach
        </ol>
    </div>
</x-app-layout>


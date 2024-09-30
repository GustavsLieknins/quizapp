<x-app-layout>
    <div class="container">
        <h1 class="text-4xl text-center">Quiz Leaderboards</h1>
        <ol class="list-decimal">
            @foreach ($quizzes as $quiz)
                <li>
                    <a href="{{ route('leaderboard.show', $quiz->id) }}">{{ $quiz->name }}</a>
                </li>
            @endforeach
        </ol>
    </div>
</x-app-layout>
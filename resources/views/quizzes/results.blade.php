<x-app-layout>
    <div class="container">
        <h1>Quiz Completed!</h1>
        <p>You got {{ $correct }} out of {{ $questionCount }} questions correct.</p>
        <p>Incorrect Answers: {{ $incorrect }}</p>
        <a href="{{ route('quizzes.scores') }}">View Past Scores</a>
    </div>
</x-app-layout>
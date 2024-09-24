<x-app-layout>
    <div>
        <h1>UR skor</h1>
        <p>You answered {{ session('correct') }} out of {{ $questionCount }} correctly</p>
        <a href="{{ route('quizzes.show', request()->route('id')) }}">Retake Quiz</a>   
    </div>
</x-app-layout>

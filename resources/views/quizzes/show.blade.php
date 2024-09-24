<x-app-layout>
    <style>

    </style>
    <div class="container">
        <div class="main-wrapper">
            <div class="progress-bar">
                <div class="counter">
                    <p>Question: {{ session('curQuestion') }} of {{ $questionCount }}</p>
                </div>
            </div>
            <div>
                <h1>{{ $quiz->name }}</h1>
            </div>
            <div>
                <p>Question: {{ $questions[session('curQuestion') - 1]->question }}</p>
            </div>
            <div>
                <form action="{{ route('quizzes.next', $quiz->id) }}" method="POST">
                    @csrf
                        <label>
                            <input type="radio" name="answer" value="0">
                            {{ $questions[session('curQuestion') - 1]->option1 }}
                        </label>
                        <label>
                            <input type="radio" name="answer" value="1">
                            {{ $questions[session('curQuestion') - 1]->option2 }}
                        </label>
                        <label>
                            <input type="radio" name="answer" value="2">
                            {{ $questions[session('curQuestion') - 1]->option3 }}
                        </label>
                        <label>
                            <input type="radio" name="answer" value="3">
                            {{ $questions[session('curQuestion') - 1]->option4 }}
                        </label>
                        <button>Next</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <br>
                        <h1>{{ $quiz->name }}</h1>
                    </div>

                    <div class="card-body">
                        <p>{{ $quiz->description }}</p>

                        <form action="{{ route('questions.store') }}" method="POST" class="mt-4">
                            @csrf
                            <input type="hidden" name="quiz_id" value="{{ $quiz->id }}">

                            <div class="mb-4">
                                <label for="question" class="block text-gray-700">Question:</label>
                                <input type="text" id="question" name="question" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700">Correct Answer:</label>
                                <div class="flex items-center mb-2">
                                    <input type="radio" id="answer_true" name="answer" value="1" required class="mr-2">
                                    <label for="answer_true">True</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="answer_false" name="answer" value="0" required class="mr-2">
                                    <label for="answer_false">False</label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Add Question</button>
                        </form>

                        <h2 class="mt-6 text-lg font-bold">Questions:</h2>
                        <ul class="mt-4">
                            @foreach ($quiz->questions as $question)
                                <li class="mb-2">
                                    <strong>Q:</strong> {{ $question->question }} <br>
                                    @if (session('submitted_question') == $question->id)
                                        <strong>Correct Answer:</strong>
                                        <span class="{{ session('isCorrect') ? 'text-green-600' : 'text-red-600' }}">
                                            {{ $question->answer ? 'True' : 'False' }}
                                        </span>
                                    @endif

                                    <form action="{{ route('questions.answer', $question->id) }}" method="POST" class="mt-2">
                                        @csrf
                                        <div class="flex items-center mb-2">
                                            <input type="radio" id="user_answer_true_{{ $question->id }}" name="user_answer" value="1" required>
                                            <label for="user_answer_true_{{ $question->id }}">True</label>
                                        </div>
                                        <div class="flex items-center mb-2">
                                            <input type="radio" id="user_answer_false_{{ $question->id }}" name="user_answer" value="0" required>
                                            <label for="user_answer_false_{{ $question->id }}">False</label>
                                        </div>
                                        <button type="submit" class="btn btn-secondary">Submit Answer</button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>

                        <a href="{{ route('quizzes.index') }}" class="mt-4 inline-block">Back to Quizzes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

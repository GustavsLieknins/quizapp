<x-app-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1>{{ $quiz->name }}</h1>
                    </div>

                    <div class="card-body">
                        
                        <p>{{ $quiz->description }}</p>

                        <!-- Add more details about the quiz if needed -->
                        
                        <a href="{{ route('quizzes.index') }}">Back to Quizzes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
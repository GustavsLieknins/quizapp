<x-app-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $quiz->name }}</div>

                    <div class="card-body">
                        <h3>{{ $quiz->name }}</h3>
                        <p>{{ $quiz->description }}</p>

                        <!-- Add more details about the quiz if needed -->
                        
                        <a href="{{ route('quizzes.index') }}">Back to Quizzes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<x-app-layout>
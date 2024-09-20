<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $quiz->name }}</title>
</head>
<body>
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
</body>
</html>
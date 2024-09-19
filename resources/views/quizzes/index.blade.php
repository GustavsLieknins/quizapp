
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Quizzes</div>

                    <div class="card-body">
                        <ul>
                            @foreach ($quizzes as $quiz)
                                <li><a href="{{ route('quizzes.show', $quiz->id) }}">{{ $quiz->name }}</a></li>
                                <p>{{ $quiz->description }}</p>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>





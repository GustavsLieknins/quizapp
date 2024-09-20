<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .quiz-box {
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            transition: all .3s ease;
            width: 20vw;
            height: 20vh;
            text-align: center;
        }

        .quiz-box:hover {
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Quizzes</div>

                    <div class="card-body d-flex flex-wrap">
                        @foreach ($quizzes as $quiz)
                            <div class="quiz-box col-md-2 m-2 p-3 border rounded">
                                <h2>{{ $quiz->name }}</h2>
                                <p>{{ $quiz->description }}</p>
                                <a href="{{ route('quizzes.show', $quiz->id) }}" class="btn btn-primary">Take Quiz</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


<x-app-layout>
    <style>
        .container
        {
            display: flex;
            min-width: 100vw;
            height: calc(100vh - 40px);
            justify-content: center;
            align-items: center;
        }
        .main-wrapper
        {
            /* padding: 30px 150px;
            padding-bottom: 0px; */
            /* border-left: 1px solid gray;
            border-right: 1px solid gray; */
        }
        .form
        {
            display: flex;
            flex-direction: column;
        }
        .form > button
        {
            margin-top: 10px;
            background-color: #33b249;
            padding: 5px 10px;
            border-radius: 3px;
        }
        .bolder
        {
            font-weight: bold;
        }
        .form > label > input
        {
            margin-right: 5px;
        }
        .title-div
        {
            display: flex;
            justify-content: center;
            flex-direction: column;
            padding: 25px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius: 6px;
            font-size: x-large;
            margin-bottom: 150px;
            text-align: center;
        }
        .title-div > p
        {
            font-weight: bold;
            font-size: xx-large;
        }
        .results-div
        {
            display: flex;
            flex-direction: column;
        }
        .results-div-score
        {
            color: green;
            font-weight: 600;
        }
        .actions
        {
            display: flex;
            justify-content: space-around;
            flex-direction: column;
        }
        .action-retake
        {
            padding: 5px 10px;
            background-color: #33b249;
            border-radius: 3px;
            color: white;
            margin-top: 5px;
            font-weight: 500;

        }
        .action-choose
        {
            padding: 5px 10px;
            background-color: #0437F2;
            border-radius: 3px;
            color: white;
            margin-top: 5px;
            font-weight: 500;
        }
    </style>
    <div class="container">
        <div class="main-wrapper">
            <div class="title-div">
                <p>Your Quiz Results</p>
                <div class="results-div">
                    <div class="results-div-score">
                        <h1>{{ ucfirst(Auth::user()->username) }} you scored {{ $correct }} out of {{ $questionCount }}!</h1>
                    </div>
                    <div class="actions">
                        <a class="action-retake" href="/quizzes/{{ $lastQuiz_id }}">
                            Retake quiz
                            <!-- <a href="/quizzes/{{ $lastQuiz_id }}">Retake quiz</a> -->
                        </a>
                        <a class="action-choose" href="{{ route('quizzes.index') }}">
                            Choose another quiz
                            <!-- <a href="{{ route('quizzes.index') }}">Choose another quiz</a> -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


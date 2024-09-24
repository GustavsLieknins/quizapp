<x-app-layout>
    <style>
        .container
        {
            display: flex;
            min-width: 100vw;
            height: 100vh;
            justify-content: center;
        }
        .main-wrapper
        {
            padding: 30px 150px;
            padding-bottom: 0px;
            border-left: 1px solid gray;
            border-right: 1px solid gray;
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

    </style>
    <div class="container">
        <div class="main-wrapper">

            <div class="counter">
                <p>Question: {{ session('curQuestion') }} of {{ $questionCount }}</p>
            </div>
            <div style="width: 100%; border: 1px solid black; height: 20px;">
            <div class="progress-bar">
                <div style="width: {{ (session('curQuestion') - 1) / $questionCount * 100 }}%; background-color: green; height: 20px"></div>
            </div>
            </div>
            <div>
            
                <h1>{{ $quiz->name }}</h1>
            </div>
            <div>
                <p><span class="bolder">Question:</span> {{ $questions[session('curQuestion') - 1]->question }}</p>
            </div>
            <div>
                <form action="{{ route('quizzes.next', $quiz->id) }}" method="POST" class="form">
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

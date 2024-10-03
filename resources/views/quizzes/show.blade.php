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
            /* border-left: 1px solid gray;
            border-right: 1px solid gray; */
        }
        .form
        {
            display: flex;
            flex-direction: column;
            font-size: large;
        }
        .form > button
        {
            margin-top: 10px;
            background-color: #33b249;
            color: white;
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
            padding-bottom: 5px;
            font-weight: bold;
            font-size: x-large;
        }

        
        .progress-bar > div
        {
            border-radius: 1px;
            border-top-right-radius: 0px;
            border-bottom-right-radius: 0px;
        }
        .progress-bar-div
        {
            border-radius: 3px;
            margin-bottom: 5px;
        }
        .prog-bar-color
        {
            animation: progress 0.3s ease-in-out;
        }

        @keyframes progress
        {
            from
            {
                width: 0%;
            }
            to
            {
                width: {{ (session('curQuestion') - 1) / $questionCount * 100 }}%;
            }
        }

        @media (max-width: 767px) {
            .main-wrapper
            {
                padding: 20px 0px;
                padding-bottom: 0px;
                border-left: 0px;
                border-right: 0px;
                width: calc(100% - 80px);
            }
            .title-div
            {
                font-size: x-large;
                font-weight: bold;
            }
        }
        .question-p
        {
            font-size: large;
        }
    </style>
            @php
                $options = [
                    ['value' => 0, 'option' => $questions[session('curQuestion') - 1]->option1],
                    ['value' => 1, 'option' => $questions[session('curQuestion') - 1]->option2],
                    ['value' => 2, 'option' => $questions[session('curQuestion') - 1]->option3],
                    ['value' => 3, 'option' => $questions[session('curQuestion') - 1]->option4],
                ];
                shuffle($options);
            @endphp
    <div class="container">
        <div class="main-wrapper">

            <div class="title-div">
                <h1>{{ $quiz->name }}</h1>
            </div>
            <div class="counter">
                <p>Question: {{ session('curQuestion') }} of {{ $questionCount }}</p>
            </div>
            <div class="progress-bar-div" style="width: 100%; border: 1px solid black; height: 20px;">
            <div class="progress-bar">
                <div class="prog-bar-color" style="width: {{ (session('curQuestion') - 1) / $questionCount * 100 }}%; background-color: green; height: 18px"></div>
            </div>
            </div>
            <div>
                <p class="question-p"><span class="bolder">Question:</span> {{ $questions[session('curQuestion') - 1]->question }}</p>
            </div>
            <div>
                <form action="{{ route('quizzes.next', $quiz->id) }}" method="POST" class="form">
                    @csrf
                        @foreach ($options as $option)
                            <label>
                                <input type="radio" name="answer" value="{{ $option['value'] }}">
                                {{ $option['option'] }}
                            </label>
                        @endforeach
                        <input type="hidden" name="token69" value="{{ Str::random(32) }}">
                        <button>Next</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

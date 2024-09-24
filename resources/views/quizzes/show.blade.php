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


    </style>
    <div class="container">
        <div class="main-wrapper">

            <div class="counter">
                <p>Question: {{ session('curQuestion') }} of {{ $questionCount }}</p>
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

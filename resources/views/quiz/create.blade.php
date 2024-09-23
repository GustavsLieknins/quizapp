<x-app-layout>
    <style>
            .create-wrapper
            {
                margin-top: 3vh;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .create-wrapper > form 
            {
                display: flex;
                flex-direction: column;
                width: calc(100vw - 20px);
                padding: 0 10px;
                margin-bottom: 40px;
                /* overflow: hidden; */
                
            }
            .create-wrapper > form > .form-name
            {
                display: flex;
                margin-bottom: 20px;
                flex-direction: row;
                align-items: center;


            }

            .create-wrapper > form > .form-description
            {
                display: flex;
                margin-bottom: 20px;
                flex-direction: row;
                align-items: center;


            }

            .line
            {
                width: calc(100vw - 40px);
                height: 1px;
                background-color: black;
                margin-bottom: 20px;
            }

            .input-name
            {
                width: 100%;
                margin-left: 10px;
                background-color: transparent;
                border-radius: 4px;
            }
            .input-description
            {
                width: 100%;
                margin-left: 10px;
                background-color: transparent;
                border-radius: 4px;
                resize: none;
            }

            .questions-container
            {
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: center;
            }
            .questions-container > div
            {
                margin: 10px;
            }
            .question-amount
            {
                margin-bottom: 20px;
            }
    </style>

<div class="create-wrapper">
    <form action="{{ route('quizzes.store') }}" method="POST">
        @csrf
        <div class="form-name">
            <label for="name">Title:</label>
            <input type="text" name="name" id="name" required class="input-name">
        </div>
        <div class="line"></div>
        <div class="form-description">
            <label for="description">Description:</label>
            <textarea name="description" id="description" required class="input-description"></textarea>
        </div>
        <div class="line"></div>
        <div class="question-amount">
            <label for="question_amount">How many q's do you want to add?</label>
            <select name="question_amount" id="question_amount" required onchange="addQuestions()">
                    <option value="15">Select</option>
                @for ($i = 15; $i <= 20; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>
        <div class="questions-container" onload="myFunction()"></div>
        <div class="line"></div>
        <button type="submit">Submit</button>
    </form>
</div>

<script>
    function addQuestions() {
        const questionAmount = document.getElementById('question_amount').value;
        const questionsContainer = document.querySelector('.questions-container');
        questionsContainer.innerHTML = '';

        for (let i = 0; i < questionAmount; i++) {
            const questionDiv = document.createElement('div');
            questionDiv.classList.add('question');
            questionDiv.innerHTML = `
            <div>
                <label for="question-${i}">Q ${i + 1}</label>
                <input type="text" name="question-${i}" id="question-${i}" required>
                <div class="answer">
                <label for="answer-${i}-0">Answer 1</label>
                <input type="text" name="answer-${i}-0" id="answer-${i}-0" required>
                <input type="radio" name="correct-${i}" id="correct-${i}-0" value="0" required>
                <label for="correct-${i}-0">Correct</label>
            </div>
            <div class="answer">
                <label for="answer-${i}-1">Answer 2</label>
                <input type="text" name="answer-${i}-1" id="answer-${i}-1" required>
                <input type="radio" name="correct-${i}" id="correct-${i}-1" value="1" required>
                <label for="correct-${i}-1">Correct</label>
            </div>
            <div class="answer">
                <label for="answer-${i}-2">Answer 3</label>
                <input type="text" name="answer-${i}-2" id="answer-${i}-2" required>
                <input type="radio" name="correct-${i}" id="correct-${i}-2" value="2" required>
                <label for="correct-${i}-2">Correct</label>
            </div>
            <div class="answer">
                <label for="answer-${i}-3">Answer 4</label>
                <input type="text" name="answer-${i}-3" id="answer-${i}-3" required>
                <input type="radio" name="correct-${i}" id="correct-${i}-3" value="3" required>
                <label for="correct-${i}-3">Correct</label>
            </div>

            </div>`;
            questionsContainer.appendChild(questionDiv);
        }
    }
    
</script>

</x-app-layout>

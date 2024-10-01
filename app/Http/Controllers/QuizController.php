<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreQuizRequest;
use App\Http\Requests\UpdateQuizRequest;
use App\Models\Quiz;
use App\Models\Question;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::all();
        return view('quizzes.index', compact('quizzes'));
    }

    public function create()
    {
        return view('quizzes.create');
    }

    public function store(StoreQuizRequest $request)
    {
        $quiz = Quiz::create($request->all());
    
        for ($i = 0; $i < $request->question_amount; $i++) {
            Question::create([
                'question' => $request->input('question-' . $i),
                'option1'  => $request->input('answer-' . $i . '-0'),
                'option2'  => $request->input('answer-' . $i . '-1'),
                'option3'  => $request->input('answer-' . $i . '-2'),
                'option4'  => $request->input('answer-' . $i . '-3'),
                'answer'   => $request->input('correct-' . $i),            
                'quiz_id'  => $quiz->id,
            ]);
        }
    
        return redirect()->route('quizzes.index');
    }

    public function show($id)
    {
        session()->put('finished', false);
        $quiz = Quiz::find($id);
        $questions = Question::where('quiz_id', $id)->get();
        $questionCount = $questions->count();
    
        session()->put('curQuestion', 1);
        session()->put('correct', 0);
    
        return view('quizzes.show', compact('quiz', 'questions', 'questionCount'));
    }

    public function next(Request $request, $id)
    {
        if(session('finished') == true) {
            return redirect()->route('quizzes.index');
        }
        $quiz = Quiz::find($id);
        $questions = Question::where('quiz_id', $id)->get();
        $questionCount = $questions->count();
        if(session('token69') == $request->token69) {
            return view('quizzes.show', compact('quiz', 'questions', 'questionCount'));
        }
        session()->put('token69', $request->token69);

        if (session('finished') == true) {
            return view('quizzes.result', compact('questionCount'));
        }

        if ($request->isMethod('post') && $request->has('answer')) {
            if ($request->answer == $questions[session('curQuestion') - 1]->answer) {
                session()->put('correct', session('correct') + 1);
            }

            session()->put('curQuestion', session('curQuestion') + 1);
        }

        if (session('curQuestion') > $questionCount) {
            session()->put('finished', true);

            \App\Models\Score::create([
                'quizId' => $quiz->id,
                'userId' => auth()->id(),  // Assuming the user is logged in
                'score'  => session('correct')
            ]);


            session()->put('questionCount', $questionCount);
            session()->put('correct', session('correct'));
            session()->put('incorrect', $questionCount - session('correct'));
            session()->put('lastQuiz_id', $quiz->id);

            return redirect()->route('quizzes.result');
        }

        return view('quizzes.show', compact('quiz', 'questions', 'questionCount'));
    }

    
    public function result(Request $request)
    {
        return view('quizzes.result', [
            'questionCount' => session('questionCount'),
            'lastQuiz_id' => session('lastQuiz_id'),
            'correct' => session('correct'),
            'incorrect' => session('incorrect')
        ]);
    }
    public function edit(Quiz $quiz)
    {
        return view('quizzes.edit', compact('quiz'));
    }

    public function update(UpdateQuizRequest $request, Quiz $quiz)
    {
        $quiz->update($request->all());
        return redirect()->route('quizzes.index');
    }

    public function destroy(Quiz $quiz)
    {
        $quiz->delete();
        return redirect()->route('quizzes.index');
    }

    public function about()
    {
        return view('quizzes.about');
    }
}


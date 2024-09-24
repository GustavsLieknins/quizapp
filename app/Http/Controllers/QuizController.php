<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreQuizRequest;
use App\Http\Requests\UpdateQuizRequest;
use App\Models\Quiz;
use App\Models\Question;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quizzes = Quiz::all();
        return view('quizzes.index', compact('quizzes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('quizzes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
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
        $quiz = Quiz::find($id);
        $questions = Question::where('quiz_id', $id)->get();

        $questionCount = Question::where('quiz_id', $id)->count();

        session()->put('curQuestion', 1);
        session()->put('correct', 0);
        
        
        return view('quizzes.show', compact('quiz', 'questions', 'questionCount'));
    }

    public function next(Request $request, $id)
    {
        $quiz = Quiz::find($id);
        $questions = Question::where('quiz_id', $id)->get();
        $questionCount = Question::where('quiz_id', $id)->count();

        if($request->answer == $questions[session('curQuestion') - 1]->answer)
        {
            session()->put('correct', session('correct') + 1);
        }
        if(session('curQuestion') == $questionCount)
        {
            return view('quizzes.result', compact('questionCount'));
        }

        session()->put('curQuestion', session('curQuestion') + 1);
        return view('quizzes.show', compact('quiz', 'questions', 'questionCount'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quiz $quiz)
    {
        return view('quizzes.edit', compact('quiz'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuizRequest $request, Quiz $quiz)
    {
        $quiz->update($request->all());
        return redirect()->route('quizzes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
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


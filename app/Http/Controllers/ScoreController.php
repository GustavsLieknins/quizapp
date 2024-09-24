<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreScoreRequest;
use App\Http\Requests\UpdateScoreRequest;
use App\Models\Score;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $scores = \App\Models\Score::where('userId', auth()->id())
                ->join('quizzes', 'quizzes.id', '=', 'scores.quizId')
                ->leftJoin('questions', 'quizzes.id', '=', 'questions.quiz_id')
                ->select('quizzes.name as quiz_name', 'scores.score', 'scores.created_at', 
                         \DB::raw('COUNT(questions.id) as total_questions'))
                ->groupBy('quizzes.id', 'scores.score', 'scores.created_at')
                ->orderBy('scores.created_at', 'desc')
                ->get();

    return view('quizzes.scores', compact('scores'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreScoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Score $score)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateScoreRequest $request, Score $score)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Score $score)
    {
        //
    }
}

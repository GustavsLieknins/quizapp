<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Score;
use App\Models\User;

class LeaderboardController extends Controller
{
    // Display all quizzes available
    public function index()
    {
        $quizzes = Quiz::all(); // Fetch all quizzes
        return view('leaderboard.index', compact('quizzes'));
    }

    // Display the leaderboard for a specific quiz
    public function show(Quiz $quiz)
{
        // Fetch the highest score for each user who took the selected quiz
        $scores = Score::where('quizId', $quiz->id)
            ->join('users', 'users.id', '=', 'scores.userId')
            ->select('users.username', \DB::raw('MAX(scores.score) as score'))
            ->groupBy('users.id', 'users.username')
            ->orderBy('score', 'desc')
            ->get();

        return view('leaderboard.show', compact('quiz', 'scores'));
}

}

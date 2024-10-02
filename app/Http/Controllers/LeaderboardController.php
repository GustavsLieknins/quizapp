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
        $scoresAvg = Score::where('quizId', $quiz->id)
            ->join('users', 'users.id', '=', 'scores.userId')
            ->selectRaw("users.username, FORMAT(AVG(scores.score), 2) as score")
            ->groupBy('users.id', 'users.username')
            ->orderBy('score', 'desc')
            ->get();

        $scoresMax = Score::where('quizId', $quiz->id)
            ->join('users', 'users.id', '=', 'scores.userId')
            ->select('users.username', \DB::raw('MAX(scores.score) as score'))
            ->groupBy('users.id', 'users.username')
            ->orderBy('score', 'desc')
            ->get();

        $currentUserRank = null;
        $currentUserBestScore = null;
        $currentUserAvgScore = null;
        if (auth()->check()) {
            $currentUser = auth()->user();
            $currentUserScores = Score::where('userId', $currentUser->id)->where('quizId', $quiz->id)->get();

            if ($currentUserScores->isNotEmpty()) {
                $currentUserBestScore = $currentUserScores->max('score');
                $currentUserAvgScore = number_format($currentUserScores->avg('score'), 2);
                $currentUserRank = $scoresMax->where('username', $currentUser->username)->keys()->first() + 1;
            }
        }

        return view('leaderboard.show', compact('quiz', 'scoresAvg', 'scoresMax', 'currentUserRank', 'currentUserBestScore', 'currentUserAvgScore'));
    }

}

<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\LeaderboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\admin;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/quizzes/create', [QuizController::class, 'create'])->name('quizzes.create');
    Route::post('/quizzes', [QuizController::class, 'store'])->name('quizzes.store');
    Route::get('/quizzes/{quiz}/edit', [QuizController::class, 'edit'])->name('quizzes.edit');
    Route::put('/quizzes/{quiz}', [QuizController::class, 'update'])->name('quizzes.update');
    Route::delete('/quizzes/{quiz}', [QuizController::class, 'destroy'])->name('quizzes.destroy');
    Route::get('/quizzes/delete', [QuizController::class, 'delete'])->name('quizzes.delete');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/history', [ScoreController::class, 'index'])->name('scores.index');

    Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');
    Route::get('/quizzes/{quiz}', [QuizController::class, 'show'])->name('quizzes.show');

    Route::get("/about", [QuizController::class, "about"])->name('quizzes.about');

    Route::post('/next/{id}', [QuizController::class, 'next'])->name('quizzes.next');
    Route::get('quizzes/scores', [ScoreController::class, 'index'])->name('quizzes.scores');
    
    Route::get('/leaderboard', [LeaderboardController::class, 'index'])->name('leaderboard.index');
    Route::get('/leaderboard/{quiz}', [LeaderboardController::class, 'show'])->name('leaderboard.show');
    
    Route::get('/result', [QuizController::class, 'result'])->name('quizzes.result');
});

require __DIR__.'/auth.php';

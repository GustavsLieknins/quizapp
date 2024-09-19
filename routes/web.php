<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\admin;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth', 'admin'])->group(function () {

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes');

    Route::get('/scores', [QuizController::class, 'scores'])->name('scores');
    
});

require __DIR__.'/auth.php';

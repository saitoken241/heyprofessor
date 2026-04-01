<?php

use App\Http\Controllers\{DashboadController, ProfileController, Question, QuestionController};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    if (app()-> isLocal()) {
        auth()->loginUsingId(1);

        return to_route('dashboard');
    }

    return view('welcome');
});

Route::get('/dashboard', DashboadController::class)->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::put('/question/{question}', [QuestionController::class, 'update'])->name('question.update');
    Route::get('/question/{question}/edit', [QuestionController::class, 'edit'])->name('question.edit');
    Route::delete('/question/{question}', [QuestionController::class, 'destroy'])-> name('question.destroy');
    Route::post('/question/store', [QuestionController::class, 'store'])-> name('question.store');
    Route::post('/question/like/{question}', Question\LikeController::class) -> name('question.like');
    Route::post('/question/unlike/{question}', Question\UnlikeController::class) -> name('question.unlike');
    Route::put('/question/publish/{question}', Question\PublishController::class) -> name('question.publish');
    Route::get('/question', [QuestionController::class, 'index']) -> name('question.index');
});

require __DIR__ . '/auth.php';

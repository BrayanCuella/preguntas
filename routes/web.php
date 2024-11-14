<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('questions/create');
});
use App\Http\Controllers\QuestionController;

Route::get('questions/create', [QuestionController::class, 'create'])->name('questions.create');
Route::post('questions', [QuestionController::class, 'store'])->name('questions.store');
Route::get('questions/{question}', [QuestionController::class, 'show'])->name('questions.show');
Route::post('questions/{question}/answers', [QuestionController::class, 'storeAnswer'])->name('answers.store');
Route::get('test', [TestController::class, 'index'])->name('test.index');
Route::post('test/submit', [TestController::class, 'submit'])->name('test.submit');
Route::get('test/result', [TestController::class, 'result'])->name('test.result');


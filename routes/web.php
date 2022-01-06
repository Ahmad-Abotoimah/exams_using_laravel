<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/cat', CategoryController::class)->name('index','cat');

Auth::routes(['verify'=>true]);
Route::get('exams/{id}', 'App\Http\Controllers\ExamController@index')->name('exams')->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//questions
Route::get('/start/{id}', [App\Http\Controllers\QuestionController::class, 'index'])->name('start');
Route::post('/question1', [App\Http\Controllers\QuestionController::class, 'question1'])->name('question1');
Route::post('/question2', [App\Http\Controllers\QuestionController::class, 'question2'])->name('question2');
Route::post('/question3', [App\Http\Controllers\QuestionController::class, 'question3'])->name('question3');
Route::post('/question4', [App\Http\Controllers\QuestionController::class, 'question4'])->name('question4');
Route::post('/question5', [App\Http\Controllers\QuestionController::class, 'question5'])->name('question5');
Route::post('/question6', [App\Http\Controllers\QuestionController::class, 'question6'])->name('question6');
Route::post('/question7', [App\Http\Controllers\QuestionController::class, 'question7'])->name('question7');
Route::post('/question8', [App\Http\Controllers\QuestionController::class, 'question8'])->name('question8');
Route::post('/question9', [App\Http\Controllers\QuestionController::class, 'question9'])->name('question9');
Route::post('/question10', [App\Http\Controllers\QuestionController::class, 'question10'])->name('question10');
Route::get('/submit', [App\Http\Controllers\ResultController::class, 'store'])->name('submit');

//results
Route::get('/results', function () {
    return view('result');
})->name('results');

//admin
Route::resource('/admoon', AdminController::class)->middleware(['auth','adminauth']);
Route::get('/admooon', [App\Http\Controllers\AdminController::class, 'index2'])->name('admooon')->middleware(['auth','adminauth']);
Route::get('/manageadmoon', [App\Http\Controllers\AdminController::class, 'index3'])->name('admoonprofile')->middleware(['auth','adminauth']);
//categories
Route::resource('/managecategories', CategoryController::class,)->middleware(['auth','adminauth']);
Route::get('/showmanagecategories', [App\Http\Controllers\CategoryController::class, 'index2'])->name('cat-manage')->middleware(['auth','adminauth']);
//exams
Route::resource('/manageexams', ExamController::class,)->middleware(['auth','adminauth']);
Route::get('/showmanageexams', [App\Http\Controllers\ExamController::class, 'index2'])->name('exam-manage')->middleware(['auth','adminauth']);
//questions
Route::resource('/manageques', QuestionController::class,)->middleware(['auth','adminauth']);
Route::get('/showmanageques', [App\Http\Controllers\QuestionController::class, 'index2'])->name('ques-manage')->middleware(['auth','adminauth']);

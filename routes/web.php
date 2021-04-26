<?php

use App\Http\Controllers\ChosenController;
use App\Http\Controllers\SolutionsController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/stucontact', function () {
    return view('contactstu');
});
Route::resource('subjects', SubjectsController::class)->middleware(['auth']);
Route::resource('chosen', ChosenController::class)->middleware(['auth']);
Route::resource('subjects.tasks', TasksController::class)->shallow()->middleware(['auth']);
Route::resource('tasks.solutions', SolutionsController::class)->shallow()->middleware(['auth']);
Route::get('/', function () {
    return Auth::user()->isTeacher?view('layouts/teacherbase'):view('layouts/studentbase');
})->middleware(['auth'])->name('Subjects');


require __DIR__.'/auth.php';

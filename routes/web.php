<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [CourseController::class ,'index']);

Route::get('test', function (){
    $subjects= \App\Models\Subject::with('course')->get();
    dd($subjects);
});


Route::resource('subjects', SubjectController::class);

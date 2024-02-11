<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/groups', [\App\Http\Controllers\GroupController::class, 'index'])
    ->name('groups.index');
Route::get('/groups/create', [\App\Http\Controllers\GroupController::class, 'create'])
    ->name('groups.create');
Route::post('/groups', [\App\Http\Controllers\GroupController::class, 'store'])
    ->name('groups.index');
Route::get('/groups/{group}', [\App\Http\Controllers\GroupController::class, 'show'])
    ->name('groups.show');
Route::get('/groups/{group}/students/create', [\App\Http\Controllers\StudentController::class, 'create'])
    ->name('students.create');
Route::post('/groups/{group}/students', [\App\Http\Controllers\StudentController::class, 'store'])
    ->name('students.index');
Route::get('/groups/{group}/students/{student}', [\App\Http\Controllers\StudentController::class, 'show'])
    ->name('students.show');

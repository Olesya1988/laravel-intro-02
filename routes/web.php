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


Route::get('/groups', [\App\Http\Controllers\MyController::class, 'index'])
    ->name('groups.index');
Route::get('/groups/create', [\App\Http\Controllers\MyController::class, 'create'])
    ->name('groups.create');
Route::post('/groups', [\App\Http\Controllers\MyController::class, 'store'])
    ->name('create');
Route::get('/groups/{group}', [\App\Http\Controllers\MyController::class, 'show'])
    ->name('groups.show');
Route::get('/groups/{group}/students/create', [\App\Http\Controllers\MyController::class, 'create'])
    ->name('groups.create');
Route::post('/groups/{group}/students', [\App\Http\Controllers\MyController::class, 'store'])
    ->name('create');
Route::get('/groups/{group}/students/{student}', [\App\Http\Controllers\MyController::class, 'show'])
    ->name('create');

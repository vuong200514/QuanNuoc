<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
use App\Http\Controllers\StudentController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [StudentController::class, 'listStudent']);
// Route::get('/student', 'App\Http\Controllers\StudentController@listStudent');
Route::post('/edit', 'App\Http\Controllers\EditController@index')->name('edit');
Route::post('/editDeleteStudent/{id}', 'App\Http\Controllers\EditController@optStudent')->name('delete');
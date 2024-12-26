<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;

Route::get('/', function () {
    return view('home');
});
Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('login', [AuthController::class, 'login']) -> name('auth.login');

// Route::get('/test', [StudentController::class, 'listStudent']);
// Route::get('/student', 'App\Http\Controllers\StudentController@listStudent');
// Route::post('/edit', 'App\Http\Controllers\EditController@index')->name('edit');
// Route::post('/editDeleteStudent/{id}', 'App\Http\Controllers\EditController@optStudent')->name('delete');
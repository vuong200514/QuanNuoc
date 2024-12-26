<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DrinkController;

Route::get('/', function () {
    return view('Backend.auth.login');
});
// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('login', [AuthController::class, 'login']) -> name('auth.login');
Route::get('home', [DrinkController::class, 'tenquan']);

// Route::get('/test', [StudentController::class, 'listStudent']);
// Route::get('/student', 'App\Http\Controllers\StudentController@listStudent');
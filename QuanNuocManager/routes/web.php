<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DrinkController;

Route::get('/', function () {
    return view('Backend.auth.login');
});
Route::get('index', function () {
    return view('index');
});

Route::get('login', [AuthController::class, 'login']) -> name('auth.login');
Route::get('home', [AuthController::class, 'tenquan']);

Route::get('menu', [DrinkController::class, 'listdrinks']);


Route::post('/deleteDrink/{id}', 'App\Http\Controllers\DrinkController@deleteDrink')->name('delete');
Route::get('/deleteDrink/{id}', 'App\Http\Controllers\DrinkController@deleteDrink')->name('getDelete');
Route::get('/editDrink/{id}', 'App\Http\Controllers\DrinkController@editDrink')->name('getEdit');
Route::post('/saveDrink/{id}', 'App\Http\Controllers\DrinkController@saveDrink')->name('saveDrink');
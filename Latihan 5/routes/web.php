<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('/login');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/auth', [LoginController::class, 'auth']);

Route::get('/registration', [LoginController::class, 'registration']);
Route::post('/register', [LoginController::class, 'register']);

Route::get('/home', [LoginController::class, 'home'])->name('home');
Route::get('/logout', [LoginController::class, 'logout']);
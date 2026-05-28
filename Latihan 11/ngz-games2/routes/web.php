<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

// Mengalihkan halaman utama (/) langsung ke halaman daftar game (/games)
Route::get('/', function () {
    return redirect()->route('games.index');
});

// Otomatis membuat 7 rute CRUD standar Laravel untuk URL /games
Route::resource('games', GameController::class);

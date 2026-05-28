<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller {
    // 1. Menampilkan semua data game (Halaman Utama)
    public function index() {
        $games = Game::all();
        if (request()->segment(1) == 'api') return response()->json([
            'error' => false,
            'list' => $games,
        ]);
        return view('index', compact('games'));
    }

    // 2. Menampilkan halaman form tambah game
    public function create() {
        return view('tambah');
    }

    // 3. Menyimpan data game baru ke database
    public function store(Request $request) {
        // Validasi input form
        $request->validate([
            'title' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'price' => 'required|string|max:255',
        ]);

        // Simpan ke database
        Game::create($request->all());

        // Redirect kembali ke halaman utama dengan pesan sukses
        return redirect()->route('games.index')->with('success', 'Game berhasil ditambah');
    }

    // 4. Menampilkan detail game
    public function show(Game $game) {
        return redirect()->route('games.index');
    }

    // 5. Menampilkan halaman form edit game berdasarkan ID
    public function edit(Game $game) {
        return view('edit', compact('game'));
    }

    // 6. Menyimpan hasil edit game ke database
    public function update(Request $request, Game $game) {
        // Validasi input form
        $request->validate([
            'title' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        // Update data di database
        $game->update($request->all());

        // Redirect kembali dengan pesan sukses
        return redirect()->route('games.index')->with('success', 'Game berhasil diupdate!');
    }

    public function destroy(Game $game) {
        $game->delete();

        return redirect()->route('games.index')->with('success', 'Game berhasil dihapus!');
    }
}
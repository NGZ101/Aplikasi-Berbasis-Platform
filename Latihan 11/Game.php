<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    // Mendaftarkan kolom yang boleh diisi secara massal (Mass Assignment)
    protected $fillable = ['title', 'genre', 'price'];
}

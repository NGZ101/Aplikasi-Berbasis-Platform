<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGZ GAMES - Tambah Game</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/791ffebf52.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-4">
        <div class="icon mb-3">
            <i class="fa-brands fa-neos"></i>
            <p class="d-inline font-weight-bold">NGZ GAMES</p>
        </div>
        
        <h2>Tambah Game Baru</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('games.store') }}" method="POST" class="mt-4">
            @csrf <div class="mb-3">
                <label class="form-label">Judul Game</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Genre</label>
                <input type="text" name="genre" class="form-control" value="{{ old('genre') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Harga (Rp)</label>
                <input type="number" name="price" class="form-control" value="{{ old('price') }}" required>
            </div>
            
            <button type="submit" class="btn btn-success">Simpan Data</button>
            <a href="{{ route('games.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGZ GAMES - Edit Game</title>
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
        
        <h2>Edit Data Game</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('games.update', $game->id) }}" method="POST" class="mt-4">
            @csrf
            @method('PUT') <div class="mb-3">
                <label class="form-label">Judul Game</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $game->title) }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Genre</label>
                <input type="text" name="genre" class="form-control" value="{{ old('genre', $game->genre) }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Harga (Rp)</label>
                <input type="number" name="price" class="form-control" value="{{ old('price', $game->price) }}" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Update Data</button>
            <a href="{{ route('games.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
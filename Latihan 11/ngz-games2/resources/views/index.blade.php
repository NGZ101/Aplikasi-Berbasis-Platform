<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGZ GAMES - Daftar Game</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
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
        
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Daftar Game</h2>
            <a href="{{ route('games.create') }}" class="btn btn-primary">Tambah Game Baru</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card p-3 shadow-sm">
            <table id="tabelData" class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Judul Game</th>
                        <th>Genre</th>
                        <th>Harga (Rp)</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($games as $game)
                        <tr>
                            <td>{{ $game->id }}</td>
                            <td>{{ $game->title }}</td>
                            <td>{{ $game->genre }}</td>
                            <td>Rp {{ number_format($game->price, 0, ',', '.') }}</td>
                            <td>
                                <a href="{{ route('games.edit', $game->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                
                                <form action="{{ route('games.destroy', $game->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus game ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            // DataTables diaktifkan secara Client-Side (hanya mengatur UI tabel HTML statis di atas)
            $('#tabelData').DataTable();
        });
    </script>
</body>
</html>
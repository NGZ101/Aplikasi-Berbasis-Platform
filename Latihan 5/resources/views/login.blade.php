<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<head>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            
            <h2 class="custom-title">Login</h2>

            @if(session('error'))
                <div class="alert alert-danger text-center">{{ session('error') }}</div>
            @endif
            @if(session('success'))
                <div class="alert alert-success text-center">{{ session('success') }}</div>
            @endif

            <form action="/auth" method="POST">
                @csrf
                <div class="form-row-custom">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                </div>
                <div class="form-row-custom">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <div class="button-action-row">
                    <button type="submit" class="btn btn-success">Login</button>
                    <a href="/registration" class="custom-link text-primary">Belum punya akun? Register</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
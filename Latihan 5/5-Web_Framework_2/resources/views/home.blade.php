<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">

            <h2 class="custom-title">Selamat datang, <b>{{ Auth::user()->username }}</b>!</h2>

            <div>
                <a href="/logout" class="btn btn-primary">
                    Logout
                </a>
            </div>
        </div>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman About</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-link" href="/">Home</a>
            <a class="nav-link active" aria-current="page" href="/about">About</a>
            </div>
        </div>
        </div>
    </nav>
    <h1>Halaman About</h1>

    <p>NIM: {{ $data['nim'] }}</p>
    <p>Nama: {{ $data['nama'] }}</p>
    <p>Foto : <img src="{{ $data['foto'] }}" alt="Foto"></p>
</body>
</html>

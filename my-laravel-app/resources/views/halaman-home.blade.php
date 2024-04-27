<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
            <a class="nav-link" href="/about">About</a>
            </div>
        </div>
        </div>
    </nav>
    <h1>Halaman Home</h1>

    @foreach($data as $artikel)
        <h2>{{ $artikel['judul_artikel'] }}</h2>
        <a href="{{ $artikel['sumber'] }}" target="_blank"><h6>Sumber : {{ $artikel['sumber'] }}</h6></a>
        <p>{{ $artikel['isi_artikel'] }}</p>
    @endforeach
</body>
</html>
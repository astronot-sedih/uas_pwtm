<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman About</title>
</head>
<body>
    <h1>Halaman About</h1>

    <p>NIM: {{ $data['nim'] }}</p>
    <p>Nama: {{ $data['nama'] }}</p>
    <p>Foto : <img src="{{ $data['foto'] }}" alt="Foto"></p>
</body>
</html>

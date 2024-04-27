<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
</head>
<body>
    <h1>Halaman Home</h1>

    @foreach($data as $artikel)
        <h2>{{ $artikel['judul_artikel'] }}</h2>
        <p>{{ $artikel['isi_artikel'] }}</p>
    @endforeach
</body>
</html>
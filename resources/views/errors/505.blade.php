<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>500 - Kesalahan Server</title>
    <link rel="stylesheet" href="{{ asset('css/error.css') }}">
</head>
<body>
    <div class="container">
        <h1>500 - Kesalahan Server</h1>
        <p>Maaf, terjadi kesalahan pada server kami.</p>
        <a href="{{ route('home.index') }}">Kembali ke Beranda</a>
    </div>
</body>
</html>

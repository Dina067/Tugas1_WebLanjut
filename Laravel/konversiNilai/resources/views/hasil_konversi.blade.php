<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Konversi Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Hasil Konversi Nilai</h1>
        <p>Nilai Akhir: {{ $nilai }}</p>
        <p>Nilai Huruf: {{ $nilaiHuruf }}</p>
        <a href="{{ route('konversi-nilai') }}" class="btn btn-primary">Kembali</a>
    </div>
</body>
</html>

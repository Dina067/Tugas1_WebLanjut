<?php
require_once 'KonversiNilai.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $partisipasi = $_POST['partisipasi'];
    $tugas = $_POST['tugas'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];

    $nilai = new KonversiNilai($partisipasi, $tugas, $uts, $uas);
    $nilaiAkhir = $nilai->hitungNilaiAkhir();
    $nilaiHuruf = $nilai->konversiNilaiKeHuruf();
}
?>

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
        <p>Nilai Akhir: <?php echo $nilaiAkhir; ?></p>
        <p>Nilai Huruf: <?php echo $nilaiHuruf; ?></p>
        <a href="index.php" class="btn btn-primary">Kembali</a>
    </div>
</body>
</html>

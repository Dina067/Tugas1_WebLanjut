<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Konversi Nilai</h1>
        <form action="<?= base_url('konversi-nilai/hasil') ?>" method="post">
            <div class="mb-3">
                <label for="partisipasi" class="form-label">Nilai Partisipasi</label>
                <input type="number" class="form-control" id="partisipasi" name="partisipasi" min="0" max="100" required>
            </div>
            <div class="mb-3">
                <label for="tugas" class="form-label">Nilai Tugas</label>
                <input type="number" class="form-control" id="tugas" name="tugas" min="0" max="100" required>
            </div>
            <div class="mb-3">
                <label for="uts" class="form-label">Nilai UTS</label>
                <input type="number" class="form-control" id="uts" name="uts" min="0" max="100" required>
            </div>
            <div class="mb-3">
                <label for="uas" class="form-label">Nilai UAS</label>
                <input type="number" class="form-control" id="uas" name="uas" min="0" max="100" required>
            </div>
            <button type="submit" class="btn btn-primary">Hitung</button>
        </form>
    </div>
</body>
</html>

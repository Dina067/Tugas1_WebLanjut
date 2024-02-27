<?php
class KonversiNilai {
    private $partisipasi;
    private $tugas;
    private $uts;
    private $uas;

    public function __construct($partisipasi, $tugas, $uts, $uas) {
        $this->partisipasi = $partisipasi;
        $this->tugas = $tugas;
        $this->uts = $uts;
        $this->uas = $uas;
    }

    public function hitungNilaiAkhir() {
        $nilaiAkhir = (2 * $this->partisipasi + 3 * $this->tugas + 2 * $this->uts + 3 * $this->uas) / 10;
        return $nilaiAkhir;
    }

    public function konversiNilaiKeHuruf() {
        $nilaiAkhir = $this->hitungNilaiAkhir();
        if ($nilaiAkhir >= 85 && $nilaiAkhir < 100) {
            return "A";
        } elseif ($nilaiAkhir >= 80 && $nilaiAkhir < 85) {
            return "A-";
        } elseif ($nilaiAkhir >= 75 && $nilaiAkhir < 80) {
            return "B+";
        } elseif ($nilaiAkhir >= 70 && $nilaiAkhir < 75) {
            return "B";
        } elseif ($nilaiAkhir >= 65 && $nilaiAkhir < 70) {
            return "B-";
        } elseif ($nilaiAkhir >= 60 && $nilaiAkhir < 65) {
            return "C+";
        } elseif ($nilaiAkhir >= 55 && $nilaiAkhir < 60) {
            return "C";
        } elseif ($nilaiAkhir >= 40 && $nilaiAkhir < 55) {
            return "D";
        } elseif ($nilaiAkhir >= 0 && $nilaiAkhir < 40) {
            return "E";
        } else {
            return "Nilai tidak valid";
        }
    }
}
?>

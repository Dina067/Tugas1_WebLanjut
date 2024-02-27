<?php

namespace App\Controllers;

class KonversiNilaiController extends BaseController
{
    public function index()
    {
        return view('konversi_nilai');
    }

    public function hasil()
    {
        $partisipasi = $this->request->getPost('partisipasi');
        $tugas = $this->request->getPost('tugas');
        $uts = $this->request->getPost('uts');
        $uas = $this->request->getPost('uas');

        $nilai = $this->hitungNilaiAkhir($partisipasi, $tugas, $uts, $uas);
        $nilaiHuruf = $this->konversiNilaiKeHuruf($nilai);

        return view('hasil_konversi', [
            'nilai' => $nilai,
            'nilaiHuruf' => $nilaiHuruf
        ]);
    }

    private function hitungNilaiAkhir($partisipasi, $tugas, $uts, $uas)
    {
        return (2 * $partisipasi + 3 * $tugas + 2 * $uts + 3 * $uas) / 10;
    }

    private function konversiNilaiKeHuruf($nilai)
    {
        if ($nilai >= 85 && $nilai < 100) {
            return "A";
        } elseif ($nilai >= 80 && $nilai < 85) {
            return "A-";
        } elseif ($nilai >= 75 && $nilai < 80) {
            return "B+";
        } elseif ($nilai >= 70 && $nilai < 75) {
            return "B";
        } elseif ($nilai >= 65 && $nilai < 70) {
            return "B-";
        } elseif ($nilai >= 60 && $nilai < 65) {
            return "C+";
        } elseif ($nilai >= 55 && $nilai < 60) {
            return "C";
        } elseif ($nilai >= 40 && $nilai < 55) {
            return "D";
        } elseif ($nilai >= 0 && $nilai < 40) {
            return "E";
        } else {
            return "Nilai tidak valid";
        }
    }
}

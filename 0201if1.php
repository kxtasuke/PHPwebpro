<?php
$hasil = "Lulus";
if ($hasil == "Lulus") {
    echo "Selamat Anda $hasil";
}


echo "<h1>Contoh If dengan 2 pilihan</h1>";
if ($hasil == "Lulus") {
    echo "Selamat anda $hasil";
} else {
    echo "Maaf anda tidak $hasil";
}

echo "<h1>Contoh If dengan 3 pilihan</h1>";
// 60-100 lulus
// 50-59 remed
// 0-49 gagal
$nilai = 102;
if ($nilai >= 60) {
    echo "selamat anda <b>Lulus</b>. Nilai anda $nilai";
} elseif ($nilai >= 50) {
    echo "Anda harus <b>Remedial</b>. Nilai anda $nilai";
} else {
    echo "Maaf anda <b>Gagal</b>. Nilai anda $nilai";
}

echo "<h2>Batas atas</h2>";
if ($nilai < 50) {
    echo "Maaf anda <b>gagal</b>. Nilai anda $nilai";
} elseif ($nilai < 60) {
    echo "anda <b>Remedial</b>. Nilai anda $nilai";
} else {
    echo "Selamat anda <b>Lulus</b>. Nilai anda $nilai";
}

echo "<h2>Batas atas</h2>";
if ($nilai >= 60 AND $nilai <= 100) {
    echo "Selamat anda <b>Lulus</b>. Nilai anda $nilai";
} elseif ($nilai >= 50 AND $nilai < 60) {
    echo "anda <b>Remedial</b>. Nilai anda $nilai";
} elseif ($nilai >= 0 AND $nilai < 50) {
    echo "Maaf anda <b>Gagal</b>. Nilai anda $nilai";
} else {
    echo "ndak ada nilai $nilai kocak";
}
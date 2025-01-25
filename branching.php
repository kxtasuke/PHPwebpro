<?php
/* Aturan soal
85-100 : A sangat baik
70-84 : B baik
60-69 : c cukup
50-59 : d kurang
0-49 :  e sangat kurang 
************************/
$nilai = 40;
if($nilai >= 85 AND $nilai <= 100) {
    echo "Nilai anda $nilai, mendapat grade A predikat sangat baik. Hebat enteee";
} elseif($nilai >= 70 AND $nilai < 85) {
    echo "Nilai anda $nilai, mendapat grade B predikat baik. Rispek";
} elseif($nilai >= 60 AND $nilai < 70) {
    echo "Nilai anda $nilai, mendapat grade c cukup. Boleh lah";
} elseif($nilai >= 50 AND $nilai < 60) {
    echo "Nilai anda $nilai, mendapat grade d predikat kurang. Idiot";
} elseif($nilai >= 0 AND $nilai < 50) {
    echo "Nilai anda $nilai, mendapat grade e predikat sangat kurang. Yahh cupu idiot brainrot";
} else {
    echo "Tidak ada kategori untuk nilai $nilai EZZZZ";
} 

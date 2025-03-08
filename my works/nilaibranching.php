<?php
/* Aturan nilai
81-100 : A  bobot 4
78-80.99 : A- bobot 3.7
75-77.99 : B+ bobot 3.3
70-74.99 : B bobot 3
65-69.99 :  B- bobot 2.7
60-64.99 :  C+ bobot 2.3
55-59.99 :  C bobot 2
40-54.99 :  D bobot 1
0-39.99 :  E bobot 0
************************/
$nilai = 80.99;
if($nilai >= 81 AND $nilai <= 100) {
    echo "Nilai anda $nilai, mendapat grade A, bobot 4.";
} elseif($nilai >= 78 AND $nilai < 81) {
    echo "Nilai anda $nilai, mendapat grade A-, bobot 3.7.";
} elseif($nilai >= 75 AND $nilai < 78) {
    echo "Nilai anda $nilai, mendapat grade B+, bobot 3.3.";
} elseif($nilai >= 70 AND $nilai < 75) {
    echo "Nilai anda $nilai, mendapat grade B, bobot 3.";
} elseif($nilai >= 65 AND $nilai < 70) {
    echo "Nilai anda $nilai, mendapat grade B-, bobot 2.7.";
} elseif($nilai >= 60 AND $nilai < 65) {
    echo "Nilai anda $nilai, mendapat grade C+, bobot 2.3.";
} elseif($nilai >= 55 AND $nilai < 60) {
    echo "Nilai anda $nilai, mendapat grade C, bobot 2.";
} elseif($nilai >= 40 AND $nilai < 55) {
    echo "Nilai anda $nilai, mendapat grade D, bobot 1.";
} elseif($nilai >= 0 AND $nilai < 40) {
    echo "Nilai anda $nilai, mendapat grade E, bobot 0.";
} else {
    echo "Tidak ada kategori untuk nilai $nilai";
 } 
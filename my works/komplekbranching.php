<?php
function convertGrade($nilai) {
    if ($nilai >= 81 && $nilai <= 100) {
        return ['grade' => 'A', 'bobot' => 4];
    } elseif ($nilai >= 78 && $nilai < 81) {
        return ['grade' => 'A-', 'bobot' => 3.7];
    } elseif ($nilai >= 75 && $nilai < 78) {
        return ['grade' => 'B+', 'bobot' => 3.3];
    } elseif ($nilai >= 70 && $nilai < 75) {
        return ['grade' => 'B', 'bobot' => 3];
    } elseif ($nilai >= 65 && $nilai < 70) {
        return ['grade' => 'B-', 'bobot' => 2.7];
    } elseif ($nilai >= 60 && $nilai < 65) {
        return ['grade' => 'C+', 'bobot' => 2.3];
    } elseif ($nilai >= 55 && $nilai < 60) {
        return ['grade' => 'C', 'bobot' => 2];
    } elseif ($nilai >= 40 && $nilai < 55) {
        return ['grade' => 'D', 'bobot' => 1];
    } elseif ($nilai >= 0 && $nilai < 40) {
        return ['grade' => 'E', 'bobot' => 0];
    } else {
        return ['grade' => 'Invalid', 'bobot' => 0];
    }
}

// Contoh penggunaan
$nilai = 100;
$result = convertGrade($nilai);
echo "Nilai: $nilai, Grade: " . $result['grade'] . ", Bobot: " . $result['bobot'];
?>

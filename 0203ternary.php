<?php
echo "<h1>Contoh ternary operator</h1>";
$gender = "Laki-laki"; 
echo $gender == "Laki-laki" ? "Laki-laki" : "perempuan";

echo "<hr>";
if ($gender == "Laki-laki") {
    echo "Laki-laki";
} else {
    echo "perempuan";
}

echo "<hr>";

$waktu = 24;
echo $waktu <= 18 ? "siang hari" : "malam hari";

echo "<hr>";
if ($waktu <= 18) {
    echo "siang hari";
} else {
    echo "malam hari";
}





















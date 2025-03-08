<?php
$a = ['Merah', 'Kuning', 'Hijau'];

$apakahVariabelABernilaiNull = is_null($a); # hasilnya false
$apakahVariabelABertipeArray = is_array($a); # hasilnya true
$panjangA = count($a); # 3

$passwordTerenkripsi = md5('12345');

var_dump($apakahVariabelABernilaiNull);
echo "<br>";
var_dump($apakahVariabelABertipeArray);
echo "<br>";
var_dump($panjangA);
echo "<br>";
var_dump($passwordTerenkripsi);
echo "<br>";
<?php
for ($i = 2; $i <= 10; $i+=2){
    echo "nilai i = $i <br>";
} 
echo "<hr>";
for ($i = 1; $i <= 5; $i++){
    echo "nilai i = $i <br>";
} 
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo "* ";
    }

    echo "<br>";
}

for($i = 0; $i < 50; $i++){
    if($i % 10== 0){
        continue;
    }

    echo "perulangan ke {$i}<br>";

    if($i > 40){
        break;
    }
}

$list = ['udin', 'rusdi', 'mulyo'];
for ($i = 0; $i < count($list); $i++) {
    echo "nama: {$list[$i]} <br>";
}

$i = 1;
# perulangan ini akan dilakukan selama nilai $i kurang dari 20. mirip seperti for hanya saja codenya ditaro di
while ($i < 20) {
    echo "Perulangan ke-{$i} <br>";
    $i++;
}

$i = 1;
while ($i % 3 !== 0) {
    echo "Nilai i = {$i} <br>";
    # ubah nilai $i secara random dari angka 1-100
    $i = rand(1, 100);
}
$list = ['udin', 'rusdi', 'mulyo'];
for ($i = 0; $i < count($list); $i++) {
    echo "nama siswa: {$list[$i]} <br>";
}

foreach($list as $nama){
    echo "nama: $nama <br>";
}
foreach($list as $key => $nama){
    echo "[{$key}] nama: $nama <br>";
}
<?php
function fibonacci ($no, $a = 0, $b = 1) {
    if ($no == 0)
        return $a;
    else if ($no == 1)
        return $b;
    else 
        return fibonacci($no - 1, $b, $a + $b);
}

$no = 29;
for ($i = 0; $i <= $no; $i++) {
    if ($i == 11) {
        echo ($i + 1) . ". " . fibonacci($i) . " - Fawwaz Raissa Alevino <br>";
    } else {
        echo ($i + 1) . ". " . fibonacci($i) . " <br>";
    }
}
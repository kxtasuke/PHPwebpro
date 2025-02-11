<?php
//prime number code 1
function isPrime($no) {
    if ($no <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($no); $i++) {
        if ($no % $i == 0) {
            return false;
        }
    }
    return true;
}

echo "Bilangan prima antara 0-50:<br>";
for ($i = 0; $i <= 50; $i++) {
    if (isPrime($i)) {
        echo $i . "<br>";
    }
}

?>

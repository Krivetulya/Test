<?php
$array = [1, 2, 3, 4, 5];

for ($i = 0; $i < count($array); $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
        echo "[" . $array[$i] . "," . $array[$j] . "]" . PHP_EOL;
    }
}
?> 
    
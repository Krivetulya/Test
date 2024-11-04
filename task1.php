<?php
function reverseArray(array $array): array {
    $reverseAray = []; //пустой масив для реверса
    for ($i = count ($array) - 1; $i >= 0 ; $i--) {
        $reverseAray[] = $array[$i];
    }
    return $reverseAray;
}
$array =  [ 'Vlad','Natasha' , 'Emil', 'Yaroslav', 'Kuzya', 'Olya',];
$reverseAray = reverseArray($array);
print_r($reverseAray);


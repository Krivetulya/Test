<?php
function minWord(string $str): string {
    $words = explode(" ", $str); 
    return min($words);
}
$str = "moskali must die";
echo "Москалі повинні  ". minWord  ($str); 
?>

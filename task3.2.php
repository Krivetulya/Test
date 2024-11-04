<?php
function minWord(string $str): string {
 $array = explode(" ", $str);
 $shortWord = $array[0]; 

foreach ($array as $word) {
    if (strlen($word) < strlen($shortWord)) {
        $shortWord = $word; 
    }
}
return $shortWord;
}
$str = "moskali must die";
echo "Москалі повинні: " . minWord($str);
?>

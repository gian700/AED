<?php
if (!file_exists("TestFolder/")) {
    mkdir("TestFolder");
}

if (!file_exists("TestFolder/tabla_5.txt")) {
    $file = fopen("TestFolder/tabla_5.txt", "w");
    for ($i=1; $i < 11 ; $i++) { 
        fwrite($file, "5 * $i = " . $i*5 . "\n");
    }
    fclose($file);
}

$file = fopen("TestFolder/tabla_5.txt", "r");
$array = [];

for ($i=0; $i < count(file("TestFolder/tabla_5.txt")); $i++) { 
    $array[] = fgets($file);
}
fclose($file);

print_r($array);
?>
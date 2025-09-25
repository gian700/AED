<?php
if (!file_exists("TestFolder/")) {
    mkdir("TestFolder");
}

if (!file_exists("TestFolder/nombres.txt")) {
    $file = fopen("TestFolder/nombres.txt", "w");
    $nombres = ["Ana", "Luis", "Marta", "Carlos", "Julia"];
    foreach ($nombres as $key => $value) {
        fwrite($file, $value . "\n");
    }
    fclose($file);
}

$file = fopen("TestFolder/nombres.txt", "r");
$array = [];

for ($i=0; $i < count(file("TestFolder/nombres.txt")); $i++) { 
    $array[] = fgets($file);
}
fclose($file);

print_r($array);
?>
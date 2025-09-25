<?php
if (!file_exists("TestFolder/")) {
    mkdir("TestFolder");
}

if (!file_exists("TestFolder/datos_numericos.txt")) {
    $file = fopen("TestFolder/datos_numericos.txt", "w");
    $numeros = [10, 20, 25, 16, 31];
    foreach ($numeros as $key => $value) {
        fwrite($file, $value .",");
        
    }
    fclose($file);
}

$array = explode(",",file_get_contents("TestFolder/datos_numericos.txt"));
print_r ($array);
?>